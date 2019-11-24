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

Route::any('/', 'User\HomeController@index')->name('user.home');


// Route::get('/home', 'HomeController@index')->name('home');

Route::any('/admin', 'Auth\LoginController@showLoginForm')->name('admin.login');
Route::any('/checklogin', 'Auth\LoginController@login')->name('admin.checklogin');
Route::any('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');
