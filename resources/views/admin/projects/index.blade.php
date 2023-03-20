@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <h1 class="text-center">Lista progetti</h1>

        <div class="col-md-8">
            <div class="row g-3 justify-content-between">
                @foreach ($projects as $project)
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $project->title }}</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <h6>{{ $project->slug }}</h6>
                            </li>
                            <li class="list-group-item">
                                <p class="card-text">{{ $project->description }}</p>
                            </li>
                            <li class="list-group-item">
                                {{ $project->id }}
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-primary mb-2">Dettagli</a>
                                
                                <a href="#" class="btn btn-warning mb-2">Modifica</a>
                                
                                <a href="#" class="btn btn-danger mb-2">Elimina</a>
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>
            
        </div>
    </div>
</div>
@endsection