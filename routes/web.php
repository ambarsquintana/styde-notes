<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $notes = [
        'Mi primera nota',
        'Mi segunda nota',
        'Mi tercera nota',
        'Mi cuarta nota',
    ];

    return view('notes')->with('notes', $notes);
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
