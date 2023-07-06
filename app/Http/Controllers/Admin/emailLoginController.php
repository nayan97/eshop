<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class emailLoginController extends Controller
{
function googlelogin()
    {
    return Socialite::driver('google')-> redirect();
    }

function googlecallback()
    {
    
            
            $user = Socialite::driver('google')->user();
       
            $finduser = User::where('google_id', $user->id)->first();
     
            if(!$finduser){
                    $newUser = User::create([
                        'name' => $user->name,
                        'email' => $user->email,
                        'google_id'=> $user->id,
                        'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/');
       
            }

            else{
                Auth::login($finduser);
                return redirect()->intended('/');
               }
      
         
    }


}
