<?php

Auth::routes();

Route::post('comment/{id}', 'CommentController@postUpd');

Route::get('delete/{id}', 'CommentController@postDelete');

Route::get('/', 'PageController@getMain');

Route::get('/add', 'CommentController@getAdd');

Route::post('/add', 'CommentController@postAdd');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('{url}', 'PageController@getIndex');

