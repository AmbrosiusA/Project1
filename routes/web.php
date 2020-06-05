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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/', 'home')->name('home');
//Route::view('/usuarios', 'index')->name('users.index');

Route::resource('users', 'UserController');

/*Ruta para confirmar si realmente quiere eliminar un registro de la BD */

Route::get('/users/{id}/confirm','UserController@confirm' )->name('users.confirm');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
