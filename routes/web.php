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


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/softwares','HomeController@softwares')->name('softwares');

Route::get('/software/{id}', 'HomeController@software')->name('product');

Auth::routes();

//Group Routes For Auth Only

Route::get('/upload', "UploadController@index")->name('upload');

Route::get('/dashboard', "DashboardController@index")->name('dashboard');

Route::post('/software/star', "SoftwareController@star")->name('star') ;

Route::post('/comment/create', "CommentController@create")->name('create_comment');

//End Route Group

Route::get('/done', "HomeController@downloaded");

Route::get('/admin', "AdminController@index"); //middleware  is In controller


