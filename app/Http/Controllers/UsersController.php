<?php

namespace App\Http\Controllers;


use App\Http\Requests\UserRequest;
use App\Profile;
use Illuminate\Http\Request;
use App\User;
use Validator;
use Auth;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Role;


class UsersController extends Controller
{
    //List all User
    public function index()
    {
        $user = User::where('status', 1)
            //->where('id','!=',1)
            ->get();
        return view('user.index', compact('user'))
            ->with('title', 'All User List');
    }

    //List all students
    public function student()
    {
        $user = User::where('status', 1)->where('is_teacher','=',0)->get();
        return view('user.student', compact('user'))
            ->with('title', 'All Student List');
    }

    //List all Teachers
    public function teacher()
    {
        $user = User::where('status', 1)->where('is_teacher','=',1)->get();
        return view('user.teacher', compact('user'))
            ->with('title', 'All Teacher List');
    }

    //List all Alumni
    public function alumni()
    {
        $user = User::where('status', 1)->where('is_teacher','=',2)->get();
        return view('user.alumni', compact('user'))
            ->with('title', 'All Alumni List');
    }


    // make a student to alumni
    public  function makeAlumni($id){
        $user = User::findOrFail($id);
        $user->is_teacher = 2;
        if($user->save()){
            return redirect()->back()->with('success', 'User Successfully as a Alumni');
        }
        else{
            return redirect()->back()->with('error', 'Something Went Wrong, Try Again');
        }
    }


    //all apply list
    public function applyList()
    {
        $user = User::where('status', 0)->get();
        return view('user.applyList', compact('user'))
            ->with('title', 'All Apply List');
    }


    //user approve
    public function approve($id){
        User::where('id', $id)->update([
            'status'=> 1,
        ]);
        return redirect()->back();
    }





    //create user
    public function create()
    {
        $platform= [
            'Php'=>'Php',
            'Android'=>'Android',
            'Laravel'=>'Laravel',
            'Java'=>'Java',
            'Python'=>'Python',
            'Ruby on Rails'=>'Ruby on Rails',
            'C & C++'=>'C & C++',
            'NodeJs'=>'NodeJs',
            'Sails'=>'Sails',
            'Express'=>'Express',
            'Spring'=>'Spring',
            'Jquery'=>'Jquery',
            'JavaScript'=>'JavaScript',
        ];

        return view('user.create',compact('platform'))
            ->with('title', 'Apply For Membership');
    }


    //store users data
    public function store(UserRequest $request)
    {

            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);

            if($user->save()){
                $profile = new Profile();
                $profile->user_id = $user->id;
                $profile->platform = $request->platform;
                $profile->position =$request->position;
                //$profile->organization = $request->organization;

                if($profile->save()){

                    $role = Role::find(2);
                    $user->attachRole($role);

                    Auth::logout();
                    return redirect()->route('login')
                        ->with('success','Registered successfully.Now you have to wait for admin verification.');
                }else{
                    User::destroy($user->id);
                    return redirect()->back()
                        ->with('error','Something went wrong.Please Try again.');
                }
            }else{
                return redirect()->back()
                            ->with('error',"Something went wrong.Please Try again.");
            }
    }








    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        User::destroy($id);

        return redirect()->back()->with('success', "User Successfully deleted");
    }


    //3rd party account information
    public function help(){
          return view('help')->with('title','3rd Party Account Information');
    }
}
