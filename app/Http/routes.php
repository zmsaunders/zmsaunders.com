<?php

Route::get('/', function () {
    return view('about');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::group(array(
        'namespace' => 'Admin',
        'prefix' => 'admin',
        'middleware' => 'auth'
    ), function () {

        Route::get('/', 'DashboardController@index');
});
