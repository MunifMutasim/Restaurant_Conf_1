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

Auth::routes();
Route::get('/','FrontThemeController@index');
Route::get('/about','FrontThemeController@about');

// Admin Routes
Route::match(array('GET','POST'),'/admin', 'AdminController@login');
Route::get('/logout','AdminController@logout');

Route::group(['middleware' => 'authenticatedadmin'],function(){
    Route::get('admin/dashboard','AdminController@dashboard');
    Route::get('admin/settings','AdminController@settings');
    Route::get('admin/check-pwd','AdminController@chckPassword');
    Route::post('admin/update-pwd','AdminController@updatePassword');
});


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
