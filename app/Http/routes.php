<?php



Route::get('/', function () {
    return view('home');
});

Route::get('adminlogin',array('uses' => 'AdminController@showlogin'));
Route::post('adminlogin',array('uses' => 'AdminController@doLogin'));