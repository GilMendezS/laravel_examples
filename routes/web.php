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

Route::get('/sin-permisos', function(){
    echo "no tienes permisos para ver este contenido " .\Auth::user()->name;
})->name('sin-permisos');
Route::get('/admin', function(){
    echo "Bienvenido ";
})->middleware('verifyName:Gilberto,Fulanito');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
