<?php

use Illuminate\Support\Facades\Route;


Route::resource('empresa','App\Http\Controllers\EmpresaController');

Route::view('tenant-404', 'erros.404-tenant')->name('tenant.404');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cadastre-se', 'App\Http\Controllers\EmpresaController@create')->name('cadastro');

Route::post('/cadastre-se', 'App\Http\Controllers\EmpresaController@store')->name('cadastrar');
