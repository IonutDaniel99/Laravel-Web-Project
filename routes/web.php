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




Route::get('/', 'DashBoardController@index')->name('index');
Route::get('/CheckDeviceStatus', 'DeviceCheckController@CheckDeviceStatus')->name('CheckDeviceStatus');
Route::get('/ServerControlPanel/ShutDown', 'ServerControlPanel@ShutDown')->name('ShutDown');
Route::get('/Debug', 'Debug@index')->name('Debug');


Auth::routes();

Route::get('/login', 'HomeController@index')->name('login');
Route::get('/logout', 'Auth\LoginController@logout');
