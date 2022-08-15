@extends('layouts.layout_main')

<style>
/*--------------------------------------------------------------
# Todas as Sections
--------------------------------------------------------------*/

html {
	scroll-behavior: smooth;
}

/* section {
	transition: scroll .3s ease-in;
	transition: scroll .6s ease-out;
} */

#section-hero,
#section-hotsite-passo-a-passo,
#section-servicos,
#section-consultas {
	min-height: 100vh;
}

#section-hero {
	width: 100%;
	height: 130vh;
	background: {{ '#330044' }};
	background: -moz-linear-gradient(145deg, {{ '#330044' . 'fa' }} 5%, {{ '#330044' . '88' }} 32%, {{ '#330044' . '55' }} 100%);
	background: -webkit-linear-gradient(145deg, {{ '#330044' . 'fa' }} 5%, {{ '#330044' . '88' }} 32%, {{ '#330044' . '55' }} 100%);
	background: linear-gradient(145deg, {{ '#330044' . 'fa' }} 5%, {{ '#330044' . '88' }} 32%, {{ '#330044' . '55' }} 100%);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="{{ '#330044' . 'fa' }}",endColorstr="#ffffff",GradientType=1);
}

#section-servicos {
	background-color: {{ '#330044' }};
}

#section-busca-divida {
	/* background-color: {{ '#330044' }}; */
	background: {{ '#330044' }};
	background: -moz-linear-gradient(145deg, {{ '#330044' . 'fa' }} 5%, {{ '#330044' . '88' }} 32%, {{ '#330044' . '55' }} 100%);
	background: -webkit-linear-gradient(145deg, {{ '#330044' . 'fa' }} 5%, {{ '#330044' . '88' }} 32%, {{ '#330044' . '55' }} 100%);
	background: linear-gradient(145deg, {{ '#330044' . 'fa' }} 5%, {{ '#330044' . '88' }} 32%, {{ '#330044' . '55' }} 100%);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="{{ '#330044' . 'fa' }}",endColorstr="#ffffff",GradientType=1);
}

#section-consultas {
	min-height: 100vh;
}

#section-hotsite-passo-a-passo {
  padding: 60px 0;
  position: relative;
  background-color: #fafafa;
}

#section-garantia {
	background-color: #fafafa;
}

/* #section-contato {
	background: {{ '#330044' }};
	background: -moz-linear-gradient(145deg, {{ '#330044' . 'fa' }} 5%, {{ '#330044' . '88' }} 32%, {{ '#330044' . '55' }} 100%);
	background: -webkit-linear-gradient(145deg, {{ '#330044' . 'fa' }} 5%, {{ '#330044' . '88' }} 32%, {{ '#330044' . '55' }} 100%);
	background: linear-gradient(145deg, {{ '#330044' . 'fa' }} 5%, {{ '#330044' . '88' }} 32%, {{ '#330044' . '55' }} 100%);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="{{ '#330044' . 'fa' }}",endColorstr="#ffffff",GradientType=1);
} */


/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/

#section-hero .container {
  /* padding-top: 100px; */
}
#section-hero h1 {
  margin: 0 0 10px 0;
  font-size: 48px;
  font-weight: 700;
  line-height: 56px;
  color: #fff;
}
#section-hero h2 {
  color: rgba(255, 255, 255, 0.6);
  margin-bottom: 50px;
  font-size: 24px;
}

.btn-cadastro-hotsite {
	font-weight: 500;
	font-size: 16px;
	letter-spacing: 1px;
	display: inline-block;
	padding: 10px 28px 10px 28px;
	border-radius: 50px;
	color: white;
	transition: 0.5s;
	margin: 10px 0;
	color: #fff;
	background: green;
}

.btn-cadastro-hotsite:focus,
.btn-cadastro-hotsite:hover {
  opacity: .8;
  color: white;
}

.close-btn {
	position: absolute;
	font-size: 55px;
	right: 20px;
}

.close-btn {
  color: {{ '#330044' }} !important;
}

.animated {
  animation: up-down 2s ease-in-out infinite alternate-reverse both;
}
@media (max-width: 991px) {
  #section-hero {
    height: 100vh;
    text-align: center;
  }
  .animated {
    -webkit-animation: none;
    animation: none;
  }
  .section-hero-img {
    text-align: center;
  }
  .section-hero-img img {
    width: 50%;
  }
}
@media (max-width: 768px) {
  #section-hero h1 {
    font-size: 28px;
    line-height: 36px;
  }
  #section-hero h2 {
    font-size: 18px;
    line-height: 24px;
    margin-bottom: 30px;
  }
  .section-hero-img img {
    width: 70%;
  }
}
@media (max-width: 575px) {
  .section-hero-img img {
    width: 80%;
  }
  .btn-cadastro-hotsite {
    font-size: 16px;
    padding: 10px 24px 11px 24px;
  }
}

@-webkit-keyframes up-down {
  0% {
    transform: translateY(10px);
  }
  100% {
    transform: translateY(-10px);
  }
}

@keyframes up-down {
  0% {
    transform: translateY(10px);
  }
  100% {
    transform: translateY(-10px);
  }
}

/*--------------------------------------------------------------
# section-servicos
--------------------------------------------------------------*/
#section-servicos .service-icon-box {
  box-shadow: 0px 0 25px 0 rgba(0, 0, 0, 0.1);
  padding: 30px 20px;
  transition: all ease-in-out 0.4s;
  background: #fff;
}
#section-servicos .service-icon-box .icon {
  margin-bottom: 10px;
}
#section-servicos .service-icon-box .icon i {
  color: #47b2e4;
  font-size: 36px;
  transition: 0.3s;
}

#section-servicos .service-icon-box h4 {
  font-weight: 500;
  margin-bottom: 15px;
  font-size: 24px;
  transition: ease-in-out 0.3s;
  color: {{ '#330044' }};
}

#section-servicos .service-icon-box p {
  line-height: 24px;
  font-size: 14px;
  margin-bottom: 0;
}

#section-servicos .service-icon-box:hover {
  transform: translateY(-10px);
}

#section-servicos .read-more {
	color: {{ '#330044' }};
	border: none;
	background-color: transparent;
}

#section-servicos .read-more:focus,
#section-servicos .read-more:hover {
	text-decoration: underline;
	color: {{ '#330044' . "fa" }};
	cursor: pointer;
}

/*--------------------------------------------------------------
# Modal Style
--------------------------------------------------------------*/

.modal {
  border-radius: 7px;
  overflow: hidden;
  background-color: transparent;
  font-family: "Poppins", sans-serif; }
  .modal .logo a img {
    width: 30px; }
  .modal .modal-content {
    background-color: transparent;
    border: none;
    border-radius: 7px; }
    .modal .modal-content .modal-body {
      border-radius: 7px;
      overflow: hidden;
	  background: #eaeaea;  /* fallback for old browsers */
	  background: -webkit-linear-gradient(to right, #fff, #eaeaea);  /* Chrome 10-25, Safari 5.1-6 */
	  background: linear-gradient(to right, #fff, #eaeaea); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      padding-left: 0px;
      padding-right: 0px;
      -webkit-box-shadow: 0 10px 50px -10px rgba(0, 0, 0, 0.9);
      box-shadow: 0 10px 50px -10px rgba(0, 0, 0, 0.9); }
      .modal .modal-content .modal-body h2 {
        font-size: 18px; }
      .modal .modal-content .modal-body p {
        color: #777;
        font-size: 14px; }
      .modal .modal-content .modal-body h3 {
        font-weight: 900;
        color: #000;
        font-size: 22px; }
      .modal .modal-content .modal-body .promo-img {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
        flex: 0 0 50%; }
  .modal .cancel {
    color: gray;
    font-size: 14px; }
  .modal .btn-primary {
    padding-top: 10px;
    padding-bottom: 10px; }

/* .form-control {
  border: transparent;
  -webkit-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.2);
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.2);
  border: none; }
  .form-control:active, .form-control:focus, .form-control:hover {
    -webkit-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.2);
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.2); }

.btn {
  border-radius: 4px;
  border: none; }
  .btn:active, .btn:focus {
    outline: none;
    -webkit-box-shadow: none !important;
    box-shadow: none !important; }

.custom-select {
  border: none;
  -webkit-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.2);
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.2); }
  .custom-select:active, .custom-select:focus, .custom-select:hover {
    -webkit-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.2);
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.2);
}

.bg-image {
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat; }

.logo img {
  width: 70px; }

.custom-note {
  color: #999; }
  .custom-note a {
    color: #555;
    font-weight: 900 !important;
} */
/*--------------------------------------------------------------
# Seção Produtos
--------------------------------------------------------------*/

.block-consult-card {
	text-align: left !important;
	padding: 15px 25px;
	margin: 10px;
	background: {{ '#330044' }};
	background: -moz-linear-gradient(145deg, {{ '#330044' . 'fa' }} 5%, {{ '#330044' . '88' }} 32%, {{ '#330044' . '55' }} 100%);
	background: -webkit-linear-gradient(145deg, {{ '#330044' . 'fa' }} 5%, {{ '#330044' . '88' }} 32%, {{ '#330044' . '55' }} 100%);
	background: linear-gradient(145deg, {{ '#330044' . 'fa' }} 5%, {{ '#330044' . '88' }} 32%, {{ '#330044' . '55' }} 100%);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="{{ '#330044' . 'fa' }}",endColorstr="#ffffff",GradientType=1);
	box-shadow: 3px 6px 15px 0 rgba(0, 0, 0, 0.2);
	border-radius: 3px;
	transition: all ease-in-out 0.3s;
}

.block-consult-card:focus,
.block-consult-card:hover {
	transform: translateY(-1px);
	box-shadow: 3px 6px 15px 0 rgba(0, 0, 0, 0.4);
}

/*--------------------------------------------------------------
# Hotsite section passa a passo
--------------------------------------------------------------*/

.section-hotsite-passo-a-passo::before {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  background: rgba(255, 255, 255, 0.92);
  z-index: 9;
}

.section-hotsite-passo-a-passo .container, .section-hotsite-passo-a-passo .container-fluid {
  position: relative;
  z-index: 10;
}

.section-hotsite-passo-a-passo .card {
  border-radius: 3px;
  border: 0;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  margin-bottom: 30px;
  transition: all .3s ease;
}

.section-hotsite-passo-a-passo .card-icon {
  text-align: center;
  margin-top: -32px;
}

.section-hotsite-passo-a-passo .card-icon svg {
  font-size: 32px;
  color: #eaeaea;
  width: 64px;
  height: 64px;
  padding: 10px;
  text-align: center;
  background-color: {{ '#330044' }};
  border-radius: 4px;
  text-align: center;
  border: 4px solid #fff;
  display: inline-block;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  transition: 0.3s;
}

/* .section-hotsite-passo-a-passo img, */
.section-hotsite-passo-a-passo .card .svg-pattern-card {
	border-radius: 8px;
	box-shadow: 3px 6px 15px 0 rgba(0, 0, 0, 0.2);
	width: 100%;
	height: 150px;
}

.section-hotsite-passo-a-passo .card-body {
	padding-top: 12px;
}

.section-hotsite-passo-a-passo .card-icon svg,
.section-hotsite-passo-a-passo .svg-pattern-card,
.section-hotsite-passo-a-passo .card-body {
	transform: translateY(-60px);
}

.section-hotsite-passo-a-passo .card-title {
  font-weight: 700;
  text-align: center;
}

.section-hotsite-passo-a-passo .card:hover .card-icon svg {
  background: #eaeaea;
  fill: {{ '#330044' }};
}

@media (max-width: 1024px) {

  .section-hotsite-passo-a-passo {
    background-attachment: scroll;
  }

  .section-hotsite-passo-a-passo .card {
	  margin-top: 100px;
  }

}

/*--------------------------------------------------------------
# Counts
--------------------------------------------------------------*/

.hotsite-box {
	text-align: left !important;
	padding: 30px 30px 25px 30px;
	width: 100%;
	height: 100%;
	position: relative;
	text-align: center;
	border-radius: 3px;
	background: whitesmoke;
}
.hotsite-box .svg-header {
  position: absolute;
  top: -25px;
  left: 50%;
  transform: translateX(-50%);
  font-size: 20px;
  background: {{ '#330044' }};
  padding: 12px;
  color: #fff;
  border-radius: 50px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  line-height: 0;
  width: 48px;
  height: 48px;
}
.hotsite-box span {
  font-size: 36px;
  display: block;
  font-weight: 600;
  color: #010483;
}
.hotsite-box p {
  padding: 0;
  margin: 10px 0;
  font-size: 18px;
}

/*--------------------------------------------------------------
# Form Busca Divida
--------------------------------------------------------------*/

.section-busca-divida {
	position: relative !important;
	z-index: 2;
	text-align: center;
	padding: 80px 0;
}

.section-busca-divida h3 {
	position: relative;
	font-size: 36px;
	font-weight: 700;
	color: #fff;
	font-family: "Poppins", sans-serif;
	padding-bottom: 0;
	margin-bottom: 0;
}

.section-busca-divida p {
  font-size: 15;
  font-style: italic;
  margin: 30px 0 0 0;
  padding: 0;
}

.section-busca-divida .busca-form {
  text-align: center;
  font-size: 15px;
  margin-top: 30px;
}

.section-busca-divida .busca-form form {
	background: #fff;
	padding: 6px 10px;
	position: relative;
	border-radius: 50px;
	text-align: left;
}

#dividaCpfCnpj {
	border: 0;
	padding: 4px 8px;
	width: calc(100% - 100px);
	outline: none !important;
	border: none !important;
	box-shadow: none !important;
}

