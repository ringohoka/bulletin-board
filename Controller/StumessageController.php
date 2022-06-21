<?php

namespace App\Http\Controllers;

use App\Models\Stumessage;
use App\Http\Requests\StoreStumessageRequest;
use App\Http\Requests\UpdateStumessageRequest;

class StumessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $stumessages = Stumessage::all(); 
        return view('exboard',compact('stumessages')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStumessageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStumessageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stumessage  $stumessage
     * @return \Illuminate\Http\Response
     */
    public function show(Stumessage $stumessage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stumessage  $stumessage
     * @return \Illuminate\Http\Response
     */
    public function edit(Stumessage $stumessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStumessageRequest  $request
     * @param  \App\Models\Stumessage  $stumessage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStumessageRequest $request, Stumessage $stumessage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stumessage  $stumessage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stumessage $stumessage)
    {
        //
    }
}
