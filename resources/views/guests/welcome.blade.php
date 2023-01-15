@extends('layouts.app')
@section('content')

<div id="index-guest" class="container">
    <div class="row h-100 d-flex align-items-center h-100">
        <div class="col-6 my-flex h-100">
            <div class="text-uppercase text-my-white my-lineheight gsap-presentation-top">hi there <span>👋</span> i'm</div>
            <h1 class="text-my-white my-lineheight gsap-presentation-top">Mattia <br> Li Causi</h1>
            <h4 class="text-my-green my-lineheight gsap-presentation-top">Full stack junior developer <span>😎</span></h4>
            <p class="text-my-white my-lineheight gsap-presentation-down">I'm a student of the Boolean Academy and I love developing front-end.</p>
            <button class="my-btn rounded-pill gsap-presentation-down"><a href="">See my projects</a></button>
        </div>

        <div class="col-6 my-flex align-items-center h-100 emoji-gsap">
            <img src="{{Vite::asset('resources/img/my-memoji-portfolio.png')}}" alt="image avatar">
        </div>

    </div>
</div>
@endsection
