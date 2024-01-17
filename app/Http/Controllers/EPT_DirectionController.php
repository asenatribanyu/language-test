<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\EPT_Direction;
use Illuminate\Support\Facades\Storage;

class EPT_DirectionController extends Controller
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
        return view('admin/exam/ept/uploadDirection', [
            'profile' => User::where('id', auth()->user()->id)->first(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'audio' => 'nullable|file|mimes:mp3,ogg,wav,flac,aac',
            'direction' => 'string',
            'section' => 'string',
        ]);

        $condition = EPT_Direction::where('exam_code',session('exam_code'))->where('section', $validateData['section'])->first();

        if($condition){
            if($validateData['audio']){
                Storage::delete('public/' . $condition->audio);
            }
            $fileName = $request->file('audio')->getClientOriginalName();
            $fileName = time() . "_" . $fileName;
            $request->file('audio')->storeAs('public/audio', $fileName);
            $condition->audio = 'audio/' . $fileName;
            $condition->direction = $validateData['direction'];
            $condition->save();
        }else{
            $direction = new EPT_Direction();   
            $direction->exam_code = session('exam_code');
            if($request->file('audio')){
                $fileName = $request->file('audio')->getClientOriginalName();
                $fileName = time() . "_" . $fileName;
                $request->file('audio')->storeAs('public/audio', $fileName);
                $direction->audio = 'audio/' . $fileName;
            }
            $direction->direction = $validateData['direction'];
            $direction->section = $validateData['section'];
            $direction->save();
        }

        return redirect('/admin/dashboard/exam/' . session('id')  . '/edit');
    }

    /**
     * Display the specified resource.
     */
    public function show(EPT_Direction $ePT_Direction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EPT_Direction $ePT_Direction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EPT_Direction $ePT_Direction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EPT_Direction $ePT_Direction)
    {
        //
    }
}