<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ExamController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'subname' => 'string',
            'category' => 'string',
        ]);

        $exam = new Exam;
        $exam->code = 'EXM-' . Str::random(10);
        $exam->category = $validateData['category'];
        $exam->title = $validateData['subname'];
        $exam->save();

        $examId = $exam->id;

        return redirect()->route('exam.edit', ['exam' => $examId]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Exam $exam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exam $exam)
    {
        session()->put('exam_code', $exam->code);

        return view('admin/exam/createExam', [
            'profile' => User::where('id', auth()->user()->id)->first(),
            'exam' => $exam,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Exam $exam)
    {
        $validateData = $request->validate([
            'title' => 'string',
            'first_date' => 'string',
            'second_date' => 'string',
            'third_date' => 'string',
            'hour_1' => 'string',
            'hour_2' => 'string',
            'hour_3' => 'string',
            'minute_1' => 'string',
            'minute_2' => 'string',
            'minute_3' => 'string',
            'conference_link' => 'string',
        ]);
        
        $validateData['first_time'] = $validateData['hour_1'] . ':' . $validateData['minute_1'];
        $validateData['second_time'] = $validateData['hour_2'] . ':' . $validateData['minute_2'];
        $validateData['third_time'] = $validateData['hour_3'] . ':' . $validateData['minute_3'];

        $exam->update($validateData);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exam $exam)
    {
        $exam->delete();
        return redirect()->back();
    }
}
