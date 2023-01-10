@extends('layouts.app')

@section('content')

    <div class="container my-5">
        <div class="row g-2">
            @foreach ($projects as $project)

                <div class="card my-card col-3">
                    <img class="card-img-top" src="{{$project->thumb1}}" alt="project image">
                    <div class="card-body">
                        <h5 class="card-title">{{$project->title}}</h5>
                        <p class="card-text ">{{$project->description}}</p>
                        <div class="my-btn rounded-pill">
                            <a href="{{route('admin.projects.show', $project->slug)}}" title="show">show</a>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>

@endsection
