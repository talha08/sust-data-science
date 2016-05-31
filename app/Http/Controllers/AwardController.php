<?php

namespace App\Http\Controllers;

use App\Award;
use App\User;
use Illuminate\Http\Request;
use App\AwardPeople;

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
        //$award = AwardPeople::orderBy('id', 'desc')->get();
        return view('award.index', compact('award'))->with('title',"All Award List");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teacher = User::where('is_teacher',1)->lists('name','id');
        $student = User::where('is_teacher',0)->where('status',1)->lists('name','id');
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
        $award->award_position = $request->award_position;
        $award->award_meta_data =  str_slug($request->award_title);
        //$award->award_image = $request->award_image;

       if( $award->save()){
           $award->users()->attach($request->award_supervisor);
           $award->users()->attach($request->award_developer);

           return redirect()->back()->with('success', 'Award Successfully Created');
       }

        return redirect()->back()->with('error', 'Something went wrong');
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











    /** vg
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $x= AwardPeople::where('award_id',$id)->lists('user_id','user_id')->all();
        $teacher = User::where('is_teacher',1)->lists('name','id')->all();
        $student = User::where('is_teacher',0)->where('status',1)->lists('name','id')->all();
        $award = Award::findOrFail($id);
        return view('award.edit', compact('award','teacher','student','super','x'))->with('title',"Edit Award");
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
        $award->award_position = $request->award_position;
        //$award->award_image = $request->award_image;
        $award->award_meta_data =  str_slug($request->award_title);
        if( $award->save()){

            $award->users()->sync($request->award_supervisor);
            $award->users()->attach($request->award_developer);

            return redirect()->back()->with('success', 'Award Successfully Updated');
        }
        return redirect()->back()->with('error', 'Something went wrong');
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
