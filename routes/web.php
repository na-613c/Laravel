<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('{url?}', 'PageController@getIndex');

