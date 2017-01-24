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
use App\Note;

Route::get('/', function () {
    return view('welcome');
});

Route::get('notas','NotasController@index');
Route::post('notas','NotasController@guardar');
Route::get('notas/crear','NotasController@crear');
Route::get('notas/ver/{id}/{slug}','NotasController@ver')->where('note','[0-9]+');
