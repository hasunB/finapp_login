<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

// show login page
Route::get('/', [PageController::class, 'index']);

// show registration page
Route::get('/register', [PageController::class, 'user_register']);

//Store user data
Route::post('/storedata', [PageController::class, 'store']);

//User login Process
Route::post('/userlogin', [PageController::class, 'loginuser']);

//Home page
Route::get('/homepage', [PageController::class, 'homepage']);