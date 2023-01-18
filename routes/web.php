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

Route::view('/', 'welcome')->name('welcome');
Route::resource('seminar', 'SeminarController');
// Añadimos una ruta NO ESTÁNDAR para borrar productos mediante GET
Route::get('seminar/delete/{seminar}', 'SeminarController@destroy')->name('seminar.myDestroy');

Route::resource('documents', 'DocumentsController');
Route::get('documents/delete/{documents}', 'DocumentsController@destroy')->name('documents.myDestroy');

Route::resource('speaker', 'SpeakerController');
Route::get('speaker/delete/{speaker}', 'SpeakerController@destroy')->name('speaker.myDestroy');

Route::resource('presentation', 'PresentationController');
Route::get('presentation/delete/{presentation}', 'PresentationController@destroy')->name('presentation.myDestroy');

Route::resource('request', 'MyrequestController');
Route::get('request/delete/{request}', 'MyrequestController@destroy')->name('request.myDestroy');

Route::resource('user', 'UserController');
Route::get('user/delete/{user}', 'UserController@destroy')->name('user.myDestroy');

Route::get('file', 'DocumentsController@file')->name('document.file');
Route::post('fileUpload', 'DocumentsController@fileUpload')->name('document.fileUpload');

