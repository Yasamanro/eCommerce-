<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class AdminController extends Controller {

    public function showLogin() {
        //showing the form
        return view('adminlogin');
    }

    //processing the form
    public function doLogin() {

        $rule = array('password' => 'required|alphaNum|min:3');

        $validator = Validator::make(Input::all(),$rule);

        if($validator->fails()) {
            return Redirect::to('adminlogin')->withErrors($validator);
        } else {
            $password = array('title'=>'admin','password' => Input::get('password'));

            if(Auth::attempt($password)) {
                return redirect('admin');
            } else {
                return redirect('adminlogin');
            }
        }

    }
}