<?php

use App\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rule;


Route::get('/', 'NoteController@index')->name('notes');

Route::get('notas/crear','NoteController@create')->name('notes.create');

Route::post('notas','NoteController@store')->name('notes.store');

Route::get('notas/{id}', )->name('note.show');

Route::get('notas/{id}/editar', 'NoteController@edit')->name('notes.edit');
