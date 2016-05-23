<?php

namespace App\Http\Controllers;

use App\Project;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('id', 'desc')->get();
        return view('project.index', compact('projects'))->with('title',"All Project List");
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
        return view('project.create',compact('teacher','students'))->with('title',"Create New Project");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $project = new Project();
        $project->project_title = $request->project_title;
        $project->project_details = $request->project_details;
        //$project->project_status = $request->project_status;
        $project->project_developer = $request->project_developer;
        $project->project_supervisor = $request->project_supervisor;
        $project->project_url = $request->project_url;
        //$project->project_image = $request->project_image;
        $project->project_meta_data =  md5($request->project_title);
        $project->save();

        return redirect()->back()->with('success', 'Project Successfully Created');
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
        $projects = Project::findOrFail($id);
        return view('project.edit', compact('projects','teacher','students'))->with('title',"Edit Project");
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
        $project = Project::findOrFail($id);
        $project->project_title = $request->project_title;
        $project->project_details = $request->project_details;
        $project->project_status = $request->project_status;
        $project->project_developer = $request->project_developer;
        $project->project_supervisor = $request->project_supervisor;
        $project->project_url = $request->project_url;
        //$project->project_image = $request->project_image;
        $project->project_meta_data =  md5($request->project_title);
        $project->save();

        return redirect()->back()->with('success', 'Project Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::destroy($id);
        return redirect()->route('project.index')->with('success',"Project Successfully deleted");
    }


    public function changeStatus($id){

        Project::where('id','=',$id)->update([
            'project_status' => 1
        ]);

//        $project = Project::findOrFail($id);
//        $project->project_status = 1;
//        $project->save();

        return redirect()->back()->with('success', 'Status Successfully Updated');
    }
}
