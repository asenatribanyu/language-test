<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\TOEIC_Question;
use App\Models\TOEIC_Story;

class TOEIC_QuestionController extends Controller
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
        return view('admin/exam/toeic/uploadQuestion', [
            'profile' => User::where('id', auth()->user()->id)->first(),
        ]);
    }

    public function getStory()
    {
        $selects = TOEIC_Story::where('exam_code', session('exam_code'))->get();
        return response()->json($selects);
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
    public function show(TOEIC_Question $tOEIC_Question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TOEIC_Question $tOEIC_Question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TOEIC_Question $tOEIC_Question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TOEIC_Question $tOEIC_Question)
    {
        //
    }
}
