<?php



Route::get('/', function () {
    return view('home');
});

Route::get('admin',array('uses' => 'AdminController@showlogin'));