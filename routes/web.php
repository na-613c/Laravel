<?php

Auth::routes();

Route::get('/', 'PageController@getMain');

Route::get('/add', 'CommentController@getAdd');

Route::post('/add', 'CommentController@postAdd');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('{url}', 'PageController@getIndex');



