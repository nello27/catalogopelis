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

Route::get('/','MoviesController@home');
Route::get('catalogo','MoviesController@catalog');
Route::get('producto-catalogo','MoviesController@productocatalog');


Route::resource('usuario','UsuarioController');

Route::get('login', function () {
    return 'login usuario';
});

Route::get('logouth', function () {
    return 'logouth usuario';
});

Route::get('catalog/create', function () {
    return 'Añadir pelicula';
});

Route::get('catalog/edit/{id}', function () {
    return ' Modificar	película{id}';
});








