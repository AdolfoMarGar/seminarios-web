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

// Añadimos una ruta NO ESTÁNDAR para borrar productos mediante GET

/* RUTAS DEL PANEL DE ADMINISTRADOR */
Route::resource('admin/seminar', 'SeminarController');
Route::get('admin/seminar/delete/{seminar}', 'SeminarController@destroy')->name('seminar.myDestroy');

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
/*FIN RUTAS PANEL ADMINISTRADOR*/

/* RUTAS PAGINA WEB  */
Route::get('/', 'FrontendController@indexWeb')->name('web.index');
Route::get('/history', 'FrontendController@historyWeb')->name('web.history');
Route::get('/nextSeminar', 'FrontendController@nextSeminar')->name('web.nextSeminar');
Route::get('/aboutUs', 'FrontendController@aboutUs')->name('web.aboutUs');

Route::get('seminars', 'FrontendController@allSeminar')->name('web.allSeminar');
Route::get('seminar/{id}', 'FrontendController@idSeminar')->name('web.idSeminar');

Route::get('presentations', 'FrontendController@allPresentation')->name('web.allPresentation');
Route::get('presentation/{id}', 'FrontendController@idPresentation')->name('web.idPresentation');

Route::get('multimedia', 'DocumentsController@webMultimedia')->name('web.multimedia');

