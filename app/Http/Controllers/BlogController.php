<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
   public function blog(){
        return view('user.page.blog');
    }
        // post-single

    public function postSingle(){

        return view('user.page.post-single');
    }
}

