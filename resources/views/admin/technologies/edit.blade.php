@extends('layouts.app')

@section('content')

<div class="container" id="create-admin">
          {{-- <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div> --}}
        <h1 class="text-my-white my-4 fw-bold">Edit {{$technology->name}}</h1>
        <div class="row">
            <div class="col-12">
                <form action="{{route('admin.technologies.update', $technology->slug)}}" method="POST" enctype="multipart/form-data" class="p-4">
                    @csrf
                    @method('PUT')


                      <div class="mb-3">
                        <label for="name" class="form-label text-my-green fw-bold mb-2">Category name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name', $technology->name)}}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>


                      <button type="submit" class="my-btn rounded-pill text-my-dark me-3">Submit</button>
                      <button type="reset" class="my-btn rounded-pill text-my-dark">Reset</button>
                </form>
            </div>
        </div>
</div>


@endsection
