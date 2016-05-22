<?php

namespace App\Http\Controllers;

use App\Paper;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PaperContreoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Paper::orderBy('id', 'desc')->get();
        return view('paper.index', compact('event'))->with('title',"All Paper List");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paper.create')->with('title',"Create New Paper");
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
        $paper->paper_meta_data =  md5($request->paper_title);
        $paper->save();

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
        $paper = paper::findOrFail($id);
        return view('paper.edit', compact('paper'))->with('title',"Edit Paper");
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
