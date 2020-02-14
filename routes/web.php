<?php

Auth::routes();

Route::get('/', 'PageController@getMain');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('{url}', 'PageController@getIndex');

