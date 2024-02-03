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
        $eptOpen = EPT_Open::where('status', 'run')->orWhereNull('status')->first();
        
        if($eptOpen){
            $open = $eptOpen;
        }
        else{
            $open = TOEIC_Open::where('status', 'run')->orWhereNull('status')->first();
        }

        return view('admin/examControl', [
            'profile' => User::where('id', auth()->user()->id)->first(),
            'examOpen' => $open,
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
    public function update(Request $request, $id)
    {
        if($request->category == 'ept'){
            $exam = EPT_Open::where('id', $id)->first();
        }
        else{
            $exam = TOEIC_Open::where('id', $id)->first();
        }

        $validateData = $request->validate([
            'status' => 'string'
        ]);

        $exam->update($validateData);

        foreach($exam->exam->enroll as $enroll){
            $enroll->update(['expired' => 'yes']);
        }

        if($validateData['status'] == 'run'){
            return redirect()->back();
        }
        else{
            return redirect('/admin/dashboard');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exam $exam)
    {
        //
    }
}
