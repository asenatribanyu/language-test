<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\TOEIC_Story;
use Illuminate\Http\Request;

class TOEIC_StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/exam/toeic/uploadStory', [
            'profile' => User::where('id', auth()->user()->id)->first(),
        ]);
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
    public function show(TOEIC_Story $tOEIC_Story)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TOEIC_Story $tOEIC_Story)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TOEIC_Story $tOEIC_Story)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TOEIC_Story $tOEIC_Story)
    {
        //
    }
}
