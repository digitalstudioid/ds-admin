<?php

namespace App\Http\Controllers;

use App\MeetingRoom;
use Illuminate\Http\Request;

class MeetingRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle          = 'Meeting Room';
        $pageDescription    = 'Master';
        
        return view('pages.mrr.meetingroom.index', compact('pageTitle', 'pageDescription'));
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
     * @param  \App\MeetingRoom  $meetingRoom
     * @return \Illuminate\Http\Response
     */
    public function show(MeetingRoom $meetingRoom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MeetingRoom  $meetingRoom
     * @return \Illuminate\Http\Response
     */
    public function edit(MeetingRoom $meetingRoom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MeetingRoom  $meetingRoom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MeetingRoom $meetingRoom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MeetingRoom  $meetingRoom
     * @return \Illuminate\Http\Response
     */
    public function destroy(MeetingRoom $meetingRoom)
    {
        //
    }
}
