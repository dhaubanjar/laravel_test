<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/about', 'PageController@index');
Route::get('/contact','PageController@create');
Route::get('/post/create','PostController@create')->name('post.create');

Route::post('/post','PostController@store')->name('post.store');
Route::get('/post','PostController@index')->name('post.index');


Route::get('/', 'PostController@welcomeShow')->name('welcome.show');
