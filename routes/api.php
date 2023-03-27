<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//* Get api token
Route::post('/login', [UserController::class, 'getapitoken']);

//* Create lead
Route::post('/create-lead', [LeadController::class, 'storeapi']);

//* Get single lead by ID
Route::middleware('auth:sanctum')->post('/get-lead/{lead}', [LeadController::class, 'getlead']);