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

Route::view('/welcome', 'welcome');
Route::resource('seminario', 'SeminarioController');
// Añadimos una ruta NO ESTÁNDAR para borrar productos mediante GET
Route::get('seminario/delete/{seminario}', 'SeminarioController@destroy')->name('seminario.myDestroy');