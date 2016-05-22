<?php

namespace App\Http\Controllers;

use App\Award;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $award = Award::orderBy('id', 'desc')->get();
        return view('award.index', compact('award'))->with('title',"All Award List");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teacher = User::where('is_teacher',1)->lists('email','email');
        $student = User::where('is_teacher',0)->where('status',1)->lists('email','email');
        return view('award.create',compact('teacher','student'))->with('title',"Create New Award");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $award = new Award();
        $award->award_title = $request->award_title;
        $award->award_details = $request->award_details;
        $award->award_developer = $request->award_developer;
        $award->award_supervisor = $request->award_supervisor;
        $award->award_position = $request->award_position;
        //$award->award_image = $request->award_image;
        $award->award_meta_data =  md5($request->award_title);
        $award->save();

        return redirect()->back()->with('success', 'Award Successfully Created');
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
        $teacher = User::where('is_teacher',1)->lists('email','email');
        $student = User::where('is_teacher',0)->where('status',1)->lists('email','email');
        $award = Award::findOrFail($id);
        return view('award.edit', compact('award','teacher','student','super'))->with('title',"Edit Award");
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
        $award = Award::findOrFail($id);

        $award->award_title = $request->award_title;
        $award->award_details = $request->award_details;
        $award->award_developer = $request->award_developer;
        $award->award_supervisor = $request->award_supervisor;
        $award->award_position = $request->award_position;
        //$award->award_image = $request->award_image;
        //$award->award_meta_data =  md5($request->award_title);
        $award->save();

        return redirect()->back()->with('success', 'Award Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Award::destroy($id);

        return redirect()->route('award.index')->with('success',"Award Successfully deleted");
    }
}
