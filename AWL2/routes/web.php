<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegistrationController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::post("users",[UserController::class,'getData']);
// Route::view("login","users");

Route::get('/register',[RegistrationController::class, 'index']);

Route::post('/register',[RegistrationController::class, 'register']);

Route::view('/home',"home");

Route::view('about','about');

Route::view('contact','contact');

//login 
Route::view('login','login');

Route::get('/login',[LoginController::class, 'loginIndex']);

Route::post('/login',[LoginController::class, 'login']);



