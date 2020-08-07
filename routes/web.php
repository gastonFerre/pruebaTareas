<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix'=> 'tareas', 'middleware' => ['auth']], function(){
    Route::get('/','TareasController@index')->name('tareas.index');
    Route::get('/create','TareasController@create')->name('tareas.create');
    Route::post('/','TareasController@store')->name('tareas.store');
    Route::get('/{id}','TareasController@show')->name('tareas.show');
    Route::delete('/{id}','TareasController@destroy')->name('tareas.destroy');
    Route::get('/change/{id}','TareasController@change')->name('tareas.change');
});