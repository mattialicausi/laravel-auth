@extends('layouts.app')

@section('content')

<div class="container" id="admin-show">
    <h1 class="text-my-white fw-bold text-center my-5">{{$project->title}}</h1>

    <div class="my-container">

        <div class="row">
            <div class="col-6">
                <img class="img-fluid" src="{{asset('storage/' .$project->thumb1)}}" alt="image">
            </div>
            <div class="col-6 d-flex align-items-center">
                <p class="text-my-white">{{$project->description}}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-6 d-flex flex-column align-items-center justify-content-center">
                <div class="text-my-white fs-1 mb-3">Realized in: <span class="text-my-green fw-bold">{{$project->technology_used}}</span></div>
                <a class="my-btn rounded-pill fw-bold text-my-dark text-decoration-none" href="{{$project->url}}">Explore <span><i class="fa-brands fa-github"></i></span></a>
            </div>
            <div class="col-6">
                <img class="img-fluid" src="{{asset('storage/' .$project->thumb2)}}" alt="image">
            </div>
        </div>

    </div>

</div>

@endsection
