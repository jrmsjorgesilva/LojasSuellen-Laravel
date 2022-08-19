@extends('templates.eventconnect.layouts.main')

@extends('templates.eventconnect.layouts.navbar')

@section('content')
    <section class="section-test">
        <div class="container text-center">
            @forelse ($events as $event)
                <h1 class="title">Titulo: {{ $event->title }}</h1>
                <p class="text-muted">Descrição: {{ $event->description }}</p>
            @empty
            @endforelse
        </div>
    </section>

    <div class="container">
        <h1>Events...</h1>
        @for ($i = 0; $i < 5; $i++)
            <div class="blog-card">
                <div class="meta">
                    <div class="photo"
                        style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg)">
                    </div>
                    <ul class="details">
                        <li class="author"><a href="#">John Doe</a></li>
                        <li class="date">Aug. 24, 2015</li>
                        <li class="tags">
                            <ul>
                                <li><a href="#">Learn</a></li>
                                <li><a href="#">Code</a></li>
                                <li><a href="#">HTML</a></li>
                                <li><a href="#">CSS</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="description">
                    <h1>Learning to Code</h1>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim
                        dicta
                        praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
                    <p class="read-more">
                        <a href="#">Read More</a>
                    </p>
                </div>
            </div>
        @endfor
    </div>
@endsection
