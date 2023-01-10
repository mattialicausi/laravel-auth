@extends('layouts.app')
@section('content')

<div id="index-guest" class="container">
    <div class="row h-100 d-flex align-items-center">
        <div class="col-6 my-flex h-10">
            <div class="text-uppercase text-my-white my-lineheight">hi there <span>👋</span> i'm</div>
            <h1 class="text-my-white my-lineheight">Mattia <br> Li Causi</h1>
            <h4 class="text-my-green my-lineheight">Full stack junior developer <span>👨‍💻</span></h4>
            <p class="text-my-white my-lineheight">I'm a student of the Boolean academy and I love developing front-end.</p>
            <button class="my-btn rounded-pill">See my projects</button>
        </div>

        <div class="col-6 my-flex align-items-center h-100">
            <img src="{{Vite::asset('resources/img/my-memoji-portfolio.png')}}" alt="image avatar">
        </div>

    </div>
</div>
@endsection
