<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/form', function () {
    return view('formhilang');
});

Route::get('/about', function () {
    return view('about');
});

//Route::get('/artikel', 'App\Http\Controllers\ArticleController@index');
Route::get('/artikel/create', 'App\Http\Controllers\ArticleController@create');
Route::get('/artikel/{slug}', 'App\Http\Controllers\ArticleController@show');
Route::post('/artikel', 'App\Http\Controllers\ArticleController@store');
Route::get ('/artikel/{id}', 'App\Http\Controllers\ArticleController@edit');
// Route::get('/data', 'App\Http\Controllers\Controller@index');
//Route::get('/panti', 'App\Http\Controllers\Controller@panti');

Route::get('/login', function () {
    return view('login');
});

Route::get('/template', function () {
    return view('layouts.template');
});

Route::get('/data', function () {
    return view('data');
});

Route::get('/panti', function () {
    return view('panti');
});

Route::get('/artikel', function () {
    return view('artikel.artikel');
});
