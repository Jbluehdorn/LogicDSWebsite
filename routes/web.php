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

Route::get('/dashboard', 'DashboardController@home');
Route::get('/dashboard/new', 'DashboardController@newUser');
Route::get('/dashboard/logout', 'DashboardController@logout');
Route::get('/dashboard/account/{id}', 'DashboardController@account');
Route::post('/dashboard/post_user', 'DashboardController@store');
Route::get('/dashboard/unauthorized', function() {
    return view('admin/unauthorized_access');
});

Auth::routes();
