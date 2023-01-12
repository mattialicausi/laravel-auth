@extends('layouts.app')

@section('content')

<h1 class="text-center text-my-green fs-1 fw-bold mt-5">My projects in {{$technology->name}}</h1>
    @if (count($technology->projects) > 0)

        <div class="container">
            <ul>
                @foreach ($technology->projects as $project)
                    <li><a class="link-technologies" href="{{route('admin.projects.show', $project->slug)}}">- {{$project->title}}</a></li>
                @endforeach
            </ul>

        </div>

    @else
    <div class="container">
        <div class="text-my-white fs-1 my-5">No projects in this technology</div>
    </div>
     <div class="container-emogi-login emoji-index">
        <img src="{{Vite::asset('resources/img/memoji-sconvolto.webp')}}" alt="emoji img">
    </div>
    @endif


@endsection
