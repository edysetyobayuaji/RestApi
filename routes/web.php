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
Route::get('/dashboard', function () {
    return view('dashboard');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/datacenter', 'DatacenterController@index')->name('datacenter');
Route::get('/dataups', 'DataUPSController@index')->name('dataups');
Route::get('/genset', 'GensetController@index')->name('genset');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

