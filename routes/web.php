<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\UserController;

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

//* return view home on /
Route::get('/', function () {
  return view('home');
});

//* Show Register/create form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//* Create new user
Route::post('/create-user', [UserController::class, 'store']);

//* Show login form
Route::get('/login', [UserController::class, 'login'])->middleware('guest')->name('login');

//* Log in user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

//* Log user out
Route::get('/logout', [UserController::class, 'logout'])->middleware('auth');

//* Show create lead view
Route::get('/create-lead', [LeadController::class, 'create']);

//* Store lead
Route::post('/store-lead', [LeadController::class, 'store']);

//* Show all Leads
Route::get('/leads', [LeadController::class, 'index'])->middleware('auth');

//* Show single lead
Route::get('/lead/{lead}', [LeadController::class, 'show'])->middleware('auth');