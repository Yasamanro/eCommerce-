<?php



Route::get('home', function () {
    return view('home');
});

Route::get('adminlogin',array('uses' => 'AdminController@showlogin'));
Route::post('adminlogin',array('uses' => 'AdminController@doAdminLogin'));

Route::get('admin', function() {
    return view('admin');
});

Route::get('logout',array('uses' => 'AdminController@doAdminLogout'));