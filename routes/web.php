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

Route::get('/message', 'MyFirstController@message');


Route::get('/message/{name}', 'MyFirstController@customMessage');

Route::get('/view', 'MyFirstController@view');

Route::get('profile/{id}', 'MyFirstController@profile');

Route::resource('users', 'UserController')->names([
    'create' => 'user.createUser',
    'index' => 'user.getAllUser',
    'store' => 'user.addUser',
    'show' => 'user.showUser',
    'edit' => 'user.editUser',
    'update' => 'user.updateUser',
    'destroy' => 'user.removeUser'
]);

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
