<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return view('pages/login');
});

Route::get('/forgot-password', function () {
    return view('pages/forgot-password');
});

Route::get('/register', function () {
    return view('pages/register');
});

Route::get('/reset-password', function () {
    return view('pages/reset-password');
});

Route::get('/update-profile', function () {
    return view('pages/update-profile');
});

Route::resource('profile', ProfileController::class);