{{-- @extends('layouts.app')

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

@endsection --}}

@extends('layouts.app')

@section('content')
    <div class="container" id="index-admin">
        <h1 class="text-my-white my-4 fw-bold">Projects</h1>
        <a class="my-btn rounded-pill text-my-dark" href="{{route('admin.projects.create')}}">Create new project</a>
        @if(session()->has('message'))
            <div class="alert alert-success mb-3 mt-3">
                {{ session()->get('message') }}
            </div>
        @endif
        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                    <tr>
                        <th scope="row">{{$project->id}}</th>
                        <td><a class="text-my-white fw-bold" href="{{route('admin.projects.show', $project->slug)}}" title="View Projects">{{$project->title}}</a></td>
                        <td class="text-my-white">{{Str::limit($project->description,100)}}</td>
                        <td><a class="link-secondary" href="{{route('admin.projects.edit', $project->slug)}}" title="Edit Project"><i class="fa-solid fa-pen"></i></a></td>
                        <td>
                            <form action="{{route('admin.projects.destroy', $project->slug)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-button btn btn-danger ms-3" data-item-title="{{$project->title}}"><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @include('partials.admin.modal-delete')
    </div>
@endsection