#divida-btn {
	position: absolute;
	top: 0;
	right: -1px;
	bottom: 0;
	border: 0;
	background: none;
	font-size: 18px;
	padding: 0 20px;
	background: #8fc04e;
	color: #fff;
	cursor: pointer !important;
	transition: 0.3s;
	border-radius: 50px;
	box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
	outline: none;
}

#divida-btn:hover {
  background: #75a239;
  cursor: pointer;
}

</style>

@section('botoes-nav')

	{{-- <!-- <li  class="btn-group">
		<a href="/login" class="btn btn-success ">MINHA CONTA</a>
		<a style="margin-left: 6px" href="{{  route('site.seja-um-representante') }}" class="btn btn-success ">SEJA REPRESENTANTE</a>
	</li> --> --}}

	<li class="nav-item mr-2">
		<a href="#section-hero">Home</a>
	</li>

	<li class="nav-item mr-2">
		<a href="#section-consultas">Consultas</a>
	</li>

	<li class="nav-item mr-2">
		<a href="#section-contato">Contato</a>
	</li>

	<li class="nav-item mr-2">
		<a href="/login" class="btn-cadastro-hotsite btn-success w-100 text-center fw-bold" target="_blank">Minha Conta</a>
	</li>

	<li class="nav-item mr-2">
		{{-- <a href="{{  route('site.seja-um-representante') }}" class="btn-cadastro-hotsite btn-success w-100 text-center fw-bold" target="_blank">Seja Representante</a> --}}
		<a href="#" class="btn-cadastro-hotsite btn-success w-100 text-center fw-bold" target="_blank">Seja Representante</a>
	</li>

@endsection

@section('conteudo-header')
	<!-- <div class="row m-0">
		<div class="col-md-8 col-xs-12">
			<div class="block-banner">
				<h1 id="titulobanner">{!! (is_object($hotsite) && !empty($hotsite->titulo_banner)) ? $hotsite->titulo_banner : '' !!}</h1>
				<p class="textobanner" id="textobanner">
					{!! (is_object($hotsite) && !empty($hotsite->descicao_banner)) ? $hotsite->descicao_banner : '' !!}
					{{-- Consulte seu nome ou de terceiro de um jeito rápido e fácil, a qualquer hora e em qualquer lugar. Descubra todas as Restrições, Pendências, Dividas e Protestos em menos de 1 Minuto. --}}
				</p>
			</div>

			@if((is_object($hotsite) && !empty($hotsite->descicao_banner)))

				<div class="info-add">
					{!! (is_object($hotsite) && !empty($hotsite->descicao_banner)) ? $hotsite->info_extra_banner : '' !!}
				</div>

			@endif

			<img src="/hotsite/img/data-img.png" border="0" class="banner_img" alt="O maior e mais completo relatório de CPF ou CNPJ Online" />

		</div>

		<div class="col-md-4 col-xs-12 form-register">

			{{-- <form method="POST" action="{{ route('site.quickRegistration.store') }}"> --}}

				{{ csrf_field() }}
				<h5>Faça seu Cadastro </h5>

				{{-- <div class="div-toggle">
					<input id="toggle-state" type="checkbox" data-style="w-100" data-toggle="toggle">
				</div> --}}

				<div class="mb-4" style="margin-top: 20px;">
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="customRadioInline1" name="customRadioInline" class="custom-control-input" value="cpf" required />
					  <label class="custom-control-label" for="customRadioInline1">Pessoa Física</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="customRadioInline2" name="customRadioInline" class="custom-control-input" value="cnpj" required />
					  <label class="custom-control-label" for="customRadioInline2">Pessoa Jurídica</label>
					</div>
				</div>

				<div class="md-form md-outline form-lg" id="div-cnpj" style="display:none;">
					<input type="tel" name="cnpj" id="form0" class="form-control form-control-lg input-cnpj" maxlength="14" required />
					<label for="form0">CNPJ</label>
				</div>

				<div class="md-form md-outline form-lg" id="div-cpf">
					<input type="tel" name="cpf" id="form1" class="form-control form-control-lg input-cpf" maxlength="11" required />
					<label for="form1">CPF</label>
				</div>

				<div class="md-form md-outline form-lg">
					<input type="text" name="email" id="form2" class="form-control form-control-lg" required />
					<label for="form2">Seu melhor email</label>
				</div>

				<div class="md-form md-outline form-lg">
					<input type="hidden" name="withoutDdd" value="1" class="form-control form-control-lg" />
					<input type="tel" name="celular" id="form3" class="form-control form-control-lg" maxlength="12" />
					<label for="form3">Celular com DDD</label>
					{{-- @if ($smsConfirm) --}}
						<span class="helper">Será enviado um SMS para confirmar o cadastro.</span>
					{{-- @endif --}}
				</div>

				<div class="md-form md-outline form-lg">

					<input type="password" name="senha" id="form4" class="form-control form-control-lg">
					<label for="form4">Senha</label>

				</div>

				<div class="col-md-12" style="margin-bottom: 26px; padding: 0px; margin-top: 16px">
					<div class="form-check" style="padding: 0px">
						<input type="checkbox" class="form-check-input" id="check_policy" required>
						<label class="form-check-label" for="check_policy">
							Declaro que li e aceito o <a href="#"  data-toggle="modal" data-target="#modal_terms" style="color: #168bfa">Termo de Serviços</a> e a <a href="#" style="color: #168bfa" data-toggle="modal" data-target="#modal_policy">Política de Privacidade</a>.
						</label>
					</div>
				</div>

				<div class="md-form text-center" >

					{{-- {!! Recaptcha::render() !!} --}}

				</div>

				<div class="md-form">

					<button type="submit" class="btn btn-success btn-lg m-0 w-100">Continuar</button>

				</div>

			</form>

		</div>

	</div> -->

	<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
	<!-- &&&&&&&&&&&&&&&&&&&&&&&  Inicio da seção Hero  &&&&&&&&&&&&&&&&&&&&&&&&& -->
	<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->

	<section id="section-hero" class="d-flex align-items-center">

		<div class="container">
			<div class="row">
				<div class="col-lg-7 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1 block-banner">

				<h1 class="titulobanner">{!! (is_object($hotsite) && !empty($hotsite->titulo_banner)) ? $hotsite->titulo_banner : '' !!}</h1>

				<h4 class="textobanner" id="textobanner">
					{!! (is_object($hotsite) && !empty($hotsite->descicao_banner)) ? $hotsite->descicao_banner : '' !!}
					{{-- Consulte seu nome ou de terceiro de um jeito rápido e fácil, a qualquer hora e em qualquer lugar. Descubra todas as Restrições, Pendências, Dividas e Protestos em menos de 1 Minuto. --}}
				</h4>

					@if((is_object($hotsite) && !empty($hotsite->descicao_banner)))

						<h4 class="info-add">
							{!! (is_object($hotsite) && !empty($hotsite->descicao_banner)) ? $hotsite->info_extra_banner : '' !!}
						</h4>

					@endif

				<div class="d-flex justify-content-center justify-content-lg-start">
					<!-- botão modal -->
					<a href="" class="btn-cadastro-hotsite btn-success" data-toggle="modal" data-target="#modal-form-cadastro">Cadastrar</a>
					<!-- modal -->
					<div class="modal fade" id="modal-form-cadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

						<div class="modal-dialog" role="document">

							<div class="modal-content" style="background-color: transparent !important; box-shadow: none !important;">

								<!-- cabeçalho modal -->
								<div class="modal-header m-0 p-0" style="height: 0px;">

								</div>

								<!-- corpo modal -->
								<div class="modal-body p-3">

									<!-- botaõ fechar -->
									<button type="button" class="close fw-bold p-2" data-dismiss="modal" aria-label="Close">

										<span aria-hidden="true" class="close-btn">&times;</span>

									</button>

									<div class="form-register">

										<!-- formulario de cadastro -->
										<form method="POST" action="">

											{{ csrf_field() }}
											<h5 class="py-2">Faça seu Cadastro </h5>

											{{-- <div class="div-toggle">
												<input id="toggle-state" type="checkbox" data-style="w-100" data-toggle="toggle">
											</div> --}}

											<div class="mb-4" style="margin-top: 20px;">
												<div class="custom-control custom-radio custom-control-inline">
												<input type="radio" id="customRadioInline1" name="customRadioInline" class="custom-control-input" value="cpf" required />
												<label class="custom-control-label" for="customRadioInline1">Pessoa Física</label>
												</div>
												<div class="custom-control custom-radio custom-control-inline">
												<input type="radio" id="customRadioInline2" name="customRadioInline" class="custom-control-input" value="cnpj" required />
												<label class="custom-control-label" for="customRadioInline2">Pessoa Jurídica</label>
												</div>
											</div>

											<div class="md-form md-outline form-lg py-1" id="div-cnpj" style="display:none;">
												<input type="tel" name="cnpj" id="form0" class="form-control form-control-lg input-cnpj" maxlength="14" required />
												<label for="form0">CNPJ</label>
											</div>

											<div class="md-form md-outline form-lg  py-1" id="div-cpf">
												<input type="tel" name="cpf" id="form1" class="form-control form-control-lg input-cpf" maxlength="11" required />
												<label for="form1">CPF</label>
											</div>

											<div class="md-form md-outline form-lg  py-1">
												<input type="text" name="email" id="form2" class="form-control form-control-lg" required />
												<label for="form2">Seu melhor email</label>
											</div>

											<div class="md-form md-outline form-lg  py-1">
												<input type="hidden" name="withoutDdd" value="1" class="form-control form-control-lg" />
												<input type="tel" name="celular" id="form3" class="form-control form-control-lg" maxlength="12" />
												<label for="form3">Celular com DDD</label>
												{{-- @if ($smsConfirm)
													<span class="helper">Será enviado um SMS para confirmar o cadastro.</span>
												@endif --}}
											</div>

											<div class="md-form md-outline form-lg py-1">

												<input type="password" name="senha" id="form4" class="form-control form-control-lg">
												<label for="form4">Senha</label>

											</div>

											<div class="col-md-12" style="margin-bottom: 26px; padding: 0px; margin-top: 16px">
												<div class="form-check" style="padding: 0px">
													<input type="checkbox" class="form-check-input" id="check_policy" required>
													<label class="form-check-label" for="check_policy">
														Declaro que li e aceito o <a href="#"  data-toggle="modal" data-target="#modal_terms" style="color: #168bfa">Termo de Serviços</a> e a <a href="#" style="color: #168bfa" data-toggle="modal" data-target="#modal_policy">Política de Privacidade</a>.
													</label>
												</div>
											</div>

											<div class="md-form" >

												{{-- {!! Recaptcha::render() !!} --}}

											</div>

											<div class="md-form">

												<button type="submit" class="btn btn-success btn-lg m-0 w-100">Continuar</button>

											</div>

										</form>

										</div>

								</div>

							</div>

						</div>

					</div>
				</div>

				</div>
				<div class="col-lg-5 order-1 order-lg-2 section-hero-img">
					<img src="/hotsite/img/data-img.png" border="0" class="banner_img img-fluid animated" alt="O maior e mais completo relatório de CPF ou CNPJ Online" />
				</div>

			</div>

			<div class="row mt-3">
				<div class="col-lg-3 col-md-4 d-none d-sm-block">
					<div class="icon-box p-3"  >
						<svg
							width="24"
							height="24"
							xmlns="http://www.w3.org/2000/svg"
							fill="#fff"
							fill-rule="evenodd"
							clip-rule="evenodd"
							viewbox="0 0 24 24"
						>
							<path d="M12 0c-3.371 2.866-5.484 3-9 3v11.535c0 4.603 3.203 5.804 9 9.465 5.797-3.661 9-4.862 9-9.465v-11.535c-3.516 0-5.629-.134-9-3zm-.548 15l-3.452-3.362 1.237-1.239 2.215 2.123 4.382-4.475 1.238 1.238-5.62 5.715z"/>
						</svg>
					</div>
					<h6 class="text-white fw-bold text-left">Liberação imediata com segurança</h6>
				</div>
				<div class="col-lg-3 col-md-4 mt-4 mt-md-0 d-none d-sm-block">
					<div class="icon-box p-3"  >
						<svg
							width="24"
							height="24"
							xmlns="http://www.w3.org/2000/svg"
							fill="#fff"
							fill-rule="evenodd"
							clip-rule="evenodd"
							viewbox="0 0 24 24"
						>
							<path d="M8.793 9.951c.338-.241.719-.353 1.094-.353.798 0 1.565.507 1.818 1.353-.324-.249-.702-.37-1.084-.37-.386 0-.776.125-1.116.367-.677.482-.976 1.303-.716 2.082-1.05-.753-1.055-2.323.004-3.079zm3.164 10.8c.841.283 3.443 1.004 6.458 3.249l5.585-3.983c-1.448-2.031-1.05-3.452-2.489-5.471-.726-1.017-1.222-1.294-1.845-1.294-.22 0-.456.035-.724.084l.507.71c.22.308-.052.631-.335.631-.111 0-.225-.05-.311-.171l-.452-.634c-.149-.21-.357-.281-.596-.281-.345 0-.753.148-1.141.237l.615.862c.218.307-.053.631-.336.631-.111 0-.224-.05-.31-.171l-.533-.747c-.148-.208-.353-.28-.586-.28-.359 0-.787.17-1.186.271l.65.912c.22.308-.052.631-.336.631-.111 0-.225-.05-.311-.17l-2.638-3.693c-.231-.325-.542-.46-.848-.46-.774 0-1.524.868-.917 1.72l3.895 5.461c-.418-.154-1.152-.295-1.632-.295-1.48.001-2.05 1.625-.184 2.251zm-1.841-3.644l-.79-1.107h-3.826c-1.93 0-3.5-1.57-3.5-3.5 0-2.797 2.479-3.833 4.433-3.72-.167-4.218 2.208-6.78 5.567-6.78 3.453 0 5.891 2.797 5.567 6.78 1.664-.044 4.179.683 4.41 3.323.469.384.85.844 1.161 1.281.219.307.401.604.562.893.191-.559.3-1.155.3-1.778 0-2.702-1.951-4.945-4.521-5.408-.212-3.95-3.473-7.091-7.479-7.091s-7.267 3.141-7.479 7.092c-2.57.463-4.521 2.706-4.521 5.408 0 3.037 2.463 5.5 5.5 5.5h3.742c.226-.349.522-.653.874-.893z"/>
						</svg>
					</div>
					<h6 class="text-white fw-bold text-left">As melhores consultas do mercado</h6>
				</div>
				<div class="col-lg-3 col-md-4 mt-4 mt-md-0 d-none d-sm-block">
					<div class="icon-box p-3">
						<svg
							width="24"
							height="24"
							xmlns="http://www.w3.org/2000/svg"
							fill="#fff"
							fill-rule="evenodd"
							clip-rule="evenodd"
							viewbox="0 0 24 24"
						>
							<path d="M21.169 19.754c.522-.79.831-1.735.831-2.754 0-2.761-2.238-5-5-5s-5 2.239-5 5 2.238 5 5 5c1.019 0 1.964-.309 2.755-.832l2.831 2.832 1.414-1.414-2.831-2.832zm-4.169.246c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3zm-4.89 2h-7.11l2.599-3h2.696c.345 1.152.976 2.18 1.815 3zm-2.11-5h-10v-17h22v12.11c-.574-.586-1.251-1.068-2-1.425v-8.685h-18v13h8.295c-.19.634-.295 1.305-.295 2zm-4-4h-2v-6h2v6zm3 0h-2v-9h2v9zm3 0h-2v-4h2v4z"/>
						</svg>
					</div>
					<h6 class="text-white fw-bold text-left">Analise antes de vender e comprar</h6>
				</div>
				<div class="col-lg-3 col-md-4 mt-4 mt-lg-0 d-none d-sm-block">
					<div class="icon-box p-3">
						<svg
							width="24"
							height="24"
							xmlns="http://www.w3.org/2000/svg"
							fill="#fff"
							fill-rule="evenodd"
							clip-rule="evenodd"
							viewbox="0 0 24 24"
						>
							<path d="M10 16c0-1.104.896-2 2-2s2 .896 2 2c0 .738-.404 1.376-1 1.723v2.277h-2v-2.277c-.596-.347-1-.985-1-1.723zm11-6v14h-18v-14h3v-4c0-3.313 2.687-6 6-6s6 2.687 6 6v4h3zm-13 0h8v-4c0-2.206-1.795-4-4-4s-4 1.794-4 4v4zm11 2h-14v10h14v-10z"/>
						</svg>
					</div>
					<h6 class="text-white fw-bold text-left">Melhor score de crédito e seguro</h6>
				</div>
			</div>
		</div>

	</section><!-- End Hero -->

	<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
	<!-- &&&&&&&&&&&&&&&&&&&&&&&&&  Fim da seção Hero  &&&&&&&&&&&&&&&&&&&&&&&&&& -->
	<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->

