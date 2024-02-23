<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CertificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.certification', [
            'profile' => User::where('id', auth()->user()->id)->first(),
            'title' => 'Certification',
        ]);
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
        $extension = $request->file('certificate_template')->getClientOriginalExtension();

        if(asset('public/certificate_template/certificate_template.png')){
            Storage::delete('public/certificate_template/certificate_template.png');
        }
        
        $fileName = 'certificate_template.' . $extension;
        $request->file('certificate_template')->storeAs('public/certificate_template', $fileName);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
