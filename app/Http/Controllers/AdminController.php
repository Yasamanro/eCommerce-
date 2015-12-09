<?php

namespace App\Http\Controllers;
use Hash;
use Auth;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller {

    public function showLogin() {
        //showing the form
        return view('adminlogin');
    }

    //processing the form
    public function doLogin(Request $request) {

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if($validator->fails()) {
            return redirect('adminlogin')->withErrors($validator);
        } else {
            $password = array('email'=>$request->input('email'),'password' => $request->input('password'));

            if(Auth::attempt($password)) {
                return redirect('home');
            } else {
                return redirect('adminlogin')->withErrors("Wrong Username or Password");
            }
        }

    }
}