@endsection

@section('content')

	<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
	<!-- &&&&&&&&&&&&&&&&&&&&&&  Inicio da seção Serviços  &&&&&&&&&&&&&&&&&&&&&& -->
	<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->

	<section id="section-servicos" class="section-servicos pt-5 pb-4 bloco-servicos">
		<div class="container">

			<div class="section-title">
				<h1 class="text-center my-3">Nossos Serviços</h1>
				<h2 class="title text-center pb-4">Veja como podemos ajudar seu negócio:</h2>
			</div>

			<div class="row mt-5">

			<div class="col-md-3 col-xs-12 d-flex align-items-stretch mt-4 mt-md-0 mr-2">
				<!-- coluna -->
				<div class="service-icon-box">
					<!-- icone -->
					<div class="icon">
						<svg
							width="36"
							height="36"
							fill="{{ '#330044' }}"
							xmlns="http://www.w3.org/2000/svg"
							fill-rule="evenodd"
							clip-rule="evenodd"
							viewbox="0 0 24 24"
						>
							<path d="M17.825 24h-15.825v-24h10.189c3.162 0 9.811 7.223 9.811 9.614v10.071l-2-2v-7.228c0-4.107-6-2.457-6-2.457s1.517-6-2.638-6h-7.362v20h11.825l2 2zm-2.026-4.858c-.799.542-1.762.858-2.799.858-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5c0 1-.294 1.932-.801 2.714l4.801 4.872-1.414 1.414-4.787-4.858zm-2.799-7.142c1.656 0 3 1.344 3 3s-1.344 3-3 3-3-1.344-3-3 1.344-3 3-3z"/>
						</svg>
					</div>
					<h4>Consultar CPF / CNPJ</h4>
					<p>
						Vendas ágeis e seguras: analisamos o risco
						<small {!! (is_object($hotsite) && !empty('#330044')) ? 'style="color: ' . '#330044' . '!important;"' : '' !!}>
							<button class="read-more" data-toggle="modal" data-target="#modal-hotsite-consulta-pf-pj">... [Ler Mais]</button>
						</small>
					</p>
				</div>

				<!-- modal -->
				<div class="modal fade" id="modal-hotsite-consulta-pf-pj" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

					<!-- inicio modal -->
					<div class="modal-dialog" role="document">

						<div class="modal-content" style="background-color: transparent !important; box-shadow: none !important;">

						<!-- cabeçalho modal -->
							<div class="modal-header m-0 p-0" style="height: 0px;">

								<!-- <h5 class="modal-title" id="exampleModalLabel">Crédito CPF e CNPJ</h5> -->

							</div>

							<!-- corpo modal -->
							<div class="modal-body">

								<!-- botão fechar modal -->
								<button type="button" class="close fw-bold p-2" data-dismiss="modal" aria-label="Close">

									<span aria-hidden="true" class="close-btn">&times;</span>

								</button>

								<!-- content -->
								<div class="d-block main-content">
									<img src="img/note1.png" alt="Image {{ $tituloSite }} " class="img-fluid">
									<div class="content-text p-4">

										<h3 class="mb-4" style="color: {{ '#330044' }};">Fique Tranquilo e Foque Nas Vendas!</h3>
										<p class="mb-4">
											Vendas ágeis e seguras: analisamos o risco de crédito e recomendamos se o negócio deve ou não ser concluído;
											Tranquilidade: reduzimos o risco de vendas para consumidores com restrições no CPF e com alta probabilidade de se tornarem inadimplentes;
											Melhores resultados: sugerimos o valor mais adequado de crédito para cada cliente e aumentamos a probabilidade de pagamento.
										</p>
										<div class="d-flex">
										<div class="ml-auto">
											<a href="#" class="btn btn-cadastro-hotsite btn-success px-4" data-dismiss="modal">Continuar</a>
										</div>
										</div>
									</div>
								</div>

							</div>

						</div>

					</div>
				</div>
				<!-- fim da coluna -->
				</div>

			<div class="col-md-3 col-xs-12 d-flex align-items-stretch mt-4 mt-md-0 mr-2">
				<!-- coluna -->
				<div class="service-icon-box">
					<!-- icone -->
					<div class="icon">
						<svg
							width="36"
							height="36"
							fill="{{ '#330044' }}"
							xmlns="http://www.w3.org/2000/svg"
							fill-rule="evenodd"
							clip-rule="evenodd"
							viewbox="0 0 24 24"
						>
							<path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6 13h-12v-2h12v2z"/>
						</svg>
					</div>
					<h4>Negativar</h4>
					<p>
						Inclusão de Protestos. Após o cadastro do protesto
						<small {!! (is_object($hotsite) && !empty('#330044')) ? 'style="color: ' . '#330044' . '!important;"' : '' !!}>
							<button class="read-more" data-toggle="modal" data-target="#modal-hotsite-negativar">... [Ler Mais]</button>
						</small>
					</p>
				</div>

				<!-- modal -->
				<div class="modal fade" id="modal-hotsite-negativar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

					<!-- inicio modal -->
					<div class="modal-dialog" role="document">

						<div class="modal-content" style="background-color: transparent !important; box-shadow: none !important;">

						<!-- cabeçalho modal -->
							<div class="modal-header m-0 p-0" style="height: 0px;">

								<!-- <h5 class="modal-title" id="exampleModalLabel">Crédito CPF e CNPJ</h5> -->

							</div>

							<!-- corpo modal -->
							<div class="modal-body">

								<!-- botão fechar modal -->
								<button type="button" class="close fw-bold p-2" data-dismiss="modal" aria-label="Close">

									<span aria-hidden="true" class="close-btn">&times;</span>

								</button>

								<!-- content -->
								<div class="d-block main-content">
									<img src="img/note1.png" alt="Image {{ $tituloSite }} " class="img-fluid">
									<div class="content-text p-4">

										<h3 class="mb-4" style="color: {{ '#330044' }};">Fique Tranquilo e Foque Nas Vendas!</h3>
										<p class="mb-4">
											Inclusão de Protestos. Após o cadastro do protesto, o mesmo vai para o cartório do estado selecionado, após isso chegará uma carta na casa do protestado avisando-o da inadimplência aonde o mesmo terá o prazo de 5 dias para pagamento. Caso não seja pago o protesto entrara automaticamente no cartório como titulo protestado. Importante anexar o documento corretamente para não haver devolução por divergência. Não é permitido cadastrar títulos com mais de um ano de vencido.
										</p>
										<div class="d-flex">
										<div class="ml-auto">
											<a href="#" class="btn btn-cadastro-hotsite btn-success px-4" data-dismiss="modal">Continuar</a>
										</div>
										</div>
									</div>
								</div>

							</div>

						</div>

					</div>
					</div>
			</div>

			<div class="col-md-3 col-xs-12 d-flex align-items-stretch mt-4 mt-xl-0 mr-2">
				<!-- coluna -->
				<div class="service-icon-box">
					<!-- icone -->
					<div class="icon">
						<svg
							width="36"
							height="36"
							fill="{{ '#330044' }}"
							xmlns="http://www.w3.org/2000/svg"
							fill-rule="evenodd"
							clip-rule="evenodd"
							viewbox="0 0 24 24"
						>
							<path d="M7 13.5c0-.828-.672-1.5-1.5-1.5s-1.5.672-1.5 1.5.672 1.5 1.5 1.5 1.5-.672 1.5-1.5zm9 1c0-.276-.224-.5-.5-.5h-7c-.276 0-.5.224-.5.5s.224.5.5.5h7c.276 0 .5-.224.5-.5zm4-1c0-.828-.672-1.5-1.5-1.5s-1.5.672-1.5 1.5.672 1.5 1.5 1.5 1.5-.672 1.5-1.5zm-17.298-6.5h-2.202c-.276 0-.5.224-.5.5v.511c0 .793.926.989 1.616.989l1.086-2zm19.318 3.168c-.761-1.413-1.699-3.17-2.684-4.812-.786-1.312-1.37-1.938-2.751-2.187-1.395-.25-2.681-.347-4.585-.347s-3.19.097-4.585.347c-1.381.248-1.965.875-2.751 2.187-.981 1.637-1.913 3.382-2.684 4.812-.687 1.273-.98 2.412-.98 3.806 0 1.318.42 2.415 1 3.817v2.209c0 .552.448 1 1 1h1.5c.552 0 1-.448 1-1v-1h13v1c0 .552.448 1 1 1h1.5c.552 0 1-.448 1-1v-2.209c.58-1.403 1-2.499 1-3.817 0-1.394-.293-2.533-.98-3.806zm-15.641-3.784c.67-1.117.852-1.149 1.39-1.246 1.268-.227 2.455-.316 4.231-.316s2.963.088 4.231.316c.538.097.72.129 1.39 1.246.408.681.81 1.388 1.195 2.081-1.456.22-4.02.535-6.816.535-3.048 0-5.517-.336-6.805-.555.382-.686.779-1.386 1.184-2.061zm11.595 10.616h-11.948c-1.671 0-3.026-1.354-3.026-3.026 0-1.641.506-2.421 1.184-3.678 1.041.205 3.967.704 7.816.704 3.481 0 6.561-.455 7.834-.672.664 1.231 1.166 2.01 1.166 3.646 0 1.672-1.355 3.026-3.026 3.026zm5.526-10c.276 0 .5.224.5.5v.511c0 .793-.926.989-1.616.989l-1.086-2h2.202z"/>
						</svg>
					</div>
					<h4>Consultar Veiculos</h4>
					<p>
						Proteja seu negócio dos riscos do mercado de veículos usados
						<small {!! (is_object($hotsite) && !empty('#330044')) ? 'style="color: ' . '#330044' . '!important;"' : '' !!}>
							<button class="read-more" data-toggle="modal" data-target="#modal-hotsite-consulta-veiculos">... [Ler Mais]</button>
						</small>
					</p>
				</div>

				<!-- modal -->
				<div class="modal fade" id="modal-hotsite-consulta-veiculos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

					<!-- inicio modal -->
					<div class="modal-dialog" role="document">

						<div class="modal-content" style="background-color: transparent !important; box-shadow: none !important;">

						<!-- cabeçalho modal -->
							<div class="modal-header m-0 p-0" style="height: 0px;">

								<!-- <h5 class="modal-title" id="exampleModalLabel">Crédito CPF e CNPJ</h5> -->

							</div>

							<!-- corpo modal -->
							<div class="modal-body">

								<!-- botão fechar modal -->
								<button type="button" class="close fw-bold p-2" data-dismiss="modal" aria-label="Close">

									<span aria-hidden="true" class="close-btn">&times;</span>

								</button>

								<!-- content -->
								<div class="d-block main-content">
									<img src="img/note1.png" alt="Image {{ $tituloSite }} " class="img-fluid">
									<div class="content-text p-4">

										<h3 class="mb-4" style="color: {{ '#330044' }};">Plataforma Completa!</h3>
										<p class="mb-4">
											Proteja seu negócio dos riscos do mercado de veículos usados. Tenha uma plataforma completa com os relatórios de PLACA e CHASSI mais detalhados e fáceis de usar.
										</p>
										<div class="d-flex">
										<div class="ml-auto">
											<a href="#" class="btn btn-cadastro-hotsite btn-success px-4" data-dismiss="modal">Continuar</a>
										</div>
										</div>
									</div>
								</div>

							</div>

						</div>

					</div>
					</div>

			</div>

			<div class="col-md-3 col-xs-12 d-flex align-items-stretch mt-4 mt-xl-0 mr-2">
				<!-- coluna -->
				<div class="service-icon-box">
					<!-- icone -->
					<div class="icon">
						<svg
							width="36"
							height="36"
							fill="{{ '#330044' }}"
							xmlns="http://www.w3.org/2000/svg"
							fill-rule="evenodd"
							clip-rule="evenodd"
							viewbox="0 0 24 24"
						>
							<path d="M10.052 19.001l.051.002.051.003.05.004.051.006.05.007.049.008.049.01.049.01.048.012.048.013.047.014.046.015.047.016.045.018.045.018.045.02.044.02.043.022.043.022.043.024.041.025.041.025.04.027.04.027.039.028.038.03.037.03.037.031.036.032.035.032.034.034.034.034.032.035.032.036.031.037.03.037.03.038.028.039.027.04.027.04.025.041.025.041.024.043.022.042.022.044.02.044.02.045.018.045.018.045.016.047.015.046.014.047.013.048.012.048.01.049.01.049.008.049.007.05.006.051.004.05.003.051.002.051.001.052v1h1v2h-13v-2h1v-1l.001-.052.002-.051.003-.051.004-.05.006-.051.007-.05.008-.049.01-.049.01-.049.012-.048.013-.048.014-.047.015-.046.016-.047.018-.045.018-.045.02-.045.02-.044.022-.044.022-.042.024-.043.025-.041.025-.041.027-.04.027-.04.028-.039.03-.038.03-.037.031-.037.032-.036.032-.035.034-.034.034-.034.035-.032.036-.032.037-.031.037-.03.038-.03.039-.028.04-.027.04-.027.041-.025.041-.025.043-.024.043-.022.043-.022.044-.02.045-.02.045-.018.045-.018.047-.016.046-.015.047-.014.048-.013.048-.012.049-.01.049-.01.049-.008.05-.007.051-.006.05-.004.051-.003.051-.002.052-.001h7l.052.001zm-7.039 1.999h-.013v1h7v-1h-6.987zm9.356-20.999l.05.001.05.003.049.005.049.005.049.007.049.007.048.009.048.011.048.011.047.012.047.014.046.014.046.016.046.017.045.018.045.019.044.021.044.021.043.022.043.024.042.025.041.025.041.027.041.028.039.029.039.029.039.031.038.032.037.033.036.034.036.035 4.949 4.949.035.036.034.036.033.038.032.037.031.039.03.039.029.04.027.04.027.042.026.041.024.042.024.043.022.043.022.044.02.044.019.045.018.045.017.046.016.046.015.046.013.047.012.047.012.048.01.048.009.048.007.049.007.048.005.049.005.05.003.049.001.05.001.05-.001.061-.003.061-.004.06-.006.06-.008.059-.01.058-.011.058-.013.057-.015.056-.016.056-.018.055-.019.054-.02.053-.023.053-.023.051-.025.051-.027.05-.027.05-.029.048-.031.047-.031.046-.033.046-.034.044-.036.044-.036.042-.038.041-.038.041-.04.039-.041.038-.041.037-.043.035-.044.035-.044.033-.046.032-.046.031-.047.029-.049.029-.048.027-.05.025-.05.024-.051.023-.052.021-.052.02-.053.019-.054.017-.054.016-.054.014-.056.012-.055.011-.056.009-.057.008-.057.006-.057.005-.057.003-.058.001-.058-.001-.059-.002-.058-.004-.059-.006-.059-.008-.059-.009-.059-.012-.06-.013-.059-.015-1.219 1.22 2.099 1.947 1.696 1.57 1.33 1.229 1.003.924.714.656.463.424.249.227.075.068.05.051.049.052.047.053.045.054.045.055.042.056.041.056.04.057.038.058.037.059.035.059.034.06.032.061.031.061.028.062.028.063.026.063.024.064.023.064.02.065.02.065.018.066.016.066.014.067.013.067.011.067.009.068.008.067.006.069.005.068.002.069.001.069-.001.073-.003.072-.005.072-.006.071-.009.071-.011.07-.012.07-.014.069-.016.069-.017.068-.02.068-.021.066-.022.067-.025.065-.026.065-.027.064-.029.063-.031.062-.032.061-.034.061-.035.06-.036.059-.038.057-.04.057-.041.056-.042.055-.043.054-.045.052-.046.052-.047.05-.049.05-.05.048-.05.047-.052.045-.054.045-.054.043-.055.042-.057.04-.057.039-.058.038-.06.036-.06.035-.061.034-.063.031-.063.031-.063.028-.065.028-.066.025-.066.024-.067.023-.068.02-.068.019-.069.017-.07.016-.071.013-.071.012-.071.01-.073.008-.072.006-.074.005-.073.002h-.074l-.075-.001-.075-.004-.063-.005-.062-.006-.062-.007-.062-.009-.062-.011-.061-.012-.061-.013-.061-.015-.06-.017-.06-.018-.06-.019-.059-.021-.059-.022-.059-.024-.058-.025-.058-.026-.057-.028-.057-.03-.056-.031-.056-.032-.056-.033-.055-.035-.054-.037-.054-.037-.054-.039-.053-.041-.052-.042-.052-.043-.051-.044-.051-.046-.05-.047-.049-.049-.042-.044-.075-.082-.241-.269-.349-.392-.437-.495-1.071-1.216-1.213-1.38-1.213-1.381-1.068-1.218-1.133-1.292-1.313 1.312.015.061.013.061.011.061.009.06.007.061.006.06.003.059.002.06.001.059-.002.059-.003.058-.005.058-.006.058-.009.057-.009.056-.012.056-.012.056-.015.055-.016.054-.017.054-.019.053-.02.052-.022.052-.023.051-.025.05-.026.049-.027.049-.028.048-.03.046-.031.047-.032.045-.034.044-.035.043-.035.042-.037.042-.039.04-.039.039-.04.038-.041.037-.043.036-.043.035-.045.033-.045.033-.046.031-.047.029-.048.029-.049.027-.05.026-.051.024-.051.023-.053.022-.053.02-.053.019-.055.017-.055.016-.056.014-.056.013-.057.011-.058.009-.058.008-.059.006-.059.004-.06.003-.06.001-.05-.001-.05-.002-.05-.003-.05-.004-.049-.005-.049-.007-.048-.008-.049-.009-.048-.01-.047-.011-.047-.013-.047-.014-.047-.014-.046-.016-.045-.017-.045-.018-.045-.019-.044-.021-.044-.021-.043-.022-.043-.024-.042-.025-.041-.025-.041-.027-.041-.028-.039-.029-.04-.029-.038-.031-.038-.032-.037-.033-.036-.034-.036-.035-4.949-4.948-.004-.004-.035-.036-.033-.036-.033-.038-.032-.038-.031-.038-.029-.039-.029-.04-.028-.041-.026-.041-.026-.041-.024-.042-.023-.043-.023-.043-.021-.043-.02-.045-.019-.044-.018-.045-.017-.046-.015-.045-.015-.047-.013-.046-.013-.047-.011-.048-.01-.047-.009-.048-.008-.049-.006-.048-.005-.049-.005-.049-.003-.05-.001-.049-.001-.05.001-.05.001-.049.003-.05.004-.049.006-.049.006-.049.008-.048.009-.048.01-.048.011-.047.012-.047.014-.047.014-.047.016-.046.017-.045.018-.045.019-.045.02-.044.021-.044.023-.043.023-.043.025-.042.025-.042.027-.041.028-.04.029-.04.029-.04.031-.038.032-.038.033-.038.034-.036.035-.036.051-.049.052-.047.054-.045.054-.042.055-.041.056-.038.058-.036.058-.034.058-.032.06-.029.06-.028.061-.025.061-.023.062-.021.062-.019.063-.017.063-.015.063-.013.063-.01.064-.009.064-.006.063-.005.064-.002.064-.001.063.002.064.004.063.005.063.008.063.009.062.012.062.013.061.016 5.679-5.679-.016-.062-.013-.063-.012-.063-.01-.063-.007-.064-.006-.064-.003-.064-.002-.064.001-.064.003-.064.004-.064.007-.063.009-.064.011-.063.013-.063.015-.063.017-.063.019-.062.021-.061.023-.061.025-.06.028-.06.029-.059.032-.058.033-.057.036-.057.038-.055.04-.055.042-.053.044-.053.046-.051.048-.05.036-.035.036-.034.037-.033.038-.032.039-.031.039-.03.04-.029.04-.028.041-.027.042-.025.042-.025.043-.024.043-.022.044-.022.044-.02.045-.019.045-.018.046-.017.046-.016.046-.015.047-.013.047-.013.048-.011.048-.01.048-.009.049-.008.049-.007.049-.005.049-.005.05-.003.05-.001.05-.001.05.001zm-5.349 8.712l3.536 3.537 1.773-1.774 1.107 1.211 2.532 2.775 1.432 1.57 1.345 1.478.594.654.518.571.421.466.308.343.028.032.029.032.031.031.033.029.034.029.035.027.037.026.038.024.038.023.04.02.04.018.041.016.041.013.042.01.021.004.021.003.021.002.021.002.027.001.026.001.025-.001.025-.001.024-.003.024-.002.024-.004.023-.004.044-.011.041-.012.04-.015.037-.016.035-.017.033-.018.03-.019.029-.019.025-.019.024-.019.021-.018.018-.017.029-.028.027-.029.026-.031.023-.031.023-.032.02-.033.018-.034.017-.035.015-.035.013-.035.011-.037.009-.036.008-.037.005-.037.003-.038.001-.037-.001-.038-.003-.039-.005-.038-.007-.037-.009-.037-.011-.037-.014-.037-.015-.036-.016-.035-.019-.035-.021-.034-.022-.034-.025-.034-.026-.032-.028-.033-.03-.031-.078-.07-.041-.034-.024-.02-.016-.015-.189-.174-.217-.202-.242-.226-.265-.25-.591-.559-.656-.625-.705-.674-.735-.705-.748-.719-.744-.717-1.405-1.356-1.177-1.138-1.11-1.076 1.634-1.635-3.537-3.536-3.882 3.884zm-1.415 1.415l-1.411.003-.001.001 4.947 4.946.001-1.413-3.535-3.537h-.001zm6.714-6.716l-.002.003 3.536 3.536.002-.002 1.412-.002-4.948-4.948v1.413z"/>
						</svg>
					</div>
					<h4>Jurídico</h4>
					<p>
						Informações de processos de diversos tribunais. Total de processos, total de
						<small {!! (is_object($hotsite) && !empty('#330044')) ? 'style="color: ' . '#330044' . '!important;"' : '' !!}>
							<button class="read-more" data-toggle="modal" data-target="#modal-hotsite-juridico">... [Ler Mais]</button>
						</small>
					</p>
				</div>

				<!-- modal -->
				<div class="modal fade" id="modal-hotsite-juridico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

					<!-- inicio modal -->
					<div class="modal-dialog" role="document">

						<div class="modal-content" style="background-color: transparent !important; box-shadow: none !important;">

						<!-- cabeçalho modal -->
							<div class="modal-header m-0 p-0" style="height: 0px;">

								<!-- <h5 class="modal-title" id="exampleModalLabel">Crédito CPF e CNPJ</h5> -->

							</div>

							<!-- corpo modal -->
							<div class="modal-body">

								<!-- botão fechar modal -->
								<button type="button" class="close fw-bold p-2" data-dismiss="modal" aria-label="Close">

									<span aria-hidden="true" class="close-btn">&times;</span>

								</button>

								<!-- content -->
								<div class="d-block main-content">
									<img src="img/note1.png" alt="Image {{ $tituloSite }} " class="img-fluid">
									<div class="content-text p-4">

										<h3 class="mb-4" style="color: {{ '#330044' }};">Informação é Poder!</h3>
										<p class="mb-4">
											Informações de processos de diversos tribunais. Total de processos, total de processos por autor, total de processos por réu, lista de detalhes de cada processo aonde a pessoa aparece.
										</p>
										<div class="d-flex">
											<div class="ml-auto">
												<a href="#" class="btn btn-cadastro-hotsite btn-success px-4" data-dismiss="modal">Continuar</a>
											</div>
										</div>
									</div>
								</div>

							</div>

						</div>

					</div>
					</div>

			</div>

			<div class="col-md-3 col-xs-12 d-flex align-items-stretch mt-4 mt-xl-0 mr-2">
				<!-- coluna -->
				<div class="service-icon-box">
					<!-- icone -->
					<div class="icon">
						<svg
							width="36"
							height="36"
							fill="{{ '#330044' }}"
							xmlns="http://www.w3.org/2000/svg"
							fill-rule="evenodd"
							clip-rule="evenodd"
							viewbox="0 0 24 24"
						>
							<path d="M0 15.562l1.932-7.562 3.526.891-1.974 7.562-3.484-.891zm18.415.902c.125.287.187.598.155.91-.079.829-.698 1.448-1.457 1.602-.254.533-.733.887-1.285 1.002-.244.512-.722.89-1.296 1.01-.325.668-.97 1.012-1.674 1.012-.516 0-1.004-.183-1.356-.538-.928.404-1.902-.048-2.232-.863-.596-.068-1.107-.452-1.332-.997-.599-.071-1.114-.458-1.34-1.003-1.188-.138-1.848-1.44-1.198-2.495-.233-.058-.494-.104-.751-.152l.383-1.464c.524.1 1.01.219 1.453.358.913-.655 2.151-.295 2.549.679.608.069 1.116.464 1.334 1 .598.068 1.111.451 1.335.998.738.082 1.36.653 1.449 1.434l.002.225.45.402c.252.291.68.324.96.106.286-.223.324-.624.075-.909l-1.457-1.279c-.157-.139.052-.38.213-.241l1.491 1.308c.257.294.692.332.969.114.285-.22.316-.631.068-.916l-1.896-1.628c-.162-.135.048-.38.208-.242l1.944 1.669c.248.282.678.335.967.114.283-.22.349-.606-.002-.995-1.24-1.112-2.671-2.405-4.143-3.796-.355.488-2.176 1.502-3.279 1.502s-1.779-.675-1.96-1.343c-.157-.582.051-1.139.531-1.419.535-.313 1.055-.762 1.562-1.269-.789-.586-1.203-.398-2.067.013-.503.238-1.1.521-1.854.647l.438-1.67c1.327-.488 2.549-1.608 4.505-.083l.491-.552c.395-.447.911-.715 1.503-.715.436 0 .91.161 1.408.417 1.518.793 2.293 1.256 3.443 1.294l.394 1.508h-.008c-1.797.033-2.676-.508-4.516-1.47-.513-.263-.859-.318-1.1-.044-.984 1.12-2.031 2.309-3.192 3.063.573.458 2.019-.458 2.592-.92.25-.201.638-.468 1.128-.468.553 0 .955.331 1.244.619.68.68 2.57 2.389 3.407 3.142.434-.242.868-.435 1.311-.605l.383 1.467c-.319.134-.633.286-.95.461zm-11.037.875l.609-.747c.25-.3.215-.722-.08-.944-.296-.223-.737-.158-.986.14l-.61.749c-.251.298-.214.721.08.942s.737.159.987-.14zm1.328 1.006l.617-.755c.248-.297.213-.722-.082-.943-.294-.221-.734-.159-.984.142l-.616.754c-.251.3-.21.712.086.936.297.222.729.167.979-.134zm1.343.992l.608-.747c.251-.299.215-.721-.08-.944-.296-.222-.735-.157-.986.142l-.609.745c-.251.3-.213.724.082.945.293.221.734.16.985-.141zm1.865-.691c-.294-.224-.735-.159-.987.139l-.612.751c-.249.299-.213.722.082.943.295.221.735.16.986-.142l.61-.75c.253-.297.217-.72-.079-.941zm1.427 1.134l-.24-.212c-.063.239-.173.464-.332.65l-.358.441c.133.106.288.176.448.176.149 0 .295-.046.415-.138.284-.223.317-.632.067-.917zm5.201-10.889l1.974 7.562 3.484-.891-1.932-7.562-3.526.891zm-7.959-6.891l-.986.174.521 2.954.984-.174-.519-2.954zm3.82.174l-.985-.174-.521 2.954.985.174.521-2.954zm3.597 1.228l-.867-.5-1.5 2.598.867.5 1.5-2.598zm-11.133-.5l-.867.5 1.5 2.598.867-.5-1.5-2.598z"/>
						</svg>
					</div>
					<h4>Negociação</h4>
					<p>
						Cadastre seus devedores e enviaremos carta extrajudicial
						<small {!! (is_object($hotsite) && !empty('#330044')) ? 'style="color: ' . '#330044' . '!important;"' : '' !!}>
							<button class="read-more" data-toggle="modal" data-target="#modal-hotsite-negociacao">... [Ler Mais]</button>
						</small>
					</p>
				</div>

				<!-- modal -->
				<div class="modal fade" id="modal-hotsite-negociacao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

					<!-- inicio modal -->
					<div class="modal-dialog" role="document">

						<div class="modal-content" style="background-color: transparent !important; box-shadow: none !important;">

						<!-- cabeçalho modal -->
							<div class="modal-header m-0 p-0" style="height: 0px;">

								<!-- <h5 class="modal-title" id="exampleModalLabel">Crédito CPF e CNPJ</h5> -->

							</div>

							<!-- corpo modal -->
							<div class="modal-body">

								<!-- botão fechar modal -->
								<button type="button" class="close fw-bold p-2" data-dismiss="modal" aria-label="Close">

									<span aria-hidden="true" class="close-btn">&times;</span>

								</button>

								<!-- content -->
								<div class="d-block main-content">
									<img src="img/note1.png" alt="Image {{ $tituloSite }} " class="img-fluid">
									<div class="content-text p-4">

										<h3 class="mb-4" style="color: {{ '#330044' }};">Tudo automatizado!</h3>
										<p class="mb-4">
											Cadastre seus devedores e enviaremos carta extrajudicial para que possa fazer a negociação junto ao seu cliente.
										</p>
										<div class="d-flex">
										<div class="ml-auto">
											<a href="#" class="btn btn-cadastro-hotsite btn-success px-4" data-dismiss="modal">Continuar</a>
										</div>
										</div>
									</div>
								</div>

							</div>

						</div>

					</div>
					</div>

			</div>

			</div>

		</div>
		</section><!-- End section-servicos Section -->

		<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
		<!-- &&&&&&&&&&&&&&&&&&&&&&&  Fim da seção Serviços  &&&&&&&&&&&&&&&&&&&&&&&& -->
		<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->


		<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
		<!-- &&&&&&&&&&&&&&&&&&&&&  Seção Hotsite Como Funciona  &&&&&&&&&&&&&&&&&&&& -->
		<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->


		<section id="section-hotsite-passo-a-passo" class="section-hotsite-passo-a-passo">
			<div class="container">

				<div class="m-5 pb-5">
					<h1 class="text-center my-3">Como Funciona?</h1>
					<h2 class="title text-center pb-4">Veja como é simples iniciar na nossa plataforma</h2>
				</div>

				<div class="row">

					<div class="col-lg-4 col-md-6 d-flex align-items-stretch" >
						<div class="card">
						<!-- <img src="{{ asset('hotsite/img/teste.svg') }}" border="0" alt="Negociar Dívida Online" class="mb-3" /> -->
							<!-- PADRÃO SVG -->
							<svg
								class="svg-pattern-card"
								xmlns="http://www.w3.org/2000/svg"
								version="1.1"
								xmlns:xlink="http://www.w3.org/1999/xlink"
								xmlns:svgjs="http://svgjs.com/svgjs"
								width="1440"
								height="560"
								preserveAspectRatio="none"
								viewBox="0 0 1440 560"
							>
								<g mask="url(&quot;#SvgjsMask1025&quot;)" fill="none">
									<rect
										width="1440"
										height="560"
										x="0"
										y="0"
										fill="{{ '#330044' . 'dd' }}"
									>
									</rect>
										<path d="M1038.2688375278083 432.83106637088656L1023.276033877642 539.5104075169307 1144.9481786738525 447.82387002105276z" fill="{{ '#330044' . 'fa' }}" class="triangle-float3"></path>
										<path d="M1536.11100985947 472.96863966455453L1475.6834714480144 343.38136535183077 1346.0961971352906 403.80890376328637 1406.5237355467461 533.3961780760102z" fill="{{ '#330044' . 'fa' }}" class="triangle-float2"></path>
										<path d="M258.56970829088453 384.70161824341994L313.7810976792611 354.0974453621595 240.2691436631821 286.5824477202249z" fill="{{ '#330044' . 'fa' }}" class="triangle-float3"></path>
										<path d="M948.484,177.088C985.584,178.1,1018.226,152.499,1034.808,119.295C1049.822,89.23,1040.211,55.295,1024.01,25.852C1007.022,-5.02,983.714,-36.891,948.484,-37.582C912.447,-38.288,884.162,-9.252,867.65,22.787C852.586,52.016,854.693,85.669,869.952,114.797C886.57,146.519,912.686,176.111,948.484,177.088" fill="{{ '#330044' . 'fa' }}" class="triangle-float1"></path>
										<path d="M1162.5723945190648 535.2883110715809L1184.1703008787103 412.8004973923178 1061.6824871994472 391.20259103267233 1040.0845808398017 513.6904047119355z" fill="{{ '#330044' . 'fa' }}" class="triangle-float3"></path>
										<path d="M262.9270555701472 154.8715109846926L319.73779879722514 21.033787148975335 185.90007496150784-35.77695607810256 129.08933173442995 98.06076775761471z" fill="{{ '#330044' . 'fa' }}" class="triangle-float1"></path>
								</g>
								<defs>
									<mask id="SvgjsMask1025">
										<rect width="1440" height="560" fill="#ffffff"></rect>
									</mask>
									<style>
										@keyframes float1 {
											0%{transform: translate(0, 0)}
											50%{transform: translate(-10px, 0)}
											100%{transform: translate(0, 0)}
										}

										.triangle-float1 {
											animation: float1 5s infinite;
										}

										@keyframes float2 {
											0%{transform: translate(0, 0)}
											50%{transform: translate(-5px, -5px)}
											100%{transform: translate(0, 0)}
										}

										.triangle-float2 {
											animation: float2 4s infinite;
										}

										@keyframes float3 {
											0%{transform: translate(0, 0)}
											50%{transform: translate(0, -10px)}
											100%{transform: translate(0, 0)}
										}

										.triangle-float3 {
											animation: float3 6s infinite;
										}
									</style>
								</defs>
							</svg>
							<!-- PADRÃO SVG -->
							<div class="card-icon">
								<svg
									width="64"
									height="64"
									xmlns="http://www.w3.org/2000/svg"
									fill="#fff"
									fill-rule="evenodd"
									clip-rule="evenodd"
									viewbox="0 0 24 24"
								>
									<path d="M19.5 15c-2.483 0-4.5 2.015-4.5 4.5s2.017 4.5 4.5 4.5 4.5-2.015 4.5-4.5-2.017-4.5-4.5-4.5zm2.5 5h-2v2h-1v-2h-2v-1h2v-2h1v2h2v1zm-7.18 4h-14.815l-.005-1.241c0-2.52.199-3.975 3.178-4.663 3.365-.777 6.688-1.473 5.09-4.418-4.733-8.729-1.35-13.678 3.732-13.678 6.751 0 7.506 7.595 3.64 13.679-1.292 2.031-2.64 3.63-2.64 5.821 0 1.747.696 3.331 1.82 4.5z"/>
								</svg>
							</div>
							<div class="card-body">
								<h5 class="card-title text-center">Faça seu cadastro gratuitamente</h5>
								<p class="card-text text-center">Basta prfancher todos os campos solicitados. É rápido é fácil é seguro!</p>
								<a href="/cadastro" class="btn-cadastro-hotsite btn-success p-3 w-100 text-center fw-bold">Acessar com Segurança</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 d-flex align-items-stretch" >
						<div class="card">
							<!-- <img src="{{ asset('hotsite/img/negociar.jpg') }}" border="0" alt="Negociar Dívida Online" class="mb-3" /> -->
							<!-- PADRÃO SVG -->
							<svg
								class="svg-pattern-card"
								xmlns="http://www.w3.org/2000/svg"
								version="1.1"
								xmlns:xlink="http://www.w3.org/1999/xlink"
								xmlns:svgjs="http://svgjs.com/svgjs"
								width="1440"
								height="560"
								preserveAspectRatio="none"
								viewBox="0 0 1440 560"
							>
								<g mask="url(&quot;#SvgjsMask1025&quot;)" fill="none">
									<rect
										width="1440"
										height="560"
										x="0"
										y="0"
										fill="{{ '#330044' . 'dd' }}"
										>
									</rect>
									<path d="M1038.2688375278083 432.83106637088656L1023.276033877642 539.5104075169307 1144.9481786738525 447.82387002105276z" fill="{{ '#330044' . 'fa' }}" class="triangle-float3"></path>
									<path d="M1536.11100985947 472.96863966455453L1475.6834714480144 343.38136535183077 1346.0961971352906 403.80890376328637 1406.5237355467461 533.3961780760102z" fill="{{ '#330044' . 'fa' }}" class="triangle-float2"></path>
									<path d="M258.56970829088453 384.70161824341994L313.7810976792611 354.0974453621595 240.2691436631821 286.5824477202249z" fill="{{ '#330044' . 'fa' }}" class="triangle-float3"></path>
									<path d="M948.484,177.088C985.584,178.1,1018.226,152.499,1034.808,119.295C1049.822,89.23,1040.211,55.295,1024.01,25.852C1007.022,-5.02,983.714,-36.891,948.484,-37.582C912.447,-38.288,884.162,-9.252,867.65,22.787C852.586,52.016,854.693,85.669,869.952,114.797C886.57,146.519,912.686,176.111,948.484,177.088" fill="{{ '#330044' . 'fa' }}" class="triangle-float1"></path>
									<path d="M1162.5723945190648 535.2883110715809L1184.1703008787103 412.8004973923178 1061.6824871994472 391.20259103267233 1040.0845808398017 513.6904047119355z" fill="{{ '#330044' . 'fa' }}" class="triangle-float3"></path>
									<path d="M262.9270555701472 154.8715109846926L319.73779879722514 21.033787148975335 185.90007496150784-35.77695607810256 129.08933173442995 98.06076775761471z" fill="{{ '#330044' . 'fa' }}" class="triangle-float1"></path>
								</g>
								<defs>
									<mask id="SvgjsMask1025">
										<rect width="1440" height="560" fill="#ffffff"></rect>
									</mask>
									<style>
										@keyframes float1 {
											0%{transform: translate(0, 0)}
											50%{transform: translate(-10px, 0)}
											100%{transform: translate(0, 0)}
										}

										.triangle-float1 {
											animation: float1 5s infinite;
										}

										@keyframes float2 {
											0%{transform: translate(0, 0)}
											50%{transform: translate(-5px, -5px)}
											100%{transform: translate(0, 0)}
										}

										.triangle-float2 {
											animation: float2 4s infinite;
										}

										@keyframes float3 {
											0%{transform: translate(0, 0)}
											50%{transform: translate(0, -10px)}
											100%{transform: translate(0, 0)}
										}

										.triangle-float3 {
											animation: float3 6s infinite;
										}
									</style>
								</defs>
							</svg>
							<!-- PADRÃO SVG -->
							<div class="card-icon">
								<svg
									width="64"
									height="64"
									xmlns="http://www.w3.org/2000/svg"
									fill="#fff"
									fill-rule="evenodd"
									clip-rule="evenodd"
									viewbox="0 0 24 24"
								>
									<path d="M0 8v-2c0-1.104.896-2 2-2h18c1.104 0 2 .896 2 2v2h-22zm24 7.5c0 2.485-2.015 4.5-4.5 4.5s-4.5-2.015-4.5-4.5 2.015-4.5 4.5-4.5 4.5 2.015 4.5 4.5zm-2.156-.882l-.696-.696-2.116 2.169-.991-.94-.696.697 1.688 1.637 2.811-2.867zm-8.844.882c0 1.747.696 3.331 1.82 4.5h-12.82c-1.104 0-2-.896-2-2v-7h14.82c-1.124 1.169-1.82 2.753-1.82 4.5zm-5 .5h-5v1h5v-1zm3-2h-8v1h8v-1z"/>
								</svg>
							</div>
							<div class="card-body">
								<h5 class="card-title text-center">Insira créditos em sua conta</h5>
								<p class="card-text text-center">Os créditos ficarão sempre disponíveis até que você os utilize.</p>
								<a href="/cadastro" class="btn-cadastro-hotsite btn-success p-3 w-100 text-center fw-bold">Acessar com Segurança</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 d-flex align-items-stretch" >
						<div class="card">
							<!-- <img src="{{ asset('hotsite/img/negociar.jpg') }}" border="0" alt="Negociar Dívida Online" class="mb-3" /> -->
							<!-- PADRÃO SVG -->
							<svg
								class="svg-pattern-card"
								xmlns="http://www.w3.org/2000/svg"
								version="1.1"
								xmlns:xlink="http://www.w3.org/1999/xlink"
								xmlns:svgjs="http://svgjs.com/svgjs"
								width="1440"
								height="560"
								preserveAspectRatio="none"
								viewBox="0 0 1440 560"
							>
								<g mask="url(&quot;#SvgjsMask1025&quot;)" fill="none">
									<rect
										width="1440"
										height="560"
										x="0"
										y="0"
										fill="{{ '#330044' . 'dd' }}"
									>
									</rect>
									<path d="M1038.2688375278083 432.83106637088656L1023.276033877642 539.5104075169307 1144.9481786738525 447.82387002105276z" fill="{{ '#330044' . 'fa' }}" class="triangle-float3"></path>
									<path d="M1536.11100985947 472.96863966455453L1475.6834714480144 343.38136535183077 1346.0961971352906 403.80890376328637 1406.5237355467461 533.3961780760102z" fill="{{ '#330044' . 'fa' }}" class="triangle-float2"></path>
									<path d="M258.56970829088453 384.70161824341994L313.7810976792611 354.0974453621595 240.2691436631821 286.5824477202249z" fill="{{ '#330044' . 'fa' }}" class="triangle-float3"></path>
									<path d="M948.484,177.088C985.584,178.1,1018.226,152.499,1034.808,119.295C1049.822,89.23,1040.211,55.295,1024.01,25.852C1007.022,-5.02,983.714,-36.891,948.484,-37.582C912.447,-38.288,884.162,-9.252,867.65,22.787C852.586,52.016,854.693,85.669,869.952,114.797C886.57,146.519,912.686,176.111,948.484,177.088" fill="{{ '#330044' . 'fa' }}" class="triangle-float1"></path>
									<path d="M1162.5723945190648 535.2883110715809L1184.1703008787103 412.8004973923178 1061.6824871994472 391.20259103267233 1040.0845808398017 513.6904047119355z" fill="{{ '#330044' . 'fa' }}" class="triangle-float3"></path>
									<path d="M262.9270555701472 154.8715109846926L319.73779879722514 21.033787148975335 185.90007496150784-35.77695607810256 129.08933173442995 98.06076775761471z" fill="{{ '#330044' . 'fa' }}" class="triangle-float1"></path>
								</g>
								<defs>
									<mask id="SvgjsMask1025">
										<rect width="1440" height="560" fill="#ffffff"></rect>
									</mask>
									<style>
										@keyframes float1 {
											0%{transform: translate(0, 0)}
											50%{transform: translate(-10px, 0)}
											100%{transform: translate(0, 0)}
										}

										.triangle-float1 {
											animation: float1 5s infinite;
										}

										@keyframes float2 {
											0%{transform: translate(0, 0)}
											50%{transform: translate(-5px, -5px)}
											100%{transform: translate(0, 0)}
										}

										.triangle-float2 {
											animation: float2 4s infinite;
										}

										@keyframes float3 {
											0%{transform: translate(0, 0)}
											50%{transform: translate(0, -10px)}
											100%{transform: translate(0, 0)}
										}

										.triangle-float3 {
											animation: float3 6s infinite;
										}
									</style>
								</defs>
							</svg>
							<!-- PADRÃO SVG -->
							<div class="card-icon">
								<svg
									width="64"
									height="64"
									xmlns="http://www.w3.org/2000/svg"
									fill="#fff"
									fill-rule="evenodd"
									clip-rule="evenodd"
									viewbox="0 0 24 24"
								>
									<path d="M23.111 20.058l-4.977-4.977c.965-1.52 1.523-3.322 1.523-5.251 0-5.42-4.409-9.83-9.829-9.83-5.42 0-9.828 4.41-9.828 9.83s4.408 9.83 9.829 9.83c1.834 0 3.552-.505 5.022-1.383l5.021 5.021c2.144 2.141 5.384-1.096 3.239-3.24zm-20.064-10.228c0-3.739 3.043-6.782 6.782-6.782s6.782 3.042 6.782 6.782-3.043 6.782-6.782 6.782-6.782-3.043-6.782-6.782zm2.01-1.764c1.984-4.599 8.664-4.066 9.922.749-2.534-2.974-6.993-3.294-9.922-.749z"/>
								</svg>
							</div>
							<div class="card-body">
								<h5 class="card-title text-center">Agora é só realizar sua consulta!</h5>
								<p class="card-text text-center">Clique no tipo de consulta, digite o CPF ou CNPJ que deseja consultar e pronto!</p>
								<a href="/cadastro" class="btn-cadastro-hotsite btn-success p-3 w-100 text-center fw-bold">Acessar com Segurança</a>
							</div>
						</div>
					</div>
				</div>

			</div>
			</section><!-- End About Boxes Section -->

			<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
			<!-- &&&&&&&&&&&&&&&&&  Fim da Seção Hotsite Como Funciona  &&&&&&&&&&&&&&&&& -->
			<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->


			<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
			<!-- &&&&&&&&&&&&&&&&&&&&&&&&&  Seção Busca Divida  &&&&&&&&&&&&&&&&&&&&&&&&& -->
			<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->


			<section id="section-busca-divida" class="section-busca-divida">
				<div class="section-busca-divida">

						<div class="row  justify-content-center">
							<div class="col-lg-6">
								<h3>Procurar, negociar, quitar...
									<span style="background-color: {{!! '#330044' !!}}">
										Simples assim!
									</span>
								</h3>
								<p>As melhores ofertas e condições para negociar e quitar suas dívidas.</p>
							</div>
						</div>

						<div class="row busca-form justify-content-center">
							<div class="col-lg-6">
								<form method="GET" action="">
									{{ csrf_field() }}
									<input class="form-control" type="text" placeholder="Insira o CPF ou CNPJ" id="dividaCpfCnpj" name="cpf_cnpj" value="CPF ou CNPJ">
									<input class="btn-success" type="submit" id="divida-btn" value="Continuar">
								</form>
							</div>
						</div>

					</div>
				</div>

			</section>

			<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
			<!-- &&&&&&&&&&&&&&&&&&&&&& Fim da Seção Busca Divida  &&&&&&&&&&&&&&&&&&&&&& -->
			<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->


			<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
			<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&  Seção Produtos  &&&&&&&&&&&&&&&&&&&&&&&&&& -->
			<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->


			<section id="section-consultas" class="gray-f section-consultas bloco-produtos">

				<div class="container">

					<div class="section-title">
						<h1 class="text-center">Nossos Produtos</h1>
						<h2 class="title text-center pb-4">Conheça um pouco mais do que temos a oferecer</h2>
					</div>

					<div class="row m-0 py-4">

						<div class="col-md-12 col-xs-12">

							<div class="row m-2">
								<div class="col-lg-6 col-md-6">
									<div class="hotsite-box">
										<svg
											width="24"
											height="24"
											class="svg-header"
											xmlns="http://www.w3.org/2000/svg"
											fill="#fff"
											fill-rule="evenodd"
											clip-rule="evenodd"
											viewbox="0 0 24 24"
										>
											<path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4.393 7.5l-5.643 5.784-2.644-2.506-1.856 1.858 4.5 4.364 7.5-7.643-1.857-1.857z"/>
										</svg>
										<h3>A Maior Plataforma de Consultas</h3>
										<p>Em nossa plataforma você terá os melhores produtos com informações confiáveis e de qualidade para que você possa fazer uma negociação segura, evitando calotes e problemas futuros.</p>
									</div>
								</div>

								<div class="col-lg-6 col-md-6 mt-5 mt-md-0">
									<div class="hotsite-box">
										<svg
											width="24"
											height="24"
											class="svg-header"
											xmlns="http://www.w3.org/2000/svg"
											fill="#fff"
											fill-rule="evenodd"
											clip-rule="evenodd"
											viewbox="0 0 24 24"
										>
											<path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4.393 7.5l-5.643 5.784-2.644-2.506-1.856 1.858 4.5 4.364 7.5-7.643-1.857-1.857z"/>
										</svg>
										<h3>Como funciona a consulta?</h3>
										<p>Em poucos passos, você já tem acesso ao relatório completo, com todas as pendências financeiras de quem você quer consultar.</p>
									</div>
								</div>
							</div>

						</div>

					</div>

				</div>

			</section>

			<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
			<!-- &&&&&&&&&&&&&&&&&&&&&&&&  Fim da Seção Produtos  &&&&&&&&&&&&&&&&&&&&&&& -->
			<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->

			<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
			<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&$$$  Seção CTA  &&&&&&&&&&&&&&&&&&&&&&&&&&$$ -->
			<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->


			<section id="section-cta" class="section-cta box-banner py-5">

				<div class="container">

					<div class="section-title py-5">
						<h1 class="text-center my-3">Venha você também para {{ $tituloSite }}</h1>
					</div>

					<div class="row m-2 text-left">

						<div class="col-lg-4 col-md-6">
							<div class="hotsite-box">
								<svg
									width="12"
									height="12"
									class="svg-header"
									xmlns="http://www.w3.org/2000/svg"
									fill="#fff"
									fill-rule="evenodd"
									clip-rule="evenodd"
									viewbox="-3 -3 32 32"
								>
									<path d="M19.619 21.671c-5.038 1.227-8.711-1.861-8.711-5.167 0-3.175 3.11-5.467 6.546-5.467 3.457 0 6.546 2.309 6.546 5.467 0 1.12-.403 2.22-1.117 3.073-.029 1 .558 2.435 1.088 3.479-1.419-.257-3.438-.824-4.352-1.385zm-10.711-5.167c0-4.117 3.834-7.467 8.546-7.467.886 0 1.74.119 2.544.338-.021-4.834-4.761-8.319-9.998-8.319-5.281 0-10 3.527-10 8.352 0 1.71.615 3.391 1.705 4.695.047 1.527-.851 3.718-1.661 5.313 2.168-.391 5.252-1.258 6.649-2.115.803.196 1.576.304 2.328.363-.067-.379-.113-.765-.113-1.16z"/>
								</svg>
									<h3>Negocie com inadimplentes</h3>
									<!-- primeiro ponto -->
									<p class="d-flex text-left">
										<svg
											width="24"
											height="24"
											xmlns="http://www.w3.org/2000/svg"
											fill="{{ '#330044' }}"
											fill-rule="evenodd"
											clip-rule="evenodd"
											viewbox="-3 -3 32 32"
										>
											<path d="M24 1v16.981h-13l-7 5.02v-5.02h-4v-16.981h24zm-6 5.285l-6.622 7.715-4.378-3.852 1.319-1.489 2.879 2.519 5.327-6.178 1.475 1.285z"/>
										</svg>
										Plataforma Completa
									</p>
									<!-- segundo ponto -->
									<p class="d-flex text-left">
										<svg
											width="24"
											height="24"
											xmlns="http://www.w3.org/2000/svg"
											fill="{{ '#330044' }}"
											fill-rule="evenodd"
											clip-rule="evenodd"
											viewbox="-3 -3 32 32"
										>
											<path d="M24 1v16.981h-13l-7 5.02v-5.02h-4v-16.981h24zm-6 5.285l-6.622 7.715-4.378-3.852 1.319-1.489 2.879 2.519 5.327-6.178 1.475 1.285z"/>
										</svg>
										Negociação Online
									</p>
									<a href="" class="btn-cadastro-hotsite btn-success mt-auto">
										Negociar
									</a>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 mt-5 mt-md-0">
							<div class="hotsite-box">
								<svg
									width="12"
									height="12"
									class="svg-header"
									xmlns="http://www.w3.org/2000/svg"
									fill="#fff"
									fill-rule="evenodd"
									clip-rule="evenodd"
									viewbox="-3 -3 32 32"
								>
									<path d="M21.312 12.644c-.972-1.189-3.646-4.212-4.597-5.284l-1.784 1.018 4.657 5.35c.623.692.459 1.704-.376 2.239-.773.497-5.341 3.376-6.386 4.035-.074-.721-.358-1.391-.826-1.948-.469-.557-6.115-7.376-7.523-9.178-.469-.601-.575-1.246-.295-1.817.268-.549.842-.918 1.43-.918.919 0 1.408.655 1.549 1.215.16.641-.035 1.231-.623 1.685l1.329 1.624 7.796-4.446c1.422-1.051 1.822-2.991.93-4.513-.618-1.053-1.759-1.706-2.978-1.706-1.188 0-.793-.016-9.565 4.475-1.234.591-2.05 1.787-2.05 3.202 0 .87.308 1.756.889 2.487 1.427 1.794 7.561 9.185 7.616 9.257.371.493.427 1.119.15 1.673-.277.555-.812.886-1.429.886-.919 0-1.408-.655-1.549-1.216-.156-.629.012-1.208.604-1.654l-1.277-1.545c-.822.665-1.277 1.496-1.377 2.442-.232 2.205 1.525 3.993 3.613 3.993.596 0 1.311-.177 1.841-.51l9.427-5.946c.957-.664 1.492-1.781 1.492-2.897 0-.744-.24-1.454-.688-2.003zm-8.292-10.492c.188-.087.398-.134.609-.134.532 0 .997.281 1.243.752.312.596.226 1.469-.548 1.912l-5.097 2.888c-.051-1.089-.579-2.081-1.455-2.732l5.248-2.686zm3.254 10.055l-4.828 2.823-.645-.781 4.805-2.808.668.766zm-6.96.238l4.75-2.777.668.768-4.773 2.791-.645-.782zm8.49 1.519l-4.881 2.854-.645-.781 4.858-2.84.668.767z"/>
								</svg>
									<!-- serviço -->
									<h3>Protesto Digital</h3>
									<!-- Primeiro ponto -->
									<p class="d-flex text-left">
										<svg
											width="24"
											height="24"
											xmlns="http://www.w3.org/2000/svg"
											fill="{{ '#330044' }}"
											fill-rule="evenodd"
											clip-rule="evenodd"
											viewbox="-3 -3 32 32"
										>
											<path d="M24 1v16.981h-13l-7 5.02v-5.02h-4v-16.981h24zm-6 5.285l-6.622 7.715-4.378-3.852 1.319-1.489 2.879 2.519 5.327-6.178 1.475 1.285z"/>
										</svg>
										Fácil Acesso
									</p>
									<!-- Primeiro ponto -->
									<p class="d-flex text-left">
										<svg
											width="24"
											height="24"
											xmlns="http://www.w3.org/2000/svg"
											fill="{{ '#330044' }}"
											fill-rule="evenodd"
											clip-rule="evenodd"
											viewbox="-3 -3 32 32"
										>
											<path d="M24 1v16.981h-13l-7 5.02v-5.02h-4v-16.981h24zm-6 5.285l-6.622 7.715-4.378-3.852 1.319-1.489 2.879 2.519 5.327-6.178 1.475 1.285z"/>
										</svg>
										Relatório Completo
									</p>
									<!-- Primeiro ponto -->
									<p class="d-flex text-left">
										<svg
											width="24"
											height="24"
											xmlns="http://www.w3.org/2000/svg"
											fill="{{ '#330044' }}"
											fill-rule="evenodd"
											clip-rule="evenodd"
											viewbox="-3 -3 32 32"
										>
											<path d="M24 1v16.981h-13l-7 5.02v-5.02h-4v-16.981h24zm-6 5.285l-6.622 7.715-4.378-3.852 1.319-1.489 2.879 2.519 5.327-6.178 1.475 1.285z"/>
										</svg>
										Consulta de Pendências
									</p>
									<!-- Primeiro ponto -->
									<p class="d-flex text-left">
										<svg
											width="24"
											height="24"
											xmlns="http://www.w3.org/2000/svg"
											fill="{{ '#330044' }}"
											fill-rule="evenodd"
											clip-rule="evenodd"
											viewbox="-3 -3 32 32"
										>
											<path d="M24 1v16.981h-13l-7 5.02v-5.02h-4v-16.981h24zm-6 5.285l-6.622 7.715-4.378-3.852 1.319-1.489 2.879 2.519 5.327-6.178 1.475 1.285z"/>
										</svg>
										Protesto Fácil
									</p>
									<a href="" class="btn-cadastro-hotsite btn-success">
										Notificar
									</a>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
							<div class="hotsite-box">
								<svg
									width="12"
									height="12"
									class="svg-header"
									xmlns="http://www.w3.org/2000/svg"
									fill="#fff"
									fill-rule="evenodd"
									clip-rule="evenodd"
									viewbox="-3 -3 32 32"
								>
									<path d="M0 22h12v2h-12v-2zm11-1h-10c0-1.105.895-2 2-2h6c1.105 0 2 .895 2 2zm6.369-12.839l-2.246 2.197s6.291 5.541 8.172 7.144c.475.405.705.929.705 1.446 0 1.015-.888 1.886-1.95 1.819-.52-.032-.981-.303-1.321-.697-1.619-1.875-7.07-8.249-7.07-8.249l-2.245 2.196-5.857-5.856 5.957-5.857 5.855 5.857zm-12.299.926c-.195-.193-.458-.302-.733-.302-.274 0-.537.109-.732.302-.193.195-.303.458-.303.733 0 .274.11.537.303.732l5.513 5.511c.194.195.457.304.732.304.275 0 .538-.109.732-.304.194-.193.303-.457.303-.732 0-.274-.109-.537-.303-.731l-5.512-5.513zm8.784-8.784c-.195-.194-.458-.303-.732-.303-.576 0-1.035.467-1.035 1.035 0 .275.108.539.303.732l5.513 5.513c.194.193.456.303.731.303.572 0 1.036-.464 1.036-1.035 0-.275-.109-.539-.304-.732l-5.512-5.513z"/>
								</svg>
								<h3>Notificação Extra Judicial</h3>
								<!-- primeiro ponto -->
								<p class="d-flex text-left">
									<svg
										width="24"
										height="24"
										xmlns="http://www.w3.org/2000/svg"
										fill="{{ '#330044' }}"
										fill-rule="evenodd"
										clip-rule="evenodd"
										viewbox="-3 -3 32 32"
									>
										<path d="M24 1v16.981h-13l-7 5.02v-5.02h-4v-16.981h24zm-6 5.285l-6.622 7.715-4.378-3.852 1.319-1.489 2.879 2.519 5.327-6.178 1.475 1.285z"/>
									</svg>
									Atrasos de Aluguel
								</p>
								<!-- primeiro ponto -->
								<p class="d-flex text-left">
									<svg
										width="24"
										height="24"
										xmlns="http://www.w3.org/2000/svg"
										fill="{{ '#330044' }}"
										fill-rule="evenodd"
										clip-rule="evenodd"
										viewbox="-3 -3 32 32"
									>
										<path d="M24 1v16.981h-13l-7 5.02v-5.02h-4v-16.981h24zm-6 5.285l-6.622 7.715-4.378-3.852 1.319-1.489 2.879 2.519 5.327-6.178 1.475 1.285z"/>
									</svg>
									Pedido de Retomada de Imóvel
								</p>
								<!-- primeiro ponto -->
								<p class="d-flex text-left">
									<svg
										width="24"
										height="24"
										xmlns="http://www.w3.org/2000/svg"
										fill="{{ '#330044' }}"
										fill-rule="evenodd"
										clip-rule="evenodd"
										viewbox="-3 -3 32 32"
									>
										<path d="M24 1v16.981h-13l-7 5.02v-5.02h-4v-16.981h24zm-6 5.285l-6.622 7.715-4.378-3.852 1.319-1.489 2.879 2.519 5.327-6.178 1.475 1.285z"/>
									</svg>
									Perturbação do Sossego
								</p>
								<div class="container mt-auto">
									<a href="/protesto-digital" class="btn-cadastro-hotsite btn-success">
										Protestar
									</a>
								</div>

							</div>
						</div>

					</div>

				</div>

			</section>

			<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
			<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&  Fim da Seção CTA  &&&&&&&&&&&&&&&&&&&&&&&&& -->
			<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->

			<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
			<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&  Seção garantia  &&&&&&&&&&&&&&&&&&&&&&&&&& -->
			<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->

			<section id="section-garantia" class="section-garantia text-center pt-5">

				<div class="container">

					<p class="text-center fw-bold">"{{ $tituloSite }} é um site seguro com certificado SSL confiável, Amazon Encrypt e com HTTPS para Segurança na navegação em nosso site."</p>
					<!-- <img src="/img/SITE-SEGURO.png" style="max-height: 100px;" border="0" alt="" />
					<img src="/img/aws.png"  style="max-height: 120px;" border="0" alt="" /> -->
					<div class="row">
						<div class="col-md-4">
							<img src="/hotsite/img/hotsite-garantia-1.png"  style="max-height: 120px;" border="0" alt="garantia segurança {{ $tituloSite }}" />
						</div>
						<div class="col-md-4">
							<img src="/hotsite/img/hotsite-garantia-2.png"  style="max-height: 120px;" border="0" alt="garantia segurança {{ $tituloSite }}" />
						</div>
						<div class="col-md-4">
							<img src="/hotsite/img/hotsite-garantia-3.png"  style="max-height: 120px;" border="0" alt="garantia segurança {{ $tituloSite }}" />
						</div>
					</div>

				</div>

			</section>

			<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
			<!-- &&&&&&&&&&&&&&&&&&&&&&&&&  Fim da Seção garantia  &&&&&&&&&&&&&&&&&&&&&& -->
			<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->


