<?php

Route::group(['middleware' => [], 'namespace' => 'App\Http\Controllers\GestionHelloWeb'], function () {
    Route::get('hello', 'GestionHelloController@hello')->name('hello');
});