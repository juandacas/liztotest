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

Route::get('/cancelled', 'DetailController@indexc')->name('cancelled');
Route::get('/received', 'DetailController@indexr')->name('received');
Route::get('/detail/{id}', 'DetailController@index')->where('id','[0-9]+');

Route::resource('products','ProductController');
Route::resource('suppliers','SupplierController');
Route::resource('purchases','PurchaseController');
Route::resource('details','DetailController');
