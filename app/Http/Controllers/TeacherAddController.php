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
use Mail;
class TeacherAddController extends Controller
{

    //create teacher
    public function teacherAdd()
    {

        return view('user.teacherAdd')
            ->with('title', 'Add Teacher/Supervisor');
    }


    //store teachers data
    public function teacherStore(Requests\TeacherAddRequest $request)
    {

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->status = 1;
        $user->is_teacher = 1;
        $user->password = Hash::make($request->password);

        if($user->save()){
            $profile = new Profile();
            $profile->user_id = $user->id;
            //$profile->platform = $request->platform;
           // $profile->position =$request->position;
            //$profile->organization = $request->organization;

            if($profile->save()){

                $role = Role::find(1);
                $user->attachRole($role);

                Mail::send('emails.teacherAdd', ['user' => $user], function ($m) use ($user) {
                    $m->from('noreply@support.com', 'Membership At Data Science Lab');

                    $m->to($user->email, $user->name)->subject('Your Reminder!');
                });

//                Mail::send('emails.teacherAdd', ['password'=>\Input::get('password'), 'email' =>\Input::get('email'),'name'=>\Input::get('name')],
//                    function($message) {
//                        $message->to(\Input::get('email'))
//                            ->subject('Membership Message');
//                    });


                return redirect()->route('user.teacherAdd')
                    ->with('success','Teacher Add Successfully and a Mail sent to him/her');



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



}
