<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
// -------------------------------------------------------------------------------------------------------------------------------------------------
Route::resource('portafolio', 'App\Http\Controllers\ProjectController')->names('projects')->parameters(['portafolio' => 'project']);
// # listar todos los datos
// Route::get('/portafolio', 'App\Http\Controllers\ProjectController@index')->name('projects.index');
// // mostrar vista para insertar datos
// Route::get('/portafolio/crear', 'App\Http\Controllers\ProjectController@create')->name('projects.create');
// # Ruta para editar proyecto
// Route::get('/portafolio/{project}/edit', 'App\Http\Controllers\ProjectController@edit')->name('projects.edit');
// # Ruta para guardar los cambios
// Route::patch('/portafolio/{project}', 'App\Http\Controllers\ProjectController@update')->name('projects.update');
// # mostrar el detalle de cada dato
// Route::get('/portafolio/{project}', 'App\Http\Controllers\ProjectController@show')->name('projects.show');
// # metodo para recibir datos del formulario
// Route::post('/portafolio', 'App\Http\Controllers\ProjectController@store')->name('projects.store');
// # Ruta para eliminar un registro
// Route::delete('/portafolio/{project}', 'App\Http\Controllers\ProjectController@destroy')->name('projects.destroy');
// ----------------------------------------------------------------------------------------------------------------------------------------------------
Route::resource('contact', 'App\Http\Controllers\ContactController')->names('contacts')->parameters(['contact' => 'id']);
// Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name('contacts.index');
// # Ruta para llamar a al vista donde se encuentra el formulario
// Route::get('contact/registrar', 'App\Http\Controllers\ContactController@create')->name('contacts.create');
// // Ruta para hacer listar el detalle de los datos
// Route::get('/contact/{id}', 'App\Http\Controllers\ContactController@show')->name('contacts.show');
// # Ruta para guardar los datos con el metodo store
// Route::post('/contact', 'App\Http\Controllers\ContactController@store')->name('contacts.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
