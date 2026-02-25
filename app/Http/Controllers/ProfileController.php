<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'first_name' => 'required|string',
            'middle_name' => 'nullable|string',
            'surname' => 'required|string',
            'phone' => 'required|numeric|digits:11',
            'passport' => 'nullable|images|mimes:jpg,jpeg,png,svg|size:5000',
            'email' => 'email|required|unique:profiles,email',
            'address' => 'nullable|string',
            'state_of_origin' => 'nullable|string',
            'local_govt' => 'nullable|string',
            'gender' => 'nullable|string',
            'occupation' => 'string|required',
            'bvn' => 'string|required|digits:11',
            'date_of_birth' => 'date|required',
            'name_next_of_kin' => 'string|nullable',
            'addy_next_of_kin' => 'string|nullable',
            'email_of_next_of_kin' => 'email|nullable|string',
            'phone_next_of_kin' => 'numeric|nullable|digits:11'
        ]);

        $profile = Profile::create([
            'user_id' => $user->id, 
            'surname' => $request->surname,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'state_of_origin' => $request->state_of_origin,
            'local_govt' => $request->local_govt,
            'gender' => $request->gender,
            'occupation' => $request->occupation,
            'bvn' => $request->bvn,
            'date_of_birth' => $request->date_of_birth,
            'name_next_of_kin' => $request->name_next_of_kin,
            'addy_next_of_kin' => $request->addy_next_of_kin,
            'email_next_of_kin' => $request->email_next_of_kin,
            'phone_next_of_kin' => $request->phone_next_of_kin,
         ]);
        return redirect()->back()->with('success', 'Your profile has been completed');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
