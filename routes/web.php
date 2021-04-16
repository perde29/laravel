<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
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

Route::get('usuario', 'App\Http\Controllers\HomeController@index')->name('usuario');

Route::get('createviews', 'App\Http\Controllers\HomeController@createviews')->name('createviews');
Route::post('createviews', 'App\Http\Controllers\HomeController@createviews')->name('createviews');

Route::get('createviews/{id}', 'App\Http\Controllers\HomeController@editviews')->name('editviews');
Route::put('createviews/{id}', 'App\Http\Controllers\HomeController@updateviews')->name('updateviews');


Route::delete('deleteusuario/{id}', 'App\Http\Controllers\HomeController@deleteviews')->name('deleteusuario');