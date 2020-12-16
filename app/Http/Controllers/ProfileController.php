<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Auth;
use DB;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id=Auth::user()->id;
        $checkuser = DB::table('profiles')->where('user_id', $user_id)->first();
        if($checkuser == NULL)
        {
            Profile::create(['user_id'=>$user_id]); 
        }
        $profile = Profile::latest();
        return view('User_profile.index',['profile'=>$profile]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('User_profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'branch_id' => 'required',
        ]);
        Profile::create($request()->all());
        return redirect()->route('User_profile.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        $user_id=Auth::user()->id;
        $checkuser = DB::table('profiles')->where('user_id', $user_id)->first();
        if($checkuser == NULL)
        {
            Profile::create(['user_id'=>$user_id]); 
        }
        return view('User_profile.show',['profile'=>$profile]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        return view('User_id.edit',['profile'=>$profile]);
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
        $profile = Profile::findOrFail(request('id'));
        $profile = fill($request->all())->save();
        return redirect()->route('profile.show')
                        ->with('success','Profile has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        $profile->delete();
        return redirect()->route('User_profile.index');
    }
}
