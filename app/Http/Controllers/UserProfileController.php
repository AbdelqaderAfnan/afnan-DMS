<?php

namespace App\Http\Controllers;

use App\Models\User_profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id=Auth::id();
        
        $User_profile = DB::table('user_profiles')->where('user_id', $user_id )->first();
        
        if($User_profile==NULL)
        {
            User_profile::create(['user_id'=>$user_id]);
            
        }
        
        return view('User_profile.index',compact('User_profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('User_profile.add');
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
        User_profile::create($request()->all());
        return view('User_profile.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User_profile  $user_profile
     * @return \Illuminate\Http\Response
     */
    public function show(User_profile $user_profile)
    {
        return view('user_profile.show',['user_profile'=>$user_profile]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User_profile  $user_profile
     * @return \Illuminate\Http\Response
     */
    public function edit(User_profile $user_profile)
    {
        return view('User_profile.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User_profile  $user_profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User_profile $user_profile)
    {
        $User_profile = User_profile::findOrFail(request('id'));
        User_profile->fill($request->all())->save();
        return redirect()->route('User_profile.index')
                        ->with('success','User Profile Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User_profile  $user_profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(User_profile $user_profile)
    {
        $user_profile->delete();
        return redirect()->route('user_profile.index');
    }
}
