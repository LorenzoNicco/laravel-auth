@extends('layouts.admin')

@section('content')
    <h1 class="text-center text-light my-5">Inserisci un nuovo progetto</h1>

    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title-input" class="form-label text-light">Titolo</label>
            <input type="text" class="form-control" id="title-input" name="title" placeholder="Inserisci un titolo">
        </div>
        
        <div class="mb-3">
            <label for="description-input" class="form-label text-light">Descrizione</label>
            <textarea class="form-control" id="description-input" name="description" rows="3"></textarea>
        </div>

        <input type="submit" class="btn btn-primary">
    </form>
@endsection