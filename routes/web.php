<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'NoteController@index')->name('notes');

Route::get('notas/crear','NoteController@create')->name('notes.create');

Route::post('notas','NoteController@store')->name('notes.store');

Route::get('notas/{id}', )->name('note.show');

Route::get('notas/{id}/editar', 'NoteController@edit')->name('notes.edit');

Route::put('notas/{note}', 'NoteController@update')->name('notes.update');