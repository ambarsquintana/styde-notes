<?php

use App\Note;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    $notes = Note::all();

    return view('notes', ['notes' => $notes]);
})->name('notes');

Route::get('notas/crear', function () {
    return view('add-note');
})->name('notes.create');

Route::post('notas', function (Request $request) {
    Note::create([
        'title' => $request->input('title'),
        'content' => $request->input('content'),
    ]);

    return redirect()->route('notes.create');
})->name('notes.store');

Route::get('notas/{id}', function ($id) {
   return "Aquí estará el detalle de la nota ".$id;
})->name('note.show');

Route::get('notas/{id}/editar', function ($id) {
    $note = Note::find($id);

    return view('edit-note', ['note' => $note]);
})->name('notes.edit');
