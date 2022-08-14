@extends('layouts.layout_main')

@section('content')
    <section>

        <div class='container'>

            <p class="item">Id do Produto: {{ $id }}</p>
            <p class="item">Nome do produto {{ $product }}</p>
            <p class="item">Preço do produto {{ $price }}</p>
            <p class="item">Quantidade {{ $quantity }}</p>
            <p class="item">{{ $isPromo ? 'Estamos em Promoção!' : '' }}</p>
            <p class="item">{{ $isDiscount ? 'O preço acima possui desconto por tempo limitado' : '' }}</p>

        </div>

        <section class="container">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100"
                            src="https://images.unsplash.com/photo-1660121999601-18cbe99954de?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                            alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                            src="https://images.unsplash.com/photo-1659813254494-fbf374803c7e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                            alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                            src="https://images.unsplash.com/photo-1659941983952-7a35d58d3189?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                            alt="Third slide">
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>


    </section>
@endsection
