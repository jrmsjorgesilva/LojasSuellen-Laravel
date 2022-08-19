@extends('templates.eventconnect.layouts.main')

@extends('templates.eventconnect.layouts.navbar')

@section('content')

<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center">Crie seu Evento</h1>
                <form action="/eventconnect" method="POST" enctype="multipart/form-data">
                    @csrf
                    <fieldset>
                        <div class="form-group">
                            <label for="title">
                                Imagem de Capa do Evento:
                            </label>
                            <br />
                            <input type="file" class="form-control my-2 p-5" id='image' name="image">
                        </div>
                        <div class="form-group">
                            <label for="title">
                                Evento:
                            </label>
                            <input type="text" class="form-control my-2" id='title' name="title" placeholder="Nome do Evento">
                        </div>
                        <div class="form-group">
                            <label for="city">
                                Cidade:
                            </label>
                            <input type="text" class="form-control my-2" id='city' name="city" placeholder="Local do Evento">
                        </div>
                        <div class="form-group">
                            <label for="private">
                                É um evento privado?
                            </label>
                            <select name="private" id="private" class="form-control my-2">
                                <option value="0">Não</option>
                                <option value="1">Sim</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">
                                Descrição do Evento:
                            </label>
                            <textarea class="form-control my-2" name="description" id="description" rows="8"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary d-block w-100">
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
