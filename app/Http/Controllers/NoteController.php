<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class NoteController extends Controller
{
    public function index() 
    {
        $notes = Note::all();

        return view('notes', ['notes' => $notes]);
    }

    public function create() {
        return view('add-note');
    }

    public function store(Note $note, Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'min:3', 'max:30', Rule::unique('notes')],
            'content' => ['required'],
        ]);

        $note->create($data);

        return redirect()->route('notes.create');
    }

    public function show($id) 
    {
        return "Aquí estará el detalle de la nota ".$id;
    }

    public function edit($id) 
    {
        $note = Note::find($id);
    
        return view('edit-note', ['note' => $note]);
    }

    public function update(Note $note, Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'min:3', 'max:30', Rule::unique('notes')->ignore($note)],
            'content' => ['required'],
        ]);

        $note->update($data);

        return redirect('/');
    }
}
