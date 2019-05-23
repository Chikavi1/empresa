<?php

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

Auth::routes();

Route::get('/home', 'IncidentesController@index')->name('home')->middleware('auth');
Route::get('/reportes','ReportesController@index')->name('reporte');
Route::post('/caca','ReportesController@caca')->name('enviar_correo');
Route::get('/problemas','IncidentesController@problemas')->name('problemas')->middleware('auth');
Route::get('/rfc',function(){
	return view('rfc');
})->name('rfc')->middleware('auth');