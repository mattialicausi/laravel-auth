@extends('layouts.app')

@section('content')
    <div class="container" id="index-admin">
        <h1 class="text-my-white my-4 fw-bold">Technologies</h1>
        <a class="my-btn rounded-pill text-my-dark" href="{{route('admin.technologies.create')}}">Create new technology</a>
        @if(session()->has('message'))
            <div class="alert alert-success mb-3 mt-3">
                {{ session()->get('message') }}
            </div>
        @endif
        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Projects</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($technologies as $technology)
                    <tr>
                        <th scope="row">{{$technology->id}}</th>
                        <td><a class="my-title-link" href="{{route('admin.technologies.show', $technology->slug)}}" title="View Projects">{{$technology->name}}</a></td>
                        <td class="text-my-white">{{count($technology->projects)}}</td>
                        <td><a class="link-secondary" href="{{route('admin.technologies.edit', $technology->slug)}}" title="Edit Project"><i class="fa-solid fa-pen"></i></a></td>
                        <td>
                            <form action="{{route('admin.technologies.destroy', $technology->slug)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-button btn btn-danger ms-3" data-item-title="{{$technology->name}}"><i class="fa-solid fa-trash-can"></i></button>
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
