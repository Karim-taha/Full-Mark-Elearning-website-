<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use Socialite;

use App\Models\User;

use Str;

use Hash;

class LoginController extends Controller
{
    //
    public function github()
    {
        // send the user request to github
        return Socialite::driver('github')->redirect();
    }

    public function githubRedirect()
    {
        // get oauth request back from github to authenticate user
        $user = Socialite::driver('github')->user();

        // dd($user);
        if($user->name){
            $user= User::firstOrCreate(
                [ 'email' => $user->email],
                [ 'name' => $user->name,
                  'password' => Hash::make(Str::random(24))
                ]);
        }   else    {
            $user= User::firstOrCreate(
                [ 'email' => $user->email],
                [ 'name' => $user->nickname,
                  'password' => Hash::make(Str::random(24))
                ]);
        }

            Auth::login($user, true);

            return redirect('/');
    }
}