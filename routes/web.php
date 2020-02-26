<?php

Auth::routes();

Route::post('comment/{id}', 'CommentController@postUpd');

Route::get('delete/{id}', 'CommentController@postDelete');

Route::post('/search', 'PageController@postSearch');
Route::get('/search', 'PageController@getSearch');


Route::get('/', 'PageController@getMain');

Route::get('/add', 'CommentController@getAdd');

Route::post('/add', 'CommentController@postAdd');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('{url}', 'PageController@getIndex');

