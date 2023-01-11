@extends('layouts.app')

@section('content')

    <h1>{{$project->title}}</h1>
    <p>{{$project->description}}</p>
    <img src="{{$project->thumb1}}" alt="image">

    <img src="{{asset('storage/' .$project->thumb1)}}" alt="image">
    <img src="{{asset('storage/' .$project->thumb1)}}" alt="image">


    <div>{{$project->technology_used}}</div>
    <div>Clicca per vedere il sito</div>
    <a href="{{$project->url}}">Vai...</a>

@endsection
