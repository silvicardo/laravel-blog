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
