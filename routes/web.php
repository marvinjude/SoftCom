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


Route::get('/', 'HomeController@index');

Route::get('/softwares','HomeController@softwares');

Route::get('/software/{id}', 'HomeController@software')->name('product');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/upload', "UploadController@index")->name('upload');

Route::get('dashboard', "DashboardController@index")->name('dashboard');

Route::post('software/star', "SoftwareController@star")->name('star') ;

Route::post('comment/create', "CommentController@create")->name('create_comment');


