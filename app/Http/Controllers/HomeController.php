<?php

namespace App\Http\Controllers;
use App\Models\cart;
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
                return view('/admin.home');
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

}
