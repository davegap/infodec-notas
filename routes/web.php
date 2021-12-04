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



Route::get('/formulario',function (){
    return view('contenido.formulario');
});

Route::get('/','NotasController@index')->name('inicio');
Route::post('/registrar','NotasController@store')->name('registrar');
Route::get('/editar/{id}','NotasController@edit')->name('editar');
Route::put('/editar/{id}','NotasController@update')->name('actualizar');
Route::delete('/eliminar/{id}','NotasController@destroy')->name('eliminar');