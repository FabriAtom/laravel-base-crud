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

Route::get('/', function () {
    return view('home');
});



// // READ RESOURCE
// // recupero elenco fumetti
// Route::get('/fumetti', 'FumettoController@index')->name('fumetti.index ');

// // recupero un singolo fumetto in base alla chiave primaria, ci permette di recuperare in base al nostro id 
// Route::get('/fumetti/{id}', 'FumettoController@show')->name('fumetti.show');


// // visualizzo la pagina con il form di creazione
// Route::get('/fumetti/create', 'FumettoController@create')->name('fumetti.create');


// // salva la nuova risorsa sul database
// route::post('/fumetti', 'FumettoController@store')->name('fumetti.store');

// // elimina una risorsa in base alla chiave primaria
// route::delete('/fumetti/{id}','FumettoController@destroy')->name('fumetti.destroy');


// risorse parziali
route::resource('fumetti', 'PageController')->except([
    'edit', 'update', 'destroy'
]);