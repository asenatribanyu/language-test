<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Enroll;
use App\Models\toeic_answer;
use Illuminate\Http\Request;

class ToeicAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('examTOEIC/testTOEIC', [
            'profile' => User::where('id', auth()->user()->id)->first(),
            'enrolls' => Enroll::where('user_id', auth()->user()->id)->where('expired', 'no')->first(),
            'warningCard' => false,
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
    public function show(toeic_answer $toeic_answer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(toeic_answer $toeic_answer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, toeic_answer $toeic_answer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(toeic_answer $toeic_answer)
    {
        //
    }
}
