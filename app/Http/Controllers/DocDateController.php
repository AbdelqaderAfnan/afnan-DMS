<?php

namespace App\Http\Controllers;

use App\Models\Doc_date;
use Illuminate\Http\Request;

class DocDateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Doc_date = Doc_date::latest();
        return view('Doc_date.index',['Doc_date'=>$Doc_date]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Doc_date.create');
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
            'date_sent'         => 'required',
            'date_received'     => 'required',
            'date_edited'       => 'required',
            'expiration_date'   => 'required',
        ]);
        Doc_date::create($request()->all());
        return redirect()->route('Doc_date.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doc_date  $doc_date
     * @return \Illuminate\Http\Response
     */
    public function show(Doc_date $doc_date)
    {
        return view('Doc_date.show',['Doc_date'=>$Doc_date]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doc_date  $doc_date
     * @return \Illuminate\Http\Response
     */
    public function edit(Doc_date $doc_date)
    {
        return view('Doc_date.edit',['Doc_date'=>$Doc_date]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doc_date  $doc_date
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doc_date $doc_date)
    {
        $Doc_date = Doc_date::findOrFail(request('id'));
        $Doc_date->fill($request->all())->save();
        return redirect()->route('Doc_date.show')
                        ->with('success','Doc_date has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doc_date  $doc_date
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doc_date $doc_date)
    {
        $doc_date->delete();
        return redirect()->route('Doc_date.index');
    }
}
