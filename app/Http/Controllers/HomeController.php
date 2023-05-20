<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // for admin page
    public function redirect ()
    {
        if (Auth::id()) {
            if (Auth:: user()->user_type == '0') {
                return view('/user.home');
            }else{
                return view('/admin.home');
            }
        }else{
            return redirect() -> back();
        }
    }

    // For home page

    public function index()
    {
        return view('/user.home');
    }

    // for single Product

    public function singleproduct($id)
    {
       $product = Product::find($id);
        return view('user.page.singlepro',compact('product'));
    }
}
