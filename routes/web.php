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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/layout','AdminController@layout');

Route::get('/categorylist','AdminController@categorylist');

Route::get('/categoryadd','AdminController@categoryadd');

Route::post('/categoryadd','AdminController@categoryadd');

Route::any('/categoryedit/{id}','AdminController@categoryedit');

Route::any('/postadd','PostController@postadd');

Route::get('/postlist','PostController@postlist');

Route::any('/postedit/{id}','PostController@postedit');