<?php

use Illuminate\Support\Facades\Route;

Route::get('notas', function () {
    return 'Aquí estará el listado para crear notas';
});

Route::get('notas/crear', function () {
    return 'Aquí estará el formulario para crear notas';
});

Route::get('notas/{id}', function ($id) {
   return "Aquí estará el detalle de la nota ".$id;
});

Route::get('notas/{id}/editar', function ($id) {
   return "Aquí estará el formulario para editar la nota ".$id;
});
