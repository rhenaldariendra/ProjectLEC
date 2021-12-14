<?php

use App\Http\Controllers\CustomAuthController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('home');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/reservation', function () {
    return view('reservation');
});
Route::get('/menu', function (){
    return view('menu');
});



Route::get('reservation', [CustomAuthController::class, 'reserve'])->name('login');
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');





// GOOGLE LOGIN
Route::get('auth/google', [App\Http\Controllers\GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::any('/auth/google/callback',[App\Http\Controllers\GoogleController::class, 'handleGoogleCallback'])->name('google.callback');
// END
