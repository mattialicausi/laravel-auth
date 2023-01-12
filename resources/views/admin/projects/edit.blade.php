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
        <div class="d-flex">
            <h1 class="text-my-white my-4 fw-bold me-3">Edit Project</h1>

            <div class="mb-3">
                <label for="technology_id" class="form-label">Select technology</label>
                <select name="technology_id" id="technology_id" class="form-control @error('technology_id') is-invalid @enderror">
                  <option value="">Select technology</option>
                  @foreach ($technologies as $technology)
                      <option value="{{$technology->id}}" {{ $technology->id == old('technology_id') ? 'selected' : '' }}>{{$technology->name}}</option>
                  @endforeach
                </select>
                @error('technology_id')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <form action="{{route('admin.projects.update', $project->slug)}}" method="POST" enctype="multipart/form-data" class="p-4">
                    @csrf
                    @method('PUT')

                      <div class="mb-3">
                        <label for="title" class="form-label text-my-green fw-bold mb-2">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title', $project->title)}}">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="description" class="form-label text-my-green fw-bold mb-2">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{old('description', $project->description)}}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="thumb1" class="form-label text-my-green fw-bold mb-2">First Image</label>
                        <input type="file" class="form-control @error('thumb1') is-invalid @enderror" id="thumb1" name="thumb1" value="{{old('thumb1', $project->thumb1)}}">
                        @error('thumb1')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="thumb2" class="form-label text-my-green fw-bold mb-2">Second Image</label>
                        <input type="file" class="form-control @error('thumb2') is-invalid @enderror" id="thumb2" name="thumb2" value="{{old('thumb2', $project->thumb2)}}">
                        @error('thumb2')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="technology_used" class="form-label text-my-green fw-bold mb-2">Technology Used</label>
                        <input type="text" class="form-control @error('technology_used') is-invalid @enderror" id="technology_used" name="technology_used" value="{{old('technology_used', $project->technology_used)}}">
                        @error('technology_used')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>



                      <div class="mb-3">
                        <label for="url" class="form-label text-my-green fw-bold mb-2">Link for the site</label>
                        <input type="text" class="form-control @error('url') is-invalid @enderror" id="url" name="url" value="{{old('url', $project->url)}}">
                        @error('url')
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
