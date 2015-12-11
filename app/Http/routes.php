<?php

Route::get('home', array('uses' => 'HomeController@showHome'));

/////////////////////////////////////

Route::get('adminlogin', array('uses' => 'AdminController@showAdminlogin'));
Route::post('adminlogin', array('uses' => 'AdminController@doAdminLogin'));

/////////////////////////////////////

Route::get('admin', function() {
    return view('admin');
});

/////////////////////////////////////

Route::get('addproduct', function() {
    return view('addproduct');
});
Route::post('addproduct', array('uses' => 'AdminController@insertProduct'));

/////////////////////////////////////

Route::get('logout' , array('uses' => 'AdminController@doAdminLogout'));

////////////////////////////////////

Route::get('login' , array('uses' => 'HomeController@showLogin'));
Route::post('login' , array('uses' => 'HomeController@doLogin'));
Route::get('logout', array('uses' => 'HomeController@doLogout'));

////////////////////////////////////

Route::post('cart', array('uses' => 'FrontController@cart'));
Route::get('cart' , array('uses' => 'FrontController@cart'));