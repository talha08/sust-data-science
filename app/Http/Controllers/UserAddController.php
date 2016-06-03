<?php

namespace App\Http\Controllers;

use App\Student;
use App\Teacher;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Role;
use Mail;
use App\User;
use App\Http\Requests\UserAddRequest;


class UserAddController extends Controller
{


    /**
     * User Add form
     * Add by Admin
     *
     * @return $this
     */
    public function userAdd()
    {
        return view('auth.userAdd')
            ->with('title', 'Add Teacher Or Student');
    }





    /**
     * store user data
     *
     * @param UserAddRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function userStore(UserAddRequest $request)
    {

        //return  $request->all();
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->status = 1;

        if($request->type == 1 ){
            $user->is_teacher = 1;
        }
        else{
            $user->is_teacher = 0;
        }

        $passwordRandom = 'user'.rand(234574,315457);
        $user->password = \Hash::make($passwordRandom);

        if($user->save()){

            if($request->type ==1 ){
                $profile = new Teacher();
                $profile->user_id = $user->id;
            }
            else{
                $profile = new Student();
                $profile->user_id = $user->id;
            }

            if($profile->save()){

                $role = Role::find(2);  //role attach 2
                $user->attachRole($role);


                $datatopass = [
                    'user' => $user,
                    'password' => $passwordRandom
                ];

                Mail::send('emails.teacherAdd', $datatopass, function ($m) use ($user) {
                    $m->from('noreply@support.com', 'Membership At Data Science Lab');

                    $m->to($user->email, $user->name)->subject('Your Reminder!');
                });


                return redirect()->route('auth.userAdd')
                    ->with('success','User Add Successfully and a Mail sent to him/her');

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
