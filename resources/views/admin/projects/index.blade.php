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
                    <th scope="col">Technology</th>
                    <th scope="col">Device</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                    <tr>
                        <th scope="row">{{$project->id}}</th>
                        <td><a class="my-title-link" href="{{route('admin.projects.show', $project->slug)}}" title="View Projects">{{$project->title}}</a></td>
                        <td class="text-my-white">{{Str::limit($project->description,100)}}</td>
                        <td class="text-my-white">{{$project->technology ? $project->technology->name : 'Not specified'}}</td>

                        <td class="text-my-white">{{$project->devices && count($project->devices) > 0 ? count($project->devices) : 0}}</td>

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
    {{-- <div class="container-emogi-login emoji-index">
        <img src="{{Vite::asset('resources/img/memoji-approvo.webp')}}" alt="emoji img">
    </div> --}}
@endsection


