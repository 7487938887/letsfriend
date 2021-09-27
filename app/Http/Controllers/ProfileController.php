<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfileRequest;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profiles', ['profiles'=>Profile::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreProfileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfileRequest $request)
    {
        // The incoming request is valid...

        // Retrieve the validated input data...
        $validated = $request->validated();

        $validated['password'] = substr(md5(time()),0, 7,);

        Profile::create($validated);

        $status = sprintf( 'User %s was successfully created with password %s', $validated['name'], $validated['password'] );

        return redirect()->route('profiles.index')->with(['status'=>$status]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        return view('profile_show', ['profile' => $profile]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        return view('profile_edit', ['profile' => $profile]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|max:255',
        ]);

        if( $profile->update( $validated ) ){
            $message = 'Profile was successfully updated!';
        }
        else {
            $message = 'Error';
        }

        return redirect()->route('profiles.edit', ['profile' => $profile])->with(['message' => $message]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile = Profile::find($id);
        $profile->delete();

        return redirect()->route('profiles.index');
    }
}
