<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use App\Models\User;
use App\Models\ept_answer;
use Illuminate\Http\Request;

class EptAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('examEPT/testEPT', [
            'profile' => User::where('id', auth()->user()->id)->first(),
            'enrolls' => Enroll::where('user_id', auth()->user()->id)->where('expired', 'no')->first(),
            'warningCard' => false,
            'result' => false,
            'category' => 'ept',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ept_answer $ept_answer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ept_answer $ept_answer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ept_answer $ept_answer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ept_answer $ept_answer)
    {
        //
    }
}
