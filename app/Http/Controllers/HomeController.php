<?php

namespace App\Http\Controllers;
use App\Product;
use Hash;
use Auth;
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
}