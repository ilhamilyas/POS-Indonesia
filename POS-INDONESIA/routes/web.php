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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index');








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::resource('users', 'UserController');

Auth::routes();

Route::get('/home', 'HomeController@index');



Auth::routes();

Route::get('/home', 'HomeController@index');



Route::resource('barangs', 'BarangController');

Route::resource('pengirimen', 'PengirimanController');

Route::resource('jenisbarangs', 'JenisbarangController');

Route::resource('kantorcabangs', 'KantorcabangController');

Route::resource('pakets', 'PaketController');

Route::resource('pelanggans', 'PelangganController');