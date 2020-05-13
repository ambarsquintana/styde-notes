<?php

use Illuminate\Support\Facades\Route;

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

Route::get('notas', function () {
    return 'Aquí estará el listado para crear notas';
});

Route::get('notas/crear', function () {
    return 'Aquí estará el formulario para crear notas';
});
