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

Route::get('/', function () {
    return view('welcome');
});

//pengaduan
Route::get('pengaduan', 'PengaduanController@index');
Route::get('pengaduan/create', 'PengaduanController@create');
Route::post('pengaduan/store', 'PengaduanController@store');

//tanggapan
Route::get('tanggapan', 'TanggapanController@index')->name('tanggapan.index');
Route::get('tanggapan/create', 'TanggapanController@create')->name('tanggapan.create');
Route::post('tanggapan/store','TanggapanController@store')->name('tanggapan.store');
Route::get('tanggapan/edit', 'TanggapanController@edit')->name('tanggapan.edit');
Route::get('tanggapan/update', 'TanggapanController@update')->name('tanggapan.update');
Route::delete('tanggapan/delete/{id}', 'TanggapanController@destroy')->name('tanggapan.destroy');