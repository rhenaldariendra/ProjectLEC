<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
class GoogleController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){
        try {
            $user = Socialite::driver('google')->stateless()->user();
            // dd($user);
            // dd($user->getId());
            $findUser = User::where('google_id', $user->getId())->first();

            if($findUser){
                Auth::login($findUser);
                return redirect()->intended('home');
            }else{
                // dd($user);
                $newUser = User::create([
                    'google_id' => $user->getId(),
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'password' => bcrypt('123456789'),
                ]);

                Auth::login($newUser);
                return redirect('home');
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
