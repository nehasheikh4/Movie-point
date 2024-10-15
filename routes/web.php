<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/template','pages.template');
Route::view('/blog-details','pages.blog-details');
Route::view('/blog','pages.blog');
Route::view('/celebrities','pages.celebrities');
Route::view('/index-2','pages.index-2');
Route::view('/index','pages.index');
Route::view('/movie-details','pages.movie-details');
Route::view('/movies','pages.movies');
Route::view('/top-movies','pages.top-movies');

