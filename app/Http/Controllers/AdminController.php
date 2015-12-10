<?php

namespace App\Http\Controllers;
use App\Product;
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
    public function doAdminLogin(Request $request) {

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if($validator->fails()) {
            return redirect('adminlogin')->withErrors($validator);
        } else {
            $password = array('email'=>$request->input('email'),'password' => $request->input('password'));

            if(Auth::attempt($password)) {
                return redirect('admin');
            } else {
                return redirect('adminlogin')->withErrors("Wrong Username or Password");
            }
        }

    }

    public function doAdminLogout() {
        Auth::logout();
        return redirect('adminlogin');
    }

    public function insertProduct(Request $request) {
        $product = new Product;
        $product->title = $request->input('title');
        $product->body = $request->input('body');
        $product->type = $request->input('type');
        $product->quantity = $request->input('quantity');
        $product->price = $request->input('price');
        $product->available = $request->input('available');

        if ($request->file('image')->isValid()) {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $destinationPath = 'Images';
            $file->move($destinationPath,$name);
            $product->imgAddress = $destinationPath.'/'.$name;
        }
        $product->save();
        return redirect('addproduct');
    }
}