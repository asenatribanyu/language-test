<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('welcome');
    }
}