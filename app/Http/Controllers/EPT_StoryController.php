<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\EPT_Story;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class EPT_StoryController extends Controller
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
        return view('admin/exam/ept/uploadStory', [
            'profile' => User::where('id', auth()->user()->id)->first(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->file('story')){
            $validateData = $request->validate([
                'story' => 'file|mimes:mp3,ogg,wav,flac,aac',
                'section' => 'string',
            ]);
        }else{
            $validateData = $request->validate([
                'story' => 'string',
                'section' => 'string',
            ]);
        }
        
        $story = new EPT_Story;

        $story->exam_code = session('exam_code');
        $story->code = 'EXM-' . Str::random(10);
        if($request->file('story')){
            $fileName = $request->file('story')->getClientOriginalName();
            $fileName = time() . "_" . $fileName;
            $request->file('story')->storeAs('public/story', $fileName);
            $story->story = 'story/' . $fileName;
        }else{
            $story->story = $validateData['story'];
        }
        $story->section = $validateData['section'];

        $story->save();

        return redirect('/admin/dashboard/exam/' . session('id')  . '/edit');
    }

    /**
     * Display the specified resource.
     */
    public function show(EPT_Story $story)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EPT_Story $story)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EPT_Story $story)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EPT_Story $story)
    {
        //
    }
}