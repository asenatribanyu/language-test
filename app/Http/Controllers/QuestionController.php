<?php

namespace App\Http\Controllers;

use App\Models\EPT_Direction;
use App\Models\User;
use App\Models\Question;
use App\Models\Story;
use Illuminate\Http\Request;

class QuestionController extends Controller
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
        return view('admin/exam/uploadQuestion', [
            'profile' => User::where('id', auth()->user()->id)->first(),
            'selects' => Story::where('exam_code', session('exam_code'))->get(),
        ]);
    }

    public function getStory()
    {
        $selects = Story::where('exam_code', session('exam_code'))->get();
        return response()->json($selects);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->file('question')){
            $validateData = $request->validate([
                'exam_code' => 'string',
                'story_code' => 'string',
                'question' => 'file|mimes:mp3,ogg,wav,flac,aac',
                'answer_a' => 'string',
                'answer_b' => 'string',
                'answer_c' => 'string',
                'answer_d' => 'string',
                'correct_answer' => 'string',
                'section' => 'string',
            ]);
        }else{
            $validateData = $request->validate([
                'exam_code' => 'string',
                'story_code' => 'string',
                'question' => 'string',
                'answer_a' => 'string',
                'answer_b' => 'string',
                'answer_c' => 'string',
                'answer_d' => 'string',
                'correct_answer' => 'string',
                'section' => 'string',
            ]);
        }

        $question = new Question();

        switch ($request->questionCase) {
            case '1':
                $question->exam_code = session('exam_code');
                $extension = $request->file('question')->getClientOriginalExtension();
                $fileName = $request->file('question')->getClientOriginalName();
                $fileName = $fileName . $extension;
                $request->file('question')->storeAs('public/question', $fileName);
                $question->question = 'question/' . $fileName;
                $question->answer_a = $validateData['answer_a'];
                $question->answer_b = $validateData['answer_b'];
                $question->answer_c = $validateData['answer_c'];
                $question->answer_d = $validateData['answer_d'];
                $question->correct_answer = $validateData['correct_answer'];
                $question->section = 'part a';
            break;

            case '2':
                $question->exam_code = session('exam_code');
                $question->story_code = $validateData['story_code'];
                $extension = $request->file('question')->getClientOriginalExtension();
                $fileName = $request->file('question')->getClientOriginalName();
                $fileName = $fileName . $extension;
                $request->file('question')->storeAs('public/question', $fileName);
                $question->question = 'question/' . $fileName;
                $question->answer_a = $validateData['answer_a'];
                $question->answer_b = $validateData['answer_b'];
                $question->answer_c = $validateData['answer_c'];
                $question->answer_d = $validateData['answer_d'];
                $question->correct_answer = $validateData['correct_answer'];
                $question->section = 'part b';
            break;

            case '3':
                $question->exam_code = session('exam_code');
                $question->story_code = $validateData['story_code'];
                $extension = $request->file('question')->getClientOriginalExtension();
                $fileName = $request->file('question')->getClientOriginalName();
                $fileName = $fileName . $extension;
                $request->file('question')->storeAs('public/question', $fileName);
                $question->question = 'question/' . $fileName;
                $question->answer_a = $validateData['answer_a'];
                $question->answer_b = $validateData['answer_b'];
                $question->answer_c = $validateData['answer_c'];
                $question->answer_d = $validateData['answer_d'];
                $question->correct_answer = $validateData['correct_answer'];
                $question->section = 'part c';
            break;

            case '4':
                $question->exam_code = session('exam_code');
                $question->question = $validateData['question'];
                $question->answer_a = $validateData['answer_a'];
                $question->answer_b = $validateData['answer_b'];
                $question->answer_c = $validateData['answer_c'];
                $question->answer_d = $validateData['answer_d'];
                $question->correct_answer = $validateData['correct_answer'];
                $question->section = 'structure';
            break;

            case '5':
                $question->exam_code = session('exam_code');
                $question->question = $validateData['question'];
                $question->answer_a = $validateData['answer_a'];
                $question->answer_b = $validateData['answer_b'];
                $question->answer_c = $validateData['answer_c'];
                $question->answer_d = $validateData['answer_d'];
                $question->correct_answer = $validateData['correct_answer'];
                $question->section = 'written';
            break;

            case '6':
                $question->exam_code = session('exam_code');
                $question->story_code = $validateData['story_code'];
                $question->question = $validateData['question'];
                $question->answer_a = $validateData['answer_a'];
                $question->answer_b = $validateData['answer_b'];
                $question->answer_c = $validateData['answer_c'];
                $question->answer_d = $validateData['answer_d'];
                $question->correct_answer = $validateData['correct_answer'];
                $question->section = 'reading';
            break;
        }

        $question->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        $question->delete();
        return redirect()->back();
    }
}
