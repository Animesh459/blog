<?php 



//Route::get('/' , 'HomeController@index');
Route::get('/' , 'PostsController@index');
Route::get('/posts' , 'PostsController@index');
Route::get('/posts/create' , 'PostsController@create');
Route::post('/posts' , 'PostsController@store');
Route::get('/posts/{post}' , 'PostsController@show');
Route::post('/posts/{post}' , 'CommentsController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
