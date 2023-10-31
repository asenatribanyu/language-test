<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
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
            'profile_registrant' => 'string',
            'user_pic' => 'image | mimes:png,jpeg,jpg',
            'profile_npm' =>  'string',
            'profile_faculty' => 'string',
            'profile_program_study' => 'string',
        ]);

        $profile = new Profile;
        $profile->profile_registrant = $validateData['profile_registrant'];
        $profile->profile_npm = $validateData['profile_npm'];
        $profile->profile_faculty = $validateData['profile_faculty'];
        $profile->profile_program_study = $validateData['profile_program_study'];
        $profile->profile_user_id = auth()->user()->id;

        $profile->save();
        // $profile->user_pic = $validateData['user_pic'];
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
