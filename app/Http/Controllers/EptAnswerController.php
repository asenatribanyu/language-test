<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use App\Models\User;
use App\Models\ept_answer;
use App\Models\EPT_Open;
use App\Models\EPT_Question;
use App\Models\EPT_Story;
use App\Models\EptQuestionAudio;
use App\Models\EptStoryAudio;
use Illuminate\Http\Request;

class EptAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('examEPT/testEPT', [
            'profile' => User::where('id', auth()->user()->id)->first(),
            'enrolls' => Enroll::where('user_id', auth()->user()->id)->where('expired', 'no')->first(),
            'eptOpen' => EPT_Open::Where('status', 'run')->first(),
            'warningCard' => false,
            'result' => false,
            'category' => 'ept',
            'title' => 'EPT Exam',
        ]);
    }

    public function fetchQuestionPlayButton(){
        $questionPlayButton = EptQuestionAudio::where('user_id', auth()->user()->id)->get();
        $questionAudio = EPT_Question::whereIn('section', ['part a', 'part b', 'part c'])->get();

        return response()->json(['disabledButton' => $questionPlayButton, 'questionList' => $questionAudio]);
    }

    public function fetchStoryPlayButton(){
        $storyPlayButton = EptStoryAudio::where('user_id', auth()->user()->id)->get();
        $storyAudio = EPT_Story::whereIn('section', ['part b', 'part c'])->get();

        return response()->json(['disabledButton' => $storyPlayButton, 'storyList' => $storyAudio]);
    }

    public function postQuestionPlayButton(Request $request, EptQuestionAudio $eptQuestionAudio){
        $validateData = $request->validate([
            'status' => 'string',
            'question_id' => 'string',
        ]);

        $exist = EptQuestionAudio::where('user_id', auth()->user()->id)->where('question_id', $validateData['question_id'])->first();

        if(!$exist){
            $disablePlayButton = new EptQuestionAudio();
            $disablePlayButton->status = $validateData['status'];
            $disablePlayButton->question_id = $validateData['question_id'];
            $disablePlayButton->user()->associate(auth()->user()->id);
        }
        
        $disablePlayButton->save();

        return response()->json(['message' => 'Sukses disabled play question button']);
    }

    public function postStoryPlayButton(Request $request, EptStoryAudio $eptStoryAudio){
        $validateData = $request->validate([
            'status' => 'string',
            'story_id' => 'string',
        ]);

        $exist = EptStoryAudio::where('user_id', auth()->user()->id)->where('story_id', $validateData['story_id'])->first();

        if(!$exist){
            $disablePlayButton = new EptStoryAudio();
            $disablePlayButton->status = $validateData['status'];
            $disablePlayButton->story_id = $validateData['story_id'];
            $disablePlayButton->user()->associate(auth()->user()->id);
        }
        
        $disablePlayButton->save();

        return response()->json(['message' => 'Sukses disabled play story button']);
    }

    public function fetchAnswer(){
        $answer = ept_answer::where('user_id', auth()->user()->id)->get();

        return response()->json($answer);
    }

    public function postAnswer(Request $request, ept_answer $ept_answer){
        $validateData = $request->validate([
            'answer' => 'string',
            'question_id' => 'string',
        ]);

        $check = ept_answer::where('user_id', auth()->user()->id)->where('question_id', $validateData['question_id'])->first();

        if($check){
            $check->update($validateData);
        }
        else{
            $answer = new ept_answer();
            $answer->answer = $validateData['answer'];
            $answer->ept_question()->associate($validateData['question_id']);
            $answer->user()->associate(auth()->user()->id);
            $answer->save();
        }

        return response()->json(['message' => 'Sukses menambah jawaban']);
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
    public function show(ept_answer $ept_answer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ept_answer $ept_answer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ept_answer $ept_answer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ept_answer $ept_answer)
    {
        //
    }
}
