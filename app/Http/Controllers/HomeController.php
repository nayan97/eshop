<?php

namespace App\Http\Controllers;
use App\Models\cart;
use App\Models\Checkout;
use App\Models\user;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
        // For home page

        public function index()
        {  $product=Product::all();
            return view('/user.home',compact('product'));
        }

    // for admin page
    public function redirect ()
    {
        if (Auth::id()) {
            if (Auth:: user()->user_type == '0') {
                $product=Product::all();
                return view('/user.home',compact('product'));
                
            }else{
                $totalproduct=Product::all()-> count();
                $totaluser=User::all()-> count();
                $totalorder=Checkout::all()-> count();
                $totalprice=Checkout::all();

                $total_revenue=0;
                foreach($totalprice as $totalprices){
                    $total_revenue= $total_revenue+$totalprices->price;
                }

                $totaldeliverd=Checkout::Where('delivery_status','=','delivered')->get()->count();
                $deliverypending=Checkout::Where('delivery_status','=','Prosseing')->get()->count();

                return view('/admin.home', compact('totalproduct','totaluser','totalorder','total_revenue','totaldeliverd','deliverypending'));
            }
        }else{
            return redirect() -> back();
        }
    }



    // for single Product

    public function singleproduct($id)
    {
        $product = Product::find($id);
        return view('user.page.singlepro',compact('product'));
    }

    
     // cart table  
     public function cart(Request $request, $id)
     {
 
         if (Auth::id()) {
                 $user =Auth::user();
                 $product =Product::find($id);
                 $cart =Cart::find($id);
 
                 $cart =new cart;
 
                 $cart -> name = $user->name;
                 $cart -> email = $user->email;
                 $cart -> cell = $user->cell;
                 $cart -> user_id = $user->id;
                 $cart  -> product_title =$product->title;
                 
                 if($product->dis_price!=NULL) 
                 {
                     $cart  -> price =$product->dis_price*$request->qty;
                 }
                 else
                 {
                     $cart  -> price =$product->price*$request->qty; 
                 }
                 $cart  -> product_id =$product->id;
                 $cart  -> photo =$product->image;
                 $cart  -> product_qty=$request->qty;
 
                 $cart -> save();
                 return redirect() -> back();
 
                
         }else{
             return redirect('login');
         }
      
     }
     
    public function showcart()
    {   
        if (Auth::id()) {
            $logid=Auth::user()->id;
            $carts=cart::where('user_id', '=',$logid)->get();
            return view('user.page.cart',compact('carts'));
        }else{
            return redirect('login');
        }

    
    }

    public function removecart($id)
    {
        $cart=cart::find($id);
        $cart->delete();

        return redirect()->back();
    }

    //Checkout Part

    public function checkout()
    {   
        if (Auth::id()) {
            $logid=Auth::user()->id;
            $carts=cart::where('user_id', '=',$logid)->get();
            return view('user.page.checkout',compact('carts'));
        }else{
            return redirect('login');
        }

    
    }

    // Order Table
    public function checkoutorders(Request $request)
    {

        if (Auth::id()) {
            $user=Auth::user();
            $logid=$user->id;
            $cart=cart::where('user_id', '=',$logid)->get();

       foreach ($cart as $cart) {

                $data=new checkout;

                $data->name=$request -> name;
                $data->email=$request -> email;
                $data->address=$request -> address;
                $data->cell=$request -> cell;
                $data->user_id=$cart -> user_id;

                $data  -> product_id =$cart->product_id;
                $data  -> image =$cart->photo;
                $data  -> quantity=$cart->product_qty;
                $data  -> price =$cart->price;

                $data  -> payment_status='Cash On';
                $data  -> delivery_status='Prosseing';

                $data -> save();

                $carts_id=$cart-> id;
                $allcarts=cart::find($cart-> id);
                $allcarts->delete();
       }
               
                return redirect()->back()->with('success','Your Order Submited Successfully');
             

               
        }else{
            return redirect('login');
        }
     
    }

    // About US

    public function about(){
        return view('user.page.about');
    }

     // contact US

     public function contact(){
        return view('user.page.contact');
     }

    // my account

    public function myaccount()
    {
        
        if (Auth::id()) {
            $user=Auth::user();
            $logid=$user->id;
            $order=checkout::where('user_id', '=',$logid)->get();

        return view('user.page.myacc', compact('order'));
             

               
        }else{
            return redirect('login');
        }
     
    }

    // cancel order

    public function cancelorder($id)
    {
        $order=Checkout::find($id);
        $order->delivery_status='Canceled by User';
        $order->save();
        return redirect()->back();
    }

}
