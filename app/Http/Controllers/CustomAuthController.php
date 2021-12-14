<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Post;
use Illuminate\Support\Facades\Blade;



class CustomAuthController extends Controller{
    public function index(){
        return view('login');
    }
    public function reserve(){
        if(Auth::check()){
            return view('reservation');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function customLogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('home')->withSuccess('Signed in');
        }
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration(){
        return view('register');
    }

    public function customRegistration(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required|numeric',
            'password' => 'required|min:8|required_with:confirmation|same:confirmation|alpha_dash',
            'confirmation' => 'min:8|required'
        ]);

        $data = $request->all();
        $check = $this->create($data);
        $check->save();

        return redirect("home")->withSuccess('You have signed-in');
    }

    public function create(array $data){
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'phone' => $data['phone'],
        'password' => Hash::make($data['password'])
      ]);
    } 

    public function dashboard(){
        if(Auth::check()){
            return view('home');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
