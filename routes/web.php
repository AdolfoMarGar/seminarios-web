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

Route::view('/', 'web.index')->name('welcome');
Route::view('/history', 'web.nuestrahistoria')->name('history');


Route::resource('admin/seminar', 'SeminarController');
Route::get('admin/seminar/delete/{seminar}', 'SeminarController@destroy')->name('seminar.myDestroy');
// Añadimos una ruta NO ESTÁNDAR para borrar productos mediante GET

Route::resource('admin/documents', 'DocumentsController');
Route::get('admin/documents/delete/{documents}', 'DocumentsController@destroy')->name('documents.myDestroy');

Route::resource('admin/speaker', 'SpeakerController');
Route::get('admin/speaker/delete/{speaker}', 'SpeakerController@destroy')->name('speaker.myDestroy');

Route::resource('admin/presentation', 'PresentationController');
Route::get('admin/presentation/delete/{presentation}', 'PresentationController@destroy')->name('presentation.myDestroy');

Route::resource('admin/request', 'MyrequestController');
Route::get('admin/request/delete/{request}', 'MyrequestController@destroy')->name('request.myDestroy');
Route::get('admin/request/acept/{request}', 'MyrequestController@acept')->name('request.acept');

Route::resource('admin/user', 'UserController');
Route::get('admin/user/delete/{user}', 'UserController@destroy')->name('user.myDestroy');

Route::get('seminars', 'SeminarController@webSeminar')->name('web.seminar');

Route::get('presentations', 'PresentationController@webPresentation')->name('web.presentation');

Route::get('multimedia', 'DocumentsController@webMultimedia')->name('web.multimedia');