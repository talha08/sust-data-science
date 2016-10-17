<?php

namespace App\Http\Controllers;

use App\Paper;
use App\PaperPeople;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\PaperRequest;
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
         //$teacher = User::where('is_teacher','=',1 )->lists('name','id')->all();
         $teacher = User::lists('name','id')->all();
        //developer can be a student or alumni
         $students = User::where('is_teacher','=',0 )->orWhere('is_teacher','=',2 )->lists('name','id')->all();
        return view('paper.create', compact('students','teacher'))->with('title',"Create New Paper");
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param PaperRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PaperRequest $request)
    {
        $paper = new Paper();
        $paper->paper_title = $request->paper_title;
        $paper->paper_details = $request->paper_details;
        $paper->paper_url = $request->paper_url;
        $paper->paper_meta_data =  str_slug($request->paper_title).'-'.rand(2134,35254263);
       // $paper->paper_pdf = $request->paper_pdf;
        if($paper->save()){
            $paper->users()->attach($request->paper_author);
            $paper->users()->attach($request->paper_supervisor);

            return redirect()->route('paper.index')->with('success', 'Paper Successfully Created');
        }
        return redirect()->back()->with('error', 'Something went wrong');

    }





    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$teacher = User::where('is_teacher','=',1 )->lists('name','id')->all();
        $teacher = User::lists('name','id')->all();
        //developer can be a student or alumni
        $students = User::where('is_teacher','=',0 )->orWhere('is_teacher','=',2 )->lists('name','id')->all();
        $x= PaperPeople::where('paper_id',$id)->lists('user_id','user_id')->all();
        $paper = paper::findOrFail($id);
        return view('paper.edit', compact('paper','students','teacher','x'))->with('title',"Edit Paper");
    }


    /**
     * Update the specified resource in storage.
     *
     * @param PaperRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PaperRequest $request, $id)
    {
        $paper = Paper::findOrFail($id);
        $paper->paper_title = $request->paper_title;
        $paper->paper_details = $request->paper_details;
        $paper->paper_url = $request->paper_url;
        // $paper->paper_pdf = $request->paper_pdf;
        $paper->paper_meta_data =  str_slug($request->paper_title).'-'.rand(2134,35254263);
        if( $paper->save()){

            $paper->users()->sync($request->paper_author);
            $paper->users()->sync($request->paper_supervisor);

            return redirect()->route('paper.index')->with('success', 'Paper Successfully Updated');
        }

        return redirect()->back()->with('error', 'Something Went Wrong');
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
