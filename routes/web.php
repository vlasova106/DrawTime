<?php

Route::post('admin_panel/store', 'TestController@store');

Route::get('/admin_panel', 'TestController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/about', function () {
        return view('about');
    });

    Route::get('/editor', function () {
        return view('editor');
    });

});
