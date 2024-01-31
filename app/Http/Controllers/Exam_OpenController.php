<?php

namespace App\Http\Controllers;

use App\Models\EPT_Open;
use App\Models\Exam;
use App\Models\TOEIC_Open;
use App\Models\User;
use Illuminate\Http\Request;

class Exam_OpenController extends Controller
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
        return view('admin/examControl', [
            'profile' => User::where('id', auth()->user()->id)->first(),
            'ept_opens' => EPT_Open::where('status', 'run')->orWhereNull('status')->first(),
            'toeic_opens' => TOEIC_Open::where('status', 'run')->orWhereNull('status')->first(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'exam_code' => 'string',
            'date' => 'string',
            'time' => 'string',
        ]);

        if($request->category == 'ept'){
            $examExist = EPT_Open::where('exam_code', $request->exam_code)->where('status', 'run')->orWhereNull('status')->first();
            $examOpen = new EPT_Open();
        }
        else{
            $examExist = TOEIC_Open::where('exam_code', $request->exam_code)->where('status', 'run')->orWhereNull('status')->first();
            $examOpen = new TOEIC_Open();
        }
    
        if(!$examExist){
            $examOpen->fill($validateData);
            $examOpen->save();
        }

        return redirect('/admin/dashboard/exam/control/create');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Exam $exam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exam $exam)
    {
        //
    }
}
