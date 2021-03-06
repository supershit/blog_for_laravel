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
Route::group(array('middleware'=>'login'),function () {
		Route::get('/categorylist','CategoryController@categorylist');

		Route::get('/categoryadd','CategoryController@categoryadd');

		Route::post('/categoryadd','CategoryController@categoryadd');

		Route::any('/categoryedit/{id}','CategoryController@categoryedit');

		Route::any('/postadd','PostController@postadd');

		Route::get('/postlist','PostController@postlist');

		Route::any('/postedit/{id}','PostController@postedit');

		Route::get('/', function () {
    		return redirect('/postlist');
		});
});



Route::get('/layout','CategoryController@layout');



Route::any('/login','AdminController@login');

Route::get('/logout','AdminController@logout');

Route::get('/{cat}.html','ShowController@index');

Route::get('homelayout','ShowController@homelayout');