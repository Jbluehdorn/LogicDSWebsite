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

Route::get('/', 'HomeController@home');
Route::get('/home', 'HomeController@home');
Route::get('/games', 'HomeController@games');
Route::get('/staff', 'HomeController@staff');
Route::get('/contact', 'HomeController@contact');

Route::get('/admin', 'AdminController@home');
Route::get('/admin/new', 'AdminController@newUser');
Route::get('/admin/logout', 'AdminController@logout');
Route::post('/admin/post_user', 'AdminController@store');

Route::get('/test', function() {
    return view('test');
});

Auth::routes();
