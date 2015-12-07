<?php

Route::get('/', function () {
    return view('about');
});

Route::get('blog', 'BlogController@index');
Route::get('blog/{slug}', 'BlogController@entry');

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
        Route::get('post/new', 'PostController@newForm');
        Route::get('post/{postID}', 'PostController@editForm');
        Route::post('post/{postID?}', 'PostController@save');
});

// Old redirects
route::get('laravel-asset-management-and-auto-deployments', function() {
	return redirect('/blog/laravel-asset-management-and-auto-deployments');
});

route::get('cookie-monster', function() {
	return redirect('/blog/cookie-monster');
});

route::get('fun-with-tlds', function() {
	return redirect('/blog/fun-with-tlds');
});

route::get('hello-world', function() {
	return redirect('/blog/hello-world');
});
