<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* GENERADO POR LARAVEL BREEZE

Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



// Añadimos una ruta NO ESTÁNDAR para borrar productos mediante GET

/* RUTAS DEL PANEL DE ADMINISTRADOR */
Route::get('/admin',function(){
    return redirect('/admin/seminar');
});
Route::resource('admin/seminar', 'SeminarController');
Route::get('/seminarCheck', 'AjaxController@seminarCheck')->name('seminar.check');

Route::resource('admin/documents', 'DocumentsController');
Route::get('/documentsCheck', 'AjaxController@documentsCheck')->name('documents.check');

Route::resource('admin/speaker', 'SpeakerController');
Route::resource('admin/presentation', 'PresentationController');
Route::get('/presentationCheck', 'AjaxController@presentationCheck')->name('presentation.check');

Route::resource('admin/request', 'MyrequestController');
Route::get('admin/request/acept/{request}', 'MyrequestController@acept')->name('request.acept');

Route::resource('admin/user', 'UserController');

/*FIN RUTAS PANEL ADMINISTRADOR*/

/* RUTAS PAGINA WEB  */
Route::get('/', 'FrontendController@indexWeb')->name('web.index');
Route::get('/history', 'FrontendController@historyWeb')->name('web.history');
Route::get('/nextSeminar', 'FrontendController@nextSeminar')->name('web.nextSeminar');
Route::get('/aboutUs', 'FrontendController@aboutUs')->name('web.aboutUs');

Route::get('seminars', 'FrontendController@allSeminar')->name('web.allSeminar');
Route::get('seminar/{id}', 'FrontendController@idSeminar')->name('web.idSeminar');
Route::get('/buscadorSeminar', 'AjaxController@buscadorSeminar')->name('web.buscadorSeminar');


Route::get('presentations', 'FrontendController@allPresentation')->name('web.allPresentation');
Route::get('presentation/{id}', 'FrontendController@idPresentation')->name('web.idPresentation');
Route::get('/buscadorPresentation', 'AjaxController@buscadorPresentation')->name('web.buscadorPresentation');

Route::get('myrequest', 'FrontendController@allRequest')->name('web.allrequest');
Route::get('newRequest', 'FrontendController@newRequest')->name('web.newRequest');
Route::get('editRequest/{request}', 'FrontendController@editRequest')->name('web.editRequest');
Route::get('/selectAjax', 'AjaxController@selectAjax')->name('web.selectAjax');

Route::get('multimedia', 'FrontendController@webMultimedia')->name('web.multimedia');

