<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::orderBy('id', 'desc')->get();
        return view('event.index', compact('event'))->with('title',"All Event List");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.create')->with('title',"Create New Event");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new Event();
        $event->event_title = $request->event_title;
        $event->event_details = $request->event_details;
        $event->event_start = $request->event_start;
        $event->event_end = $request->event_end;
        $event->event_time = $request->event_time;
        //$award->event_image = $request->event_image;
        $event->event_meta_data =  md5($request->event_title);
        $event->save();

        return redirect()->back()->with('success', 'Event Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('event.edit', compact('event'))->with('title',"Edit Event");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->event_title = $request->event_title;
        $event->event_details = $request->event_details;
        $event->event_start = $request->event_start;
        $event->event_end = $request->event_end;
        $event->event_time = $request->event_time;
        //$award->event_image = $request->event_image;
        $event->event_meta_data =  md5($request->event_title);
        $event->save();

        return redirect()->back()->with('success', 'Event Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Event::destroy($id);
        return redirect()->route('event.index')->with('success',"Event Successfully deleted");
    }
}
