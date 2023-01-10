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
Route::resource('seminar', 'SeminarController');
// Añadimos una ruta NO ESTÁNDAR para borrar productos mediante GET
Route::get('seminar/delete/{seminar}', 'SeminarController@destroy')->name('seminar.myDestroy');

Route::resource('documents', 'DocumentsController');
Route::get('documents/delete/{documents}', 'DocumentsController@destroy')->name('documents.myDestroy');