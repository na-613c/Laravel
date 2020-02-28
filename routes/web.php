<?php

Auth::routes();

Route::post('comment/{id}', 'CommentController@postUpd');

Route::get('delete/{id}', 'CommentController@postDelete');

Route::post('/search', 'PageController@postSearch');

Route::get('/search', 'PageController@getSearch');

Route::post('/ajax/datalist', 'Ajax\DatalistController@postIndex');

Route::post('/ajax/email_list', 'Ajax\EmailController@postIndex');

Route::get('/', 'PageController@getMain');

Route::get('/add', 'CommentController@getAdd');

Route::post('/add', 'CommentController@postAdd');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('{url}', 'PageController@getIndex');

