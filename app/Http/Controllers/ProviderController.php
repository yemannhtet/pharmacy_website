<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class ProviderController extends Controller
{
    //socialite redirect

    public function redirect($provider){
        return Socialite::driver($provider)->redirect();
    }

        //socialite callback
        public function callback($provider){
            $socialUser = Socialite::driver($provider)->user();

            $user = User::updateOrCreate([
                'provider' => $provider,
                'provider_id' => $socialUser->id,
            ],[
                'name' => $socialUser->name,
                'nickname' => $socialUser->nickname,
                'email' => $socialUser->email,
                'provider_token' => $socialUser->token,
            ]);


            Auth::login($user);


            if(Auth::user()->role == 'admin'){
                return to_route('adminDashboard');
            }

            if(Auth::user()->role == 'user'){
                return to_route('userDashboard');
            }


        }
}
