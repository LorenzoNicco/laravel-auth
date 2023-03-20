@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <h1 class="text-center">Lista progetti</h1>

        <div class="card">
            <div class="col-md-8">
                <h1>{{ $project->title }}</h1>
    
                <h6>{{ $project->slug }}</h6>
    
                <p>{{ $project->description }}</p>
            </div>
        </div>
    </div>
</div>
@endsection