<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admin/dashboard', function () {
    return view('/admin/dashboard');
});

Route::get('/admin/dashboard/manage-users', function () {
    return view('/pages/manage-users');
});

Route::get('/admin/dashboard/ept-manage-question', function () {
    return view('/pages/ept-manage-question');
});

Route::get('/admin/dashboard/toeic-manage-question', function () {
    return view('/pages/toeic-manage-question');
});
