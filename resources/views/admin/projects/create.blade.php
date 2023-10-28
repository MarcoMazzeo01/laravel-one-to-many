@extends('layouts.app')

@section('content')
    <div class="container pb-2">
        <h1>Crea Nuovo Progetto</h1>

        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <label for="" class="form-label">Nome Progetto</label>
            <input type="text" class="form-control" id="title" name="title" />

            <label for="number" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description"></textarea>

            <button type="submit" class="btn btn-primary mt-2">Salva</button>
        </form>
    </div>
@endsection
