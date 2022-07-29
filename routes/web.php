<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
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
    return view('indeks');
});

Route::get('/table2','App\Http\Controllers\BukuController@index')->name('table2');
Route::get('/create','App\Http\Controllers\BukuController@create')->name('create');
Route::post('/simpan','App\Http\Controllers\BukuController@store')->name('simpan');
Route::get('/edit/{id}','App\Http\Controllers\BukuController@edit')->name('edit');
Route::post('/update{id}','App\Http\Controllers\BukuController@update')->name('update');
Route::get('/delete/{id}','App\Http\Controllers\BukuController@destroy')->name('delete');

Route::get('page2', function () {
    return view('page2');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::group(['middleware' => ['auth','ceklevel:admin']], function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    });
});


Route::get('/table','App\Http\Controllers\TableController@index')->name('table');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
