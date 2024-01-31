<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use Illuminate\Http\Request;

class EnrollController extends Controller
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
            'exam_code' => 'string',
            'for' => 'string',
            'date' => 'string',
            'time' => 'string',
            'status' => 'string',
        ]);

        $enroll = new Enroll();

        $enroll->user()->associate(auth()->user()->id);
        $enroll->exam()->associate($validateData['exam_code']);
        $validateData['expired'] = 'no';
        $enroll->fill($validateData);
        $enroll->save();

        return redirect('/dashboard/' . $validateData['for'] . '/waiting-area/enroll');
    }

    /**
     * Display the specified resource.
     */
    public function show(Enroll $enroll)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enroll $enroll)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $enroll = Enroll::where('id', $id)->first();
        
        $validateData = $request->validate([
            'status' => 'string',
            'expired' => 'string'
        ]);

        $enroll->update($validateData);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enroll $enroll)
    {
        //
    }
}
