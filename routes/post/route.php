<?php

// 文章列表 
Route::get('/', 'PostController@posts');


// 新增文章 
Route::get('/create','PostController@create');
Route::post('/','PostController@store');

// 文章详情 
Route::get('/{id}', 'PostController@show')->where(['id'=>'\d+']);;

// 编辑文章
Route::get('/{post}/edit','PostController@edit');
Route::put('/{post}','PostController@update');

// 删除文章
Route::delete('/delete','PostController@delete');


