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



Auth::routes();

// puede ser visto por usuarios no logueados
Route::get('/', function () { return view('welcome'); });
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/inicio', 'PageController@index')->name('site-index');
