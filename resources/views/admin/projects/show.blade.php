@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <h1 class="text-center text-light my-5">Dettagli progetto</h1>

        <div class="card">
            <div class="col-md-8">
                <h1>{{ $project->title }}</h1>
    
                <h6>{{ $project->slug }}</h6>

                @if ($project->img)
                    <img src="{{ asset('storage/'.$project->img) }}" class="card-img-top" alt="immagine" style="height: 200px; width: 300px">
                @endif
    
                <p>{{ $project->description }}</p>
            </div>
        </div>
    </div>
</div>
@endsection