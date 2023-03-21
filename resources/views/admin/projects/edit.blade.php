@extends('layouts.admin')

@section('content')
    <h1 class="text-center text-light my-5">Modifica Progetto</h1>

    @include('partials.error')

    <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title-input" class="form-label text-light">Titolo<span class="text-danger">*</span></label>
            <input required type="text" class="form-control" id="title-input" value="{{ old('title', $project->title) }}" name="title" placeholder="Inserisci un titolo">
        </div>
        
        <div class="mb-3">
            <label for="description-input" class="form-label text-light">Descrizione<span class="text-danger">*</span></label>
            <textarea required class="form-control" id="description-input" name="description" rows="3">{{ old('description', $project->description) }}</textarea>
        </div>

        <div>
            <p class="text-light">
                I campi contrassegnati con <span class="text-danger">*</span> sono obbligatori
            </p>
        </div>

        <input type="submit" class="btn btn-primary">
    </form>
@endsection