@endsection

@section('scripts-after')

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous"></script>

	<script>
		// Mascara de CPF e CNPJ
		var CpfCnpjMaskBehavior = function (val) {
			return val.replace(/\D/g, '').length <= 11 ? '000.000.000-009' : '00.000.000/0000-00';
		},
		cpfCnpjpOptions = {
			onKeyPress: function(val, e, field, options) {
			field.mask(CpfCnpjMaskBehavior.apply({}, arguments), options);
			}
		};

		$(function() {
		$('#dividaCpfCnpj').mask(CpfCnpjMaskBehavior, cpfCnpjpOptions);
		})
	</script>

		<script>
			$(document).ready(function() {

				$('#customRadioInline1').prop('checked', true);
				$('#customRadioInline2').prop('checked', false);

				if ($('#customRadioInline1').prop('checked')) {
					$("#div-cpf").show('slow');
					$('#div-cnpj').hide('slow');
					$('.input-cpf').prop('required',true);
					$('.input-cnpj').prop('required',false);
					$('#form0').val("");
				}

				$('#customRadioInline1').click(function() {
					$("#div-cpf").show('slow');
					$('#div-cnpj').hide('slow');
					$('.input-cpf').prop('required',true);
					$('.input-cnpj').prop('required',false);
					$('#form0').val("");
				});

				$('#customRadioInline2').click(function() {
					$("#div-cpf").hide('slow');
					$('#div-cnpj').show('slow');
					$('.input-cnpj').prop('required',true);
					$('.input-cpf').prop('required',false);
					$('#form1').val("");
				});

			});
		</script>

	{{--
		<script>
			$(document).ready(function() {
				if($('#toggle-state').prop('checked')) {
					$('#div-cnpj').animate({ height: 'toggle' }, 500 );
				}
				$('#toggle-state').change(function() {
					// alternar campos cpf/cnpj
					if($(this).prop('checked') == true) {
						$('#div-cnpj').animate({ height: 'toggle' }, 500 );
					} else {
						$('#div-cnpj').animate({ height: 'toggle' }, 500 );
						$('#form0').val("");
					}
				});
			});
		</script> --}}

@endsection
