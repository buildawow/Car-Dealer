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

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('car-detail/{car}', 'CarDetailController@show')->name('car-detail');

Route::get('list-by-brand/{brand}', 'CarListBrandController@show')->name('list-by-brand');

Route::get('list-by-model/{model}', 'CarListModelController@show')->name('list-by-model');

Route::any('car-admin-search', 'CarController@adminSearch')->name('car-admin-search');

Route::any('car-search', 'CarController@search')->name('car-search');

Route::any('advance-search', 'CarController@advanceSearch')->name('advance-search');

Route::group(['prefix' => 'admin', 'middleware' => ['auth.basic']], function () {

    Route::view('/', 'dashboard.index')->name('dashboard');

    Route::resource('car', 'CarController');
    
});

Route::resource('contact', 'ContactController');

