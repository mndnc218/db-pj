<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'DbclassController@index');
Route::get('/add', 'DbclassController@add');
Route::post('/add', 'DbclassController@create');
Route::get('/edit', 'DbclassController@edit');
Route::post('/edit', 'DbclassController@create');
Route::get('/delete', 'DbclassController@delete');
Route::post('/delete', 'DbclassController@remove');