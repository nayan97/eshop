<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;

class HomeController extends Controller
{
    // for admin page
    public function redirect ()
    {
        if (Auth::id()) {
            if (Auth:: user()->user_type == '0') {
                return view('/user.home');
            }else{
                return view('admin.home');
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
}
