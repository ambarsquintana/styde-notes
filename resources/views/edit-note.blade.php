@extends('layout')

@section('title', 'Editar nota')

@section('content')
    <main class="content">
        <div class="cards">
            <div class="card card-center">
                <div class="card-body">
                    <h1>Editar nota</h1>

                    <form action="">
                        <label for="title" class="field-label">Título: </label>
                    <input type="text" name="title" id="title" class="field-input" value="{{ $note->title }}">

                        <label for="content" class="field-label">Contenido:</label>
                        <textarea name="content" id="content" rows="10" class="field-textarea">{!! $note->content !!}</textarea>

                        <button type="submit" class="btn btn-primary">Editar nota</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection