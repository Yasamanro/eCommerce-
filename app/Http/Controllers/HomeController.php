<?php

namespace App\Http\Controllers;
use App\Product;
use Hash;
use Auth;
use DB;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class HomeController extends Controller {

    public function selectProduct($type) {
        $product = Product::where('type','=',$type)->get();
        return $product;
    }

    public function showHome() {
        return view('home',array('mobiles' => $this->selectProduct('mobile') , 'books' => $this->selectProduct('book') , 'notebooks' => $this->selectProduct('notebook')));
    }

    public function showLogin() {
        return view('login');
    }

    public function doLogin(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if($validator->fails()) {
            return redirect('login')->withErrors($validator);
        } else {
            $password = array('email'=>$request->input('email'),'password' => $request->input('password'));

            if(Auth::attempt($password)) {
                return redirect('home');
            } else {
                return redirect('login')->withErrors("Wrong Username or Password");
            }
        }
    }

    public function doLogout() {
        Auth::logout();
        return redirect('home');
    }

    public function search(Request $request) {
        $search = $request->input('search');
        $findItems = DB::table('products')->where('title','like',"%$search%")->get();
        return view('search',array('found' => $findItems));
    }

    public function getSearch() {
        return view('search');
    }
}