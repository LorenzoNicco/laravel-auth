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
                                <h3>{{ $project->slug }}</h3>
                            </li>
                            <li class="list-group-item">
                                <p class="card-text">{{ $project->description }}</p>
                            </li>
                            <li class="list-group-item">
                                {{ $project->id }}
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>
            
        </div>
    </div>
</div>
@endsection