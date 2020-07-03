<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','GeneralController@index')->name('dahboard');
Route::get('/beliProduk/{id}','GeneralController@show')->name('beliProduk');
Route::post('/addProduk','GeneralController@store')->name('addProduk');
Route::get('/reportOrder/{id}','GeneralController@report')->name('reportOrder');


Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
//Product
Route::get('/tambahproduct','ProductController@product')->name('tambahproduct');
Route::post('/productInsert','ProductController@store')->name('productInsert');
Route::get('/productList','ProductController@show')->name('productList');
Route::get('/editproduct/{id}','ProductController@edit')->name('editproduct');
Route::post('/productUpdate','ProductController@update')->name('productUpdate');
Route::get('/deleteproduct/{id}','ProductController@destroy')->name('deleteproduct');

//Admin
Route::get('/adminList','AdminController@show')->name('adminList');
Route::get('/deleteAdmin/{id}','AdminController@destroy')->name('deleteAdmin');
Route::get('/editAdmin/{id}','AdminController@edit')->name('editAdmin');
Route::post('/updateAdmin','AdminController@update')->name('updateAdmin');

//Order
Route::get('/orderList','OrderController@show')->name('orderList');
Route::get('/deleteOrder/{id}','OrderController@destroy')->name('deleteOrder');
Route::get('/editOrder/{id}','OrderController@edit')->name('editOrder');
Route::post('/orderUpdate','OrderController@update')->name('orderUpdate');
