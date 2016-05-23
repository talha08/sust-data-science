<?php

namespace App\Http\Controllers;

use App\Paper;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $papers = Paper::orderBy('id', 'desc')->get();
        return view('paper.index', compact('papers'))->with('title',"All Paper List");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $teacher = User::where('is_teacher','=',1 )->lists('email','email');
         $students = User::where('is_teacher','=',0 )
             ->orWhere('is_teacher','=',2 )
             ->lists('email','email');
        return view('paper.create', compact('students','teacher'))->with('title',"Create New Paper");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paper = new Paper();
        $paper->paper_title = $request->paper_title;
        $paper->paper_details = $request->paper_details;
        $paper->paper_author = $request->paper_author;
        $paper->paper_supervisor = $request->paper_supervisor;
        $paper->paper_url = $request->paper_url;
       // $paper->paper_pdf = $request->paper_pdf;
        $paper->paper_meta_data =  md5($request->paper_title);
        $paper->save();

        return redirect()->back()->with('success', 'Paper Successfully Created');
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
        $teacher = User::where('is_teacher','=',1 )->lists('email','email');
        $students = User::where('is_teacher','=',0 )
            ->orWhere('is_teacher','=',2 )
            ->lists('email','email');
        $paper = paper::findOrFail($id);
        return view('paper.edit', compact('paper','students','teacher'))->with('title',"Edit Paper");
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
        $paper = Paper::findOrFail($id);
        $paper->paper_title = $request->paper_title;
        $paper->paper_details = $request->paper_details;
        $paper->paper_author = $request->paper_author;
        $paper->paper_supervisor = $request->paper_supervisor;
        $paper->paper_url = $request->paper_url;
        // $paper->paper_pdf = $request->paper_pdf;
        // $paper->paper_meta_data =  md5($request->paper_title);
        $paper->save();


        return redirect()->back()->with('success', 'Paper Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Paper::destroy($id);
        return redirect()->route('paper.index')->with('success',"Paper Successfully deleted");
    }

}
