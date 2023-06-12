<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception; 

class emailLoginController extends Controller
{
function googlelogin()
    {
    return socialite::driver('google')-> redirect();
    }
}
