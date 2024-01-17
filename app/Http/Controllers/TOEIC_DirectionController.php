<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\TOEIC_Direction;

class TOEIC_DirectionController extends Controller
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
        return view('admin/exam/toeic/uploadDirection', [
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
    public function show(TOEIC_Direction $tOEIC_Direction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TOEIC_Direction $tOEIC_Direction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TOEIC_Direction $tOEIC_Direction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TOEIC_Direction $tOEIC_Direction)
    {
        //
    }
}
