@extends('layouts.app')

@section('content')

        <section class="section-guests-pages">
           <div class="container">
                <div class="row">
                    <h1 class="title-guests col-12 text-uppercase fw-bold text-my-green">About me</h1>
                </div>

                <div class="row box-presentation">

                    <div class="col-12 col-md-6">
                        <img class="img-fluid w-100" src="{{Vite::asset('resources/img/memoji-pensieroso.webp')}}" alt="">
                    </div>

                    <div class="col-12 col-md-6 text-my-white d-flex align-items-center justify-content-center">
                        <p class="paragrafh-about my-lineheight">Hi, I'm Mattia Li Causi.<br> I attended the boolean full stack web developer academy to learn the basics of this craft. I like to study creating user engaging products, I focus on web product design, also it is tempting for me to find ways to communicate with users visually and coherently. I am proficient in managing multiple design projects in a fast paced environment. Excellent in time management, organization, problem solving and meeting deadlines.</p>
                    </div>
                </div>
           </div>

        </section>



        <section class="section-pages-2 section-green my-5">
           <div class="container">
                <div class="row">
                    <h1 class="title-guests col-12 col-md-12 text-uppercase fw-bold text-my-green">life outside work</h1>
                </div>
                <div class="row box-presentation">

                    <div class="col-12 col-md-8 text-my-white d-flex align-items-center justify-content-center">
                        <p class="paragrafh-about my-lineheight">The inspiration for my designs comes from living an active and fun-filled life. Going out with friends, doing sports, studying and making memories with people are things I love and are important to me. My always curious mind pushes me to explore other fields and to do a lot of research to always be up to date with the technologies to be used and the tool here certain markets may need for a simpler job. I am a sociable and collaborative person.
                            I like working in team because it allows me to learn faster, be more creative and to exchange new ideas.</p>
                    </div>

                    <div class="col-4 text-my-white fs-1">
                        <div class="d-flex align-items-center h-100">
                            <button class="my-btn rounded-pill"><a href="#">contact me</a></button>
                        </div>

                    </div>
                </div>
           </div>

        </section>




    <section class="section-guests-pages my-5">
       <div class="container">
        <div class="row">
            <h1 class="title-guests col-12 col-md-12 text-uppercase fw-bold text-my-green">my guiding principles</h1>
        </div>

        <div class="row box-presentation">

            <div class="col-12 text-my-white d-flex align-items-center justify-content-center">
                <p class="paragrafh-about my-lineheight">Before attending this course I worked as a croupier in England and later as a chef de cuisine in Paris, in my spare time I liked studying to create small projects for myself, until when, driven by the desire for change, I decided to enroll in a course for make this passion a job.
                    In recent months I have had the opportunity to learn a lot, we started from developing simple sites in HTML and CSS up to developing sites with more complex front-end and back-end.
                    My goal for the future is to continue studying to create innovative, captivating and technologically up-to-date projects.</p>
            </div>

            <div class="col-12 text-my-white fs-1">
                ...
            </div>

        </div>
    </section>

@endsection
