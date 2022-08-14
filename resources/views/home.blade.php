@extends('layouts.layout_main')

@section('content')

    <header class='header'>

        <nav class="nav">

            <h1 class='typography--title'>Lojas Suellen</h1>

        </nav>

    </header>

    <main class="main">

        @if ($show_phrase)
            <p class="typography--paragraph">{{ $first_phrase }}</p>
        @else
            <p class="typography--paragraph">{{ $another_phrase }}</p>
        @endif


        @for ($i = 0; $i < count($loop_products); $i++)
            <p style="
                    box-shadow: 1px 1px 1px 1px rgba(0,0,0,.2);
                    padding: 20px
                "
                class="typography-paragraph"
            >
                {{ $loop_products[$i] }}
            </p>
        @endfor





    </main>

@endsection

