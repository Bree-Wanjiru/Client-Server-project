<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\SmsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Homepage
Route::get('/', [HomepageController::class, 'index']);

//view dashboard
Route::get(' /dashboard', [HomepageController::class, 'dashboard']);

//show register/create form
Route::get('/register', [UserController::class, 'create']);

// get all users
Route::get('/users', [UserController::class, 'index']);


//create new user
Route::post('/users', [UserController::class, 'store']);

//logout user
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//login form
Route::get('/login', [UserController::class, 'login'])->name('login');

Route::get('/send-sms', [SmsController::class, 'sendSms']);


//login user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
