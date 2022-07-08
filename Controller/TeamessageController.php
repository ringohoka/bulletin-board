<?php

namespace App\Http\Controllers;

use App\Models\Teamessage;
use App\Http\Requests\StoreTeamessageRequest;
use App\Http\Requests\UpdateTeamessageRequest;
use Illuminate\Support\Facades\DB;

class TeamessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $teamessages = Teamessage::all();
        return view('texboard',compact('teamessages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('twrite');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTeamessageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeamessageRequest $request)
    {
        //
        $teamessage = new Teamessage();
        $teamessage -> contents = $request->input('contents');
        $teamessage -> stucon_no = '5';

        DB::transaction(function () use ($teamessage){
            $teamessage -> save();
        });
        $request -> session() -> regenerateToken();
        return redirect('/texboard/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teamessage  $teamessage
     * @return \Illuminate\Http\Response
     */
    public function show(Teamessage $teamessage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teamessage  $teamessage
     * @return \Illuminate\Http\Response
     */
    public function edit(Teamessage $teamessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeamessageRequest  $request
     * @param  \App\Models\Teamessage  $teamessage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeamessageRequest $request, Teamessage $teamessage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teamessage  $teamessage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teamessage $teamessage)
    {
        //
    }
}
