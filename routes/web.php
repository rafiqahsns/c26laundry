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

Route::get('/','Controller@index')->name('index');
Route::get('/layanan','Controller@layanan')->name('layanan');
Route::get('/membership','Controller@membership')->name('membership');
Route::get('/tentangkami','Controller@tentangkami')->name('tentangkami');
Route::get('/stafflogin','Controller@login')->name('login');
Route::get('/orderbaru','Controller@orderbaru')->name('orderbaru');
Route::get('/tambahlaundry','Controller@tambahlaundry')->name('tambahlaundry');
Route::get('/pembayaranbiasa','Controller@pembayaranbiasa')->name('pembayaranbiasa');
Route::get('/ceksaldo','Controller@ceksaldo')->name('ceksaldo');
Route::get('/memberbaru','Controller@memberbaru')->name('memberbaru');
Route::get('/tambahdeposit','Controller@tambahdeposit')->name('tambahdeposit');
Route::get('/ambillaundry','Controller@ambillaundry')->name('ambillaundry');