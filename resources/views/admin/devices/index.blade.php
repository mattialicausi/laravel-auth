@extends('layouts.app')

@section('content')
    <div class="container" id="index-admin">
        <h1 class="text-my-white my-4 fw-bold">Devices</h1>

        <form action="{{route('admin.devices.store')}}" method="post" class="d-flex align-items-center">
            @csrf
            <div class="input-group mb-3">
                <input type="text" name="name" class="form-control" placeholder="Add device name here " aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary text-my-white" type="submit" id="button-addon2">Add</button>
            </div>
        </form>


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
                    <th scope="col"> N. projects</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($devices as $device)
                    <tr>
                        <th scope="row">{{$device->id}}</th>

                        <td>
                            <form id="tag-{{$device->id}}" action="{{route('admin.devices.update', $device->slug)}}" method="post">
                                @csrf
                                @method('PATCH')
                                <input class="border-0 bg-transparent link-devices" type="text" name="name" value="{{$device->name}}">
                            </form>
                        </td>

                        <td class="text-my-white">
                            {{$device->projects && count($device->projects) > 0 ? count($device->projects) : 0}}
                        </td>


                        <td>
                            <form action="{{route('admin.devices.destroy', $device->slug)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-button btn btn-danger ms-3" data-item-title="{{$device->name}}"><i class="fa-solid fa-trash-can"></i></button>
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


