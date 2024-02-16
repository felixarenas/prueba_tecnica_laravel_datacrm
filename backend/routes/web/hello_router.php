<?php

Route::group(['middleware' => [], 'namespace' => 'App\Http\Controllers\GestionHelloWeb'], function () {
    Route::get('hello', 'GestionHelloController@hello')->name('hello');
});

Route::group(['middleware' => [], 'namespace' => 'App\Http\Controllers\GestionHome'], function () {
    Route::get('home', 'GestionHomeController@hello')->name('home');
});