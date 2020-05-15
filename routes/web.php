<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('notes');
});

Route::get('notas/crear', function () {
    return view('add-note');
});

Route::get('notas/{id}', function ($id) {
   return "Aquí estará el detalle de la nota ".$id;
});

Route::get('notas/{id}/editar', function ($id) {
   return "Aquí estará el formulario para editar la nota ".$id;
});
