@extends('layout')

@section('title', 'Listado de notas')

@section('content')
    <main class="content">
        <div class="cards">
            @forelse($notes as $note)
                <div class="card card-small">
                    <div class="card-body">
                        <h4>{{ $note->title }}</h4>
                        <p>
                            {!! $note->content !!} {{-- TODO: Purificar HTML para evitar ataques XSS --}}
                        </p>

                        <form method="POST" action="{{ url("notas/{$note->id}") }}">
                            @csrf
                            @method('DELETE')

                            <button type="submit">Eliminar</button>
                        </form>
                    </div>

                    <footer class="card-footer">
                        <a href="{{ route('notes.edit', ['id' => $note->id]) }}" class="action-link action-edit">
                            <i class="icon icon-pen"></i>
                        </a>
                        <a class="action-link action-delete">
                            <i class="icon icon-trash"></i>
                        </a>
                    </footer>
                </div>
            @empty
                <p> No hay notas. <a href="#">¿Desea agregar una?</a></p>
            @endforelse
        </div>
    </main>
@endsection
