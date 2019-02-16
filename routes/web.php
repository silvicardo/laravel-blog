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

//La rotta principale fa riferimento alla
//funzione inddex in PagesController
Route::get('/', 'PagesController@index');

//About route
Route::get('/about', 'PagesController@about');

//Services route
Route::get('/services', 'PagesController@services');

//grazie a questa riga, eseguendo php artisan route:list
//creerà tutte le routes come da funzioni del controller selezionato
//senza necessità di scriverle esplicitamente
//Route::resource('posts','PostsController');

Route::resource('posts', 'PostsController');
