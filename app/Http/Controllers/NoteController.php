<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class NoteController extends Controller
{
    public function index () 
    {
        $notes = Note::all();

        return view('notes', ['notes' => $notes]);
    }

    public function create () {
        return view('add-note');
    }

    public function store (Request $request)
    {
        $request->validate([
            'title' => ['required', 'min:3', 'max:30', Rule::unique('notes')],
            'content' => ['required'],
        ]);

        Note::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        return redirect()->route('notes.create');
    }

    public function show ($id) 
    {
        return "Aquí estará el detalle de la nota ".$id;
    }

    public function edit ($id) 
    {
        $note = Note::find($id);
    
        return view('edit-note', ['note' => $note]);
    }
}
