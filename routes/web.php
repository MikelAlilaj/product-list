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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::resource('admin/users', 'AdminUsersController');

Route::resource('admin/products', 'AdminProductsController');

Route::post('user/oncash/charge/', 'AdminProductsController@OnCash')->name('oncash.charge');


Route::get('admin/view/orders', 'AdminProductsController@ViewOrder')->name('admin.view.orders');

Route::get('admin/frequented-users', 'AdminProductsController@UsersFrequented')->name('admin.users.frequented');




