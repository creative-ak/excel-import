<?php

namespace App\Http\Controllers;

use App\Models\Load;
use Illuminate\Http\Request;

class LoadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loads = Load::get();
        return view('loads.index')
            ->with('loads', $loads);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('loads.create');
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
     * @param  \App\Models\Loading  $loading
     * @return \Illuminate\Http\Response
     */
    public function show(Loading $loading)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Loading  $loading
     * @return \Illuminate\Http\Response
     */
    public function edit(Loading $loading)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Loading  $loading
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loading $loading)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Loading  $loading
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loading $loading)
    {
        //
    }
}
