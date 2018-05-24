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


Route::get('/', 'home\indexcontroller@index');
Route::get('adminss', 'home\indexcontroller@admin');

//Auth::routes();
//
//Route::get('/', 'HomeController@index')->name('homes');
//Route::get('/revenue/branch', 'HomeController@revenue')->name('revenue');
//Route::get('/revenue/date', 'HomeController@revenuedate')->name('revenue');
//Route::get('/revenue/msisdn', 'HomeController@msisdn')->name('revenue');
//Route::get('/revenue/msisdn/{id}', 'HomeController@msisdndetail')->name('revenue');
//Route::get('/revenue/data', 'HomeController@data')->name('revenue');
//Route::get('/revenue/data/cari', 'HomeController@datacari')->name('revenue');
//Route::get('/revenue/dailyprodline', 'HomeController@dailyprodline')->name('revenue');
