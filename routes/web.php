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
Route::any('/shop/product/{id}', 'User\HomeController@product')->name('user.product');
Route::any('/shop/{cat}/{id}', 'User\HomeController@categoryProduct')->name('user.category');
Route::any('/product/addtocart', 'User\HomeController@addtoCart')->name('user.product.cart');


// Route::get('/home', 'HomeController@index')->name('home');

Route::any('/admin', 'Auth\LoginController@showLoginForm')->name('admin.login');
Route::any('/checklogin', 'Auth\LoginController@login')->name('admin.checklogin');
Route::any('logout', 'Auth\LoginController@logout')->name('logout');
Route::any('register', 'Auth\LoginController@register')->name('register');


Route::get('/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');

Route::any('/category', 'Admin\CategoryController@index')->name('admin.category');
Route::any('/category/add/{id}', 'Admin\CategoryController@addEdit')->name('admin.category.add');
Route::any('/category/update/{id}', 'Admin\CategoryController@update')->name('admin.category.update');

Route::any('/subcategory', 'Admin\SubCategoryController@index')->name('admin.sub_category');
Route::any('/subcategory/add/{id}', 'Admin\SubCategoryController@addEdit')->name('admin.sub_category.add');
Route::any('/subcategory/update/{id}', 'Admin\SubCategoryController@update')->name('admin.sub_category.update');

Route::any('/product', 'Admin\ProductController@index')->name('admin.product');
Route::any('/product/add/{id}', 'Admin\ProductController@addEdit')->name('admin.product.add');
Route::any('/product/update/{id}', 'Admin\ProductController@update')->name('admin.product.update');

