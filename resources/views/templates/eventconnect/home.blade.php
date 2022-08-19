@extends('templates.eventconnect.layouts.main')

@extends('templates.eventconnect.layouts.navbar')

@section('content')
    <div class="container">
        <h1 class="text-center my-3">Event Connect</h1>

        <div class="container mx-auto">
            <div class="btn-group w-100 text-center">
                <a href="/eventconnect/create" class="btn btn-success">Criar Evento</a>
                <a href="/eventconnect/update" class="btn btn-warning">Alterar Evento</a>
                <a href="/eventconnect/delete" class="btn btn-danger">Deletar Evento</a>
            </div>
        </div>

        @forelse ($events as $event)
            <div class="blog-card">
                <div class="meta">
                    <div class="photo"
                        style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg)">
                    </div>
                    <ul class="details">
                        <li class="author"><a href="#">John Doe</a></li>
                        <li class="date">{{ $event->created_at }}</li>
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
                    <h1>{{ $event->title }}</h1>
                    <p> {{ $event->description }} </p>
                    <p class="read-more">
                        <a href="#">Read More </a>
                    </p>
                </div>
            </div>
        @empty
        @endforelse
    </div>
@endsection
