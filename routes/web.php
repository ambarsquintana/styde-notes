<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    $notes = DB::table('notes')->get();
    return view('notes', ['notes' => $notes]);
})->name('notes');

Route::get('notas/crear', function () {
    return view('add-note');
})->name('notes.create');

Route::get('notas/{id}', function ($id) {
   return "Aquí estará el detalle de la nota ".$id;
})->name('note.show');

Route::get('notas/{id}/editar', function ($id) {
    $note = DB::table('notes')
        ->where('id', $id)
        ->first();
    
    return view('edit-note', ['note' => $note]);
})->name('notes.edit');
