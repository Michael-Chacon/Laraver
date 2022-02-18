<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::get('/portafolio', 'App\Http\Controllers\PortafolioController@index')->name('portafolio');
Route::get('/contact', 'App\Http\Controllers\ContactController')->name('contacto');
// Route::resource('tal', 'App\Http\Controllers\PortafolioController')->except(['index', 'show']);
// Route::apiResource('tal', 'App\Http\Controllers\PortafolioController');
