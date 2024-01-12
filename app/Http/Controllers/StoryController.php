<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Story;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class StoryController extends Controller
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
        return view('admin/exam/uploadStory', [
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
        
        $story = new Story();

        $story->exam_code = session('exam_code');
        $story->code = 'EXM-' . Str::random(10);
        if($request->file('story')){
            $extension = $request->file('story')->getClientOriginalExtension();
            $fileName = $request->file('story')->getClientOriginalName();
            $fileName = $fileName . $extension;
            $request->file('story')->storeAs('public/story', $fileName);
            $story->story = 'story/' . $fileName;
        }else{
            $story->story = $validateData['story'];
        }
        $story->section = $validateData['section'];

        $story->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Story $story)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Story $story)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Story $story)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Story $story)
    {
        //
    }
}
