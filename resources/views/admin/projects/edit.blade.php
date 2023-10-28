@extends('layouts.app')

@section('content')
    <div class="container pb-2">
        <h1>Modifica "{{ $project->title }}"</h1>

        <form action="{{ route('admin.projects.update', $project) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="" class="form-label">Nome Progetto</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}" />

            <label for="number" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description">{{ $project->description }}</textarea>

            <button type="submit" class="btn btn-primary mt-2">Salva</button>
        </form>
    </div>
@endsection
