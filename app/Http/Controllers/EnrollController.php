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
            'for' => 'string',
            'date' => 'string',
            'time' => 'string',
            'status' => 'string',
        ]);

        $enroll = new Enroll();
        
        $validateData['user_id'] = auth()->user()->id;
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
    public function update(Request $request, Enroll $enroll)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enroll $enroll)
    {
        //
    }
}
