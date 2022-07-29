<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DataBukuController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TodoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('buku', [DataBukuController::class, 'index']);
Route::post('buku/store', [DataBukuController::class, 'store']);
Route::get('buku/show/{id}', [DataBukuController::class, 'show']);
Route::post('buku/update/{id}', [DataBukuController::class, 'update']);
Route::get('buku/destroy/{id}', [DataBukuController::class, 'destroy']);

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth',
    'namespace' => 'App\Http\Controllers'

], function ($router) {

    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('register', 'AuthController@register');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::get('profile', 'AuthController@profile');
    Route::post('me', 'AuthController@me');

});

Route::group([

    'middleware' => 'api',
    'namespace' => 'App\Http\Controllers'

], function ($router) {

    Route::resource('todos', 'App\Http\Controllers\TodoController');
   

});


