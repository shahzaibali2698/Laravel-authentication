<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
// use Auth;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function userLogin () {
        return view ('user-login');
    }

    function checkLogin(Request $request){

        $this->validate($request, [
            'email' =>   'required|email',
            'password'  =>   'required|alphaNum|min:3',
        ]);

        $user_data = array(
            'email'  => $request->get('email'),
            'password' => $request->get('password')
           );

           if(Auth::attempt($user_data))
           {
            return redirect('/user-dashbaord');
           }
           else
           {
            return back()->with('error', 'Wrong Login Details');
           }
    }


            function successlogin()
            {
             return view('sider-bar');
            }

            function logout()
            {
             Auth::logout();
             return redirect('/user/login');
            }




}
