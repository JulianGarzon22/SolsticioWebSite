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

Route::get('/', function () {
    return view('web.inicio');
});

Route::get('/inicio', function () {
    return view('web.inicio');
});

Route::get('/servicios', function () {
    return view('web.servicios');
});

Auth::routes();

Route::get('/inicio.json', 'Web\PageController@inicio');
Route::get('/noticias', 'Web\PageController@noticias');