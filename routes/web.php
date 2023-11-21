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

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/dashboard', function () {
        return view('pages.dashboard');
    });

    Route::resource('profile', ProfileController::class);

    Route::get('/profile', function () {
        return view('pages/profile');
    });

    Route::get('/contact-us', function () {
        return view('pages/contact-us');
    });
      
    Route::get('/purchase', function () {
        return view('pages/purchase');
    });
    
    Route::get('/test-history-ept', function () {
        return view('pages/test-history-ept');
    });
    
    Route::get('/test-history-toeic', function () {
        return view('pages/test-history-toeic');
    });
  
    Route::get('/test-guide', function () {
        return view('pages/test-guide');
    });
});

Route::get('/update-profile', [ProfileController::class, '__invoke']);