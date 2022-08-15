<!doctype html>
<html lang="pt-BR">

	<head>

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- CSRF Token -->
		<meta name="csrf-token" content="AK7iJ3eGHFrw7u58OaXvssnawV9EngpF3gKG1vAj" />

		<!-- Progressive Web App -->
		<link rel="manifest" id="manifest-placeholder" />

		<meta name="mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="msapplication-starturl" content="/" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="theme-color" content="#e5e5e5" />

		<script>


		  var myDynamicManifest = {
			"name": "<?php echo $tituloSite ?>",
			"short_name": "<?php echo $tituloSite ?>",
			"theme_color": "<?php if(isset ( $hotsite->cor_fundo_banner)) { echo  $hotsite->cor_fundo_banner; }  ?>",
			"background_color": "<?php if(isset ( $hotsite->cor_fundo_banner)) { echo  $hotsite->cor_fundo_banner; }  ?>",
			"display": "standalone",
			"orientation": "portrait",
			"start_url": "http://localhost:85/",
			"icons": [{
			  "src": "<?php echo asset('storage/logo-empresa/'.$logoSite) ?>",
			  "sizes": "256x256",
			  "type": "image/png"
			}]
		  }
		  const stringManifest = JSON.stringify(myDynamicManifest);
		  const blob = new Blob([stringManifest], {type: 'application/json'});
		  const manifestURL = URL.createObjectURL(blob);
		  document.querySelector('#manifest-placeholder').setAttribute('href', manifestURL);

		  /*if ('serviceWorker' in navigator) {
			  window.addEventListener('load', function () {
				  navigator.serviceWorker.register('/service-worker.js').then(function (registration) {
					  console.log('ServiceWorker registration :', registration.scope);
				  }).catch(function (error) {
					  console.log('ServiceWorker registration failed:', errror);
				  });
			  });
		  }*/


		</script>

		<title>{{ $tituloSite }}</title>
		<meta name="description" content="Consultas de CPF e CNPJ para análise de crédito. Consultas de veículos e localização de pessoas e empresas online. Planos Pré-Pago e Pós-Pago." />
		<meta name="keywords" content="{{ $tituloSite }}, Consulta Cpf, Consulta Cnpj, Consulta de Veículos, Consulta Dividas, Consulta Protestos, Consulta de Cheque, Consulta Score, Consulta Processos, Notificação Extrajudicial" />
		<meta name="author" content="Suitecred Tecnologia Digital | Eder Zuca" />
		<!--<link rel="icon" type="image/png" href="images/favicon.png" />-->
		<!-- Scripts -->

		<script id="navegg" type="text/javascript">

		  (function(n,v,g){o="Navegg";if(!n[o]){
			a=v.createElement('script');a.src=g;b=document.getElementsByTagName('script')[0];
			b.parentNode.insertBefore(a,b);n[o]=n[o]||function(parms){
			n[o].q=n[o].q||[];n[o].q.push([this, parms])};}})
		  (window, document, 'https://tag.navdmp.com/universal.min.js');
		  window.naveggReady = window.naveggReady||[];
		  window.nvg65395 = new Navegg({
			acc: 65395
		  });

		</script>

		<script defer src="https://pro.fontawesome.com/releases/v5.11.2/js/all.js" integrity="sha384-S++1cFhwpxbtRScUliTyprAMK33gMHbukurY4rNyt9CxIniGm6PfioUsQPoAITQJ" crossorigin="anonymous"></script>

		<!-- Styles -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
		<link href="{{ asset('hotsite/lib/mdb/css/mdb.min.css') }}" rel="stylesheet" />
		<link href="{{ asset('hotsite/lib/mdb/css/addons/datatables.min.css') }}" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" />
		<link rel="stylesheet "href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle/css/bootstrap4-toggle.min.css">
		<link rel="stylesheet" href="{{ asset('hotsite/css/index.css') }}" />
		<link rel="stylesheet" href="{{ asset('hotsite/css/site.css') }}" />
		<link rel="stylesheet" href="{{ asset('hotsite/css/responsive.css') }}" />
		<link rel="stylesheet" href="{{ asset('hotsite/css/auth.css') }}" />

    	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />

    {!! $global_html_head !!}

  <style>

	html {
		overflow-x: hidden;
		scroll-behavior: smooth;
	}

	a:focus,
	a:hover {
		color: {{ $hotsite->cor_fundo_banner }};
	}

	.banner-carrossel img {
		max-height: 400px;
		width: auto;
		height: auto;
		margin-left: auto;
		margin-right: auto;
		max-width: 400px;
	}
	.carrossel-style-mode{
		text-align: center;
		background: #1919199e;
		color: #ffffff;
		width: 600px;
		margin: auto;
		padding-top: 1px;
		padding-bottom: 10px;
		border-radius: 10px;
    }

	.logo-tamanho{
		width: auto;
		height: 50px;
	}

	#subnavbar {
		/* position: fixed;
		top: 0; */
		width: 100%;
		display: block;
		transition: top 0.3s ease-in-out;
	}


	#subnavbar .contact-nav i,
	#subnavbar .contact-nav a {
		color: {{ $hotsite->cor_fundo_banner }};
	}

	#subnavbar .contact-nav a:focus,
	#subnavbar .contact-nav a:hover {
		color: {{ $hotsite->cor_fundo_banner }};
		opacity: .7;
	}

	#subnavbar .social-nav i,
	#subnavbar .social-nav a {
		color: {{ $hotsite->cor_fundo_banner }};
	}

	#subnavbar .social-nav a:focus,
	#subnavbar .social-nav a:hover {
		color: {{ $hotsite->cor_fundo_banner }};
		opacity: .7;
	}

	#header {
		margin: 0px;
		padding: 0px;
		transition: top 0.3s ease-in-out;
		z-index: 99;
	}

	#header li a {
		margin: 0px;
	}

	/* Modal styles */

	/* .close-btn {
		position: absolute;
		font-size: 55px;
		right: 20px;
	}

	.close-btn {
		color: {{ $hotsite->cor_fundo_banner }} !important;
	} */

	.nav-mobile {
		display: none;
	}


	@media screen and (max-width: 580px) {
		.nav-mobile {
			display: block;
		}

		/* estilos para navegação */

		.offcanvas-menu {
			width: 100vw;
			height: 100vh;
			position: fixed;
			background-color: {{ $hotsite->cor_fundo_header . "ef"}};
			top: 0vh;
			left: 0vw;
			transform: translateX(100%);
			transition: all .3s ease-in;
		}

		.button-menu {
			display: block;
			outline: none;
			border: none;
			box-shadow: none;
			background: transparent;
			position: fixed;
			top: 2%;
			right: 5%;
			z-index: 999;
		}

		.is-active {
			transform: none;
			transition: all .2s ease-out;
		}

		    /* navgeação */

		.navbar {
			padding: 5px;
			display: block !important;
			margin: 50% auto;
		}

		.nav-item {
			text-decoration: none;
			list-style: none;
			margin: 30px auto;
			padding: 0px;
			text-align: center;
		}

	}

	/* navegação */

	.navbar {
		padding: 0px;
		box-shadow: none !important;
	}

	/*--------------------------------------------------------------
	# Seção Contato
	--------------------------------------------------------------*/

	.section-contato .info {
		padding: 30px;
		background: #fff;
		width: 100%;
		box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.1);
	}

	.section-contato .info svg {
		font-size: 20px;
		padding: 10px;
		margin: 5px 15px 5px 0px;
		float: left;
		width: 48px;
		height: 48px;
		background: {{ $hotsite->cor_fundo_banner }};
		display: flex;
		justify-content: center;
		align-items: center;
		border-radius: 50px;
		transition: all 0.3s ease-in-out;
	}

	#section-contato {
		background: {{ $hotsite->cor_fundo_banner }};
		background: -moz-linear-gradient(145deg, {{ $hotsite->cor_fundo_banner . 'fa' }} 5%, {{ $hotsite->cor_fundo_banner . '88' }} 32%, {{ $hotsite->cor_fundo_banner . '55' }} 100%);
		background: -webkit-linear-gradient(145deg, {{ $hotsite->cor_fundo_banner . 'fa' }} 5%, {{ $hotsite->cor_fundo_banner . '88' }} 32%, {{ $hotsite->cor_fundo_banner . '55' }} 100%);
		background: linear-gradient(145deg, {{ $hotsite->cor_fundo_banner . 'fa' }} 5%, {{ $hotsite->cor_fundo_banner . '88' }} 32%, {{ $hotsite->cor_fundo_banner . '55' }} 100%);
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="{{ $hotsite->cor_fundo_banner . 'fa' }}",endColorstr="#ffffff",GradientType=1);
	}

	/*--------------------------------------------------------------
	# Botao Flutuante Whattsap
	--------------------------------------------------------------*/

	.wpp-container {
		position: fixed;
		right: -290px;
		top: 45%;
		padding: 15px 200px 15px 5px;
		background-color: #25d366;
		color: white;
		border-radius: 50px;
		transition: all .3s ease-in-out;
		z-index: 10;
	}

	.wpp-btn {
		color: white;
		font-weight: bolder;
	}

	.wpp-btn:focus,
	.wpp-btn:hover {
		color: whitesmoke;
	}

	.wpp-container:focus,
	.wpp-container:hover {
		right: -190px;
	}


  </style>

	</head>
	<body>



		<div id="app">

			<main>

				<div>

					<div class="wrapper" id="wrapper" {!! (is_object($hotsite) && !empty($hotsite->cor_principal)) ? 'style="background-color: ' . $hotsite->cor_principal . '!important;"' : '' !!} {!! (is_object($hotsite) && !empty($hotsite->cor_textos)) ? 'style="color: ' . $hotsite->cor_textos . '!important;"' : '' !!}>

						<!-- Sidebar -->
						{{--                <nav id="sidebar">--}}
						{{--                    <button type="button" id="sidebarCollapse" class="btn btn-info waves-effect waves-light">--}}
						{{--                        <i class="fas fa-cog"></i>--}}
						{{--                    </button>--}}
						{{--                    <div class="sidebar-header">--}}
						{{--                        <h3><img src="/img/logo.png"></h3>--}}
						{{--                    </div>--}}

						{{--                    <ul class="list-unstyled components p-3">--}}
						{{--                        <p>Informações Geral</p>--}}
						{{--                        <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">--}}

						{{--                            <!-- Accordion card -->--}}
						{{--                            <div class="card">--}}

						{{--                                <!-- Card header -->--}}
						{{--                                <div class="card-header" role="tab" id="headingOne1">--}}
						{{--                                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1" class="collapsed">--}}
						{{--                                        <h5 class="mb-0">--}}
						{{--                                            Configurações Básicas <i class="fas fa-angle-down rotate-icon"></i>--}}
						{{--                                        </h5>--}}
						{{--                                    </a>--}}
						{{--                                </div>--}}

						{{--                                <!-- Card body -->--}}
						{{--                                <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx" style="">--}}
						{{--                                    <div class="card-body">--}}
						{{--                                        <div class="md-form mt-0 col-md-12 col-xs-12 p-0">--}}
						{{--                                            <h5>Logo</h5>--}}
						{{--                                            <div class="file-field">--}}
						{{--                                                <div class="btn btn-primary btn-sm float-left waves-effect waves-light">--}}
						{{--                                                    <span>Escolha</span>--}}
						{{--                                                    <input type="file" id="envia_logo">--}}
						{{--                                                </div>--}}
						{{--                                                <div class="file-path-wrapper">--}}
						{{--                                                    <input class="file-path validate" type="text" placeholder="Upload">--}}
						{{--                                                </div>--}}
						{{--                                            </div>--}}
						{{--                                        </div>--}}



						{{--                                    </div>--}}

						{{--                                </div>--}}

						{{--                            </div>--}}
						{{--                            <!-- Accordion card -->--}}

						{{--                            <!-- Accordion card -->--}}
						{{--                            <div class="card">--}}

						{{--                                <!-- Card header -->--}}
						{{--                                <div class="card-header" role="tab" id="headingTwo2">--}}
						{{--                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">--}}
						{{--                                        <h5 class="mb-0">--}}
						{{--                                            Cores <i class="fas fa-angle-down rotate-icon"></i>--}}
						{{--                                        </h5>--}}
						{{--                                    </a>--}}
						{{--                                </div>--}}

						{{--                                <!-- Card body -->--}}
						{{--                                <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx" style="">--}}
						{{--                                    <div class="card-body">--}}
						{{--                                        <div class="row m-0">--}}
						{{--                                            <div class="md-form md-outline input-group col-md-12 col-xs-12 p-0">--}}
						{{--                                                <input type="text" class="jscolor form-control"  onchange="fundobackcolor(this.jscolor)" id="fundo_website" name="qtd" placeholder="#fff"  data-div="body"  value=""autocomplete="off">--}}
						{{--                                                <label class="active">Cor Principal Website:</label>--}}
						{{--                                            </div>--}}

						{{--                                            <div class="md-form md-outline input-group col-md-12 col-xs-12 p-0">--}}
						{{--                                                <input type="text" onchange="fundoheadercolor(this.jscolor)" class="jscolor form-control"  data-div="header" id="fundo_header"name="qtd" placeholder="#fff" value=""autocomplete="off">--}}
						{{--                                                <label class="active">Fundo Header:</label>--}}
						{{--                                            </div>--}}

						{{--                                            <div class="md-form md-outline input-group col-md-12 col-xs-12 p-0">--}}
						{{--                                                <input type="text" onchange="fundobannercolor(this.jscolor)" class="jscolor form-control" name="qtd" id="fundo_banner" placeholder="#fff" value="" autocomplete="off">--}}
						{{--                                                <label class="active">Fundo Banner:</label>--}}
						{{--                                            </div>--}}

						{{--                                            <div class="md-form md-outline input-group col-md-12 col-xs-12 p-0">--}}
						{{--                                                <input type="text" data-div="body" onchange="textcolor(this.jscolor)" class="jscolor form-control" name="qtd" placeholder="#fff" value="" autocomplete="off" id="cor_textos">--}}
						{{--                                                <label class="active">Color dos Textos:</label>--}}
						{{--                                            </div>--}}
						{{--                                        </div>--}}
						{{--                                    </div>--}}
						{{--                                </div>--}}

						{{--                            </div>--}}
						{{--                            <!-- Accordion card -->--}}

						{{--                            <!-- Accordion card -->--}}
						{{--                            <div class="card">--}}

						{{--                                <!-- Card header -->--}}
						{{--                                <div class="card-header" role="tab" id="headingThree3">--}}
						{{--                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">--}}
						{{--                                        <h5 class="mb-0">--}}
						{{--                                            Textos <i class="fas fa-angle-down rotate-icon"></i>--}}
						{{--                                        </h5>--}}
						{{--                                    </a>--}}
						{{--                                </div>--}}

						{{--                                <!-- Card body -->--}}
						{{--                                <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx" style="">--}}
						{{--                                    <div class="card-body">--}}
						{{--                                        <div class="md-form md-outline input-group col-md-12 col-xs-12 p-0">--}}
						{{--                                            <input type="text" class="form-control" id=""  onchange="titulobanner(this.value)"  value="O maior e mais completo relatório de CPF ou CNPJ online." autocomplete="off">--}}
						{{--                                            <label class="active">{{__('Titulo do Banner:')}}</label>--}}
						{{--                                        </div>--}}
						{{--                                        <div class="md-form md-outline input-group  col-md-12 col-xs-12 p-0">--}}
						{{--                                            <textarea class="form-control" name="qtd" placeholder="#fff" rows="7" value=""  onchange="textobanner(this.value)" >Consulte seu nome ou de terceiro de um jeito rápido e fácil, a qualquer hora e em qualquer lugar. Descubra todas as Restrições, Pendências, Dividas e Protestos em menos de 1 Minuto.<br><br>consultas a partir de R$ 7,20</textarea>--}}
						{{--                                            <label class="active">Descrição do Banner:</label>--}}
						{{--                                        </div>--}}
						{{--                                    </div>--}}
						{{--                                </div>--}}

						{{--                            </div>--}}
						{{--                            <!-- Accordion card -->--}}

						{{--                        </div>--}}

						{{--                    </ul>--}}
						{{--                </nav>--}}

						<!-- Content -->

						<div id="content">

							<div class="site-area">

								<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
								<!-- &&&&&&&&&&&&&&&&&&&&&&&&&  Inicio do Header  &&&&&&&&&&&&&&&&&&&&&&&&&&& -->
								<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->


								<header id="header" {!! (is_object($hotsite) && !empty($hotsite->cor_fundo_header)) ? 'style="background-color: ' . $hotsite->cor_fundo_header . '!important;"' : '' !!}>

									<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
									<!-- &&&&&&&&&&&&&&&&&&&&&&&&&  Primeira navbar  &&&&&&&&&&&&&&&&&&&&&&&&&&& -->
									<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->

									<div class="container p-0 my-0 mx-auto">

  										<!-- barra superior da navegação (apenas desktop) -->
										<div id="subnavbar" class="container d-none d-sm-block py-2 px-5">
											<div class="row d-flex ">
												<div class="col-md-6 d-flex contact-nav">
													<small class="mr-2">
														<a href="https://wa.me/55{{$dddc}}{{$celular}}" target="_blank">
															<i class="fab fa-lg fa-whatsapp"></i>
															{{$dddc}}{{$celular}}
														</a>
													</small>
													<small class="mx-2">
														<a href="mailto:{{$email}}">
															<i class="fa fa-lg fa-envelope"></i>
															{{$email}}
														</a>
													</small>
												</div>
												<div class="col-md-6 d-flex justify-content-end social-nav">
													<small>
														<a href="#section-busca-divida">
															<i class="fa fa-lg fa-gift mx-2"></i>
															Experimente
														</a>
													</small>
												</div>
											</div>
										</div>
  										<!-- fim da barra superior da navegação (apenas desktop) -->

										<div class="row m-0 d-flex">

											<div class="col-md-3 col-xs-12 logo">

												<img class="logo-tamanho" src="{{ asset('storage/logo-empresa/'.$logoSite) }}" width="auto" height="50px" title="{{ $tituloSite }}" />

											</div>

											<div class="nav-mobile">
												<button href="" class="button-menu">
													<svg
														xmlns="http://www.w3.org/2000/svg"
														width="24"
														height="24"
														fill="{{ $hotsite->cor_fundo_banner }}"
														viewBox="0 0 24 24"
														>
														<path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z"/>
													</svg>
												</button>
											</div>

											<div class="col-md-9 col-xs-12 d-flex justify-content-end offcanvas-menu">

												<ul class="d-flex navbar">

													{{--<li class="nav-item"><a href="/cadastro" class="btn btn-success">CADASTRE-SE</a></li>--}}

													<!-- Botões Nav -->
													@yield('botoes-nav')

												</ul>

											</div>

										</div>

									</div>

									<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
									<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&  Segunda navbar  &&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
									<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->

									<!-- {{!! var_dump($hotsite) !!}}
									{{!! var_dump($template) !!}} -->

									<!-- ENTRA NO MENU 2 -->
									@if(1 > 100)

										<!-- MENU 2 -->
										<div class="container p-0 my-0 mx-auto">

											<!-- barra superior da navegação (apenas desktop) -->
											<div id="subnavbar" class="container d-none d-sm-block py-2 px-5">
												<div class="row d-flex ">
													<div class="col-md-6 d-flex contact-nav">
														<small class="mr-2">
															<a href="https://wa.me/55{{$dddc}}{{$celular}}" target="_blank">
																<i class="fab fa-lg fa-whatsapp"></i>
																{{$dddc}}{{$celular}}
															</a>
														</small>
														<small class="mx-2">
															<a href="mailto:{{$email}}">
																<i class="fa fa-lg fa-envelope"></i>
																{{$email}}
															</a>
														</small>
													</div>
													<div class="col-md-6 d-flex justify-content-end social-nav">
														<small>
															<a href="#section-busca-divida">
																<i class="fa fa-lg fa-gift mx-2"></i>
																Experimente MENU 2
															</a>
														</small>
													</div>
												</div>
												</div>
												<!-- fim da barra superior da navegação (apenas desktop) -->

												<div class="row m-0 d-flex">

													<div class="col-md-3 col-xs-12 logo">

														<img class="logo-tamanho" src="{{ asset('storage/logo-empresa/'.$logoSite) }}" width="auto" height="50px" title="{{ $tituloSite }}" />

													</div>

													<div class="nav-mobile">
														<button href="" class="button-menu">
															<svg
																xmlns="http://www.w3.org/2000/svg"
																width="24"
																height="24"
																fill="{{ $hotsite->cor_fundo_banner }}"
																viewBox="0 0 24 24"
																>
																<path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z"/>
															</svg>
														</button>
													</div>

													<div class="col-md-9 col-xs-12 d-flex justify-content-end offcanvas-menu">

														<ul class="d-flex navbar">

															{{--<li class="nav-item"><a href="/cadastro" class="btn btn-success">CADASTRE-SE</a></li>--}}

															<!-- Botões Nav -->
															@yield('botoes-nav')

														</ul>

													</div>

												</div>

											</div>

											@endif

										</header>



								<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
								<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&  Fim do Header  &&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
								<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->



								<!-- <section class="banner" id="banner" {!! (is_object($hotsite) && !empty($hotsite->cor_fundo_banner)) ? 'style="background-color: ' . $hotsite->cor_fundo_banner . '!important;"' : '' !!}> -->

									@include('painel.template.messages')

									<!-- <div class="container"> -->

										<!-- Content -->
										@yield('conteudo-header')

									<!-- </div> -->

								<!-- </section> -->

                <!-- Content -->
                @yield('content')


							<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
			<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&  Seção contato  &&&&&&&&&&&&&&&&&&&&&&&&&& -->
			<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->


			<section id="section-contato" class="section-contato bloco-contato">
				<div class="container">

					<div class="row">

						<div class="col-lg-5 d-flex align-items-stretch p-3">
							<div class="info ">
								<h1 class="fw-bold fs-6 my-5" {!! (is_object($hotsite) && !empty($hotsite->cor_fundo_banner)) ? 'style="color: ' . $hotsite->cor_fundo_banner . '!important;"' : '' !!}>{{ $tituloSite }}</h1>
								<div class="endereco">
									<svg
										width="12"
										height="12"
										xmlns="http://www.w3.org/2000/svg"
										fill="#fff"
										fill-rule="evenodd"
										clip-rule="evenodd"
										viewbox="-3 -3 32 32"
									>
										<path d="M12 2c2.131 0 4 1.73 4 3.702 0 2.05-1.714 4.941-4 8.561-2.286-3.62-4-6.511-4-8.561 0-1.972 1.869-3.702 4-3.702zm0-2c-3.148 0-6 2.553-6 5.702 0 3.148 2.602 6.907 6 12.298 3.398-5.391 6-9.15 6-12.298 0-3.149-2.851-5.702-6-5.702zm0 8c-1.105 0-2-.895-2-2s.895-2 2-2 2 .895 2 2-.895 2-2 2zm8 12c0 2.209-3.581 4-8 4s-8-1.791-8-4c0-1.602 1.888-2.98 4.608-3.619l1.154 1.824c-.401.068-.806.135-1.178.242-3.312.949-3.453 2.109-.021 3.102 2.088.603 4.777.605 6.874-.001 3.619-1.047 3.164-2.275-.268-3.167-.296-.077-.621-.118-.936-.171l1.156-1.828c2.723.638 4.611 2.016 4.611 3.618z"/>
									</svg>
									<h4>Endereço:</h4>
									<p>{{ $endereco }} N. {{ $numero }} - {{ $bairro }}</p>
									<!-- <p>{{ $cidade }} - {{ $uf }} </p> -->
								</div>

								<div class="estado">
									<svg
										width="48"
										height="48"
										xmlns="http://www.w3.org/2000/svg"
										fill="#fff"
										fill-rule="evenodd"
										clip-rule="evenodd"
										viewbox="-3 -3 32 32"
									>
										<path d="M12 3c2.131 0 4 1.73 4 3.702 0 2.05-1.714 4.941-4 8.561-2.286-3.62-4-6.511-4-8.561 0-1.972 1.869-3.702 4-3.702zm0-2c-3.148 0-6 2.553-6 5.702 0 3.148 2.602 6.907 6 12.298 3.398-5.391 6-9.15 6-12.298 0-3.149-2.851-5.702-6-5.702zm0 8c-1.105 0-2-.895-2-2s.895-2 2-2 2 .895 2 2-.895 2-2 2zm12 14h-24l4-8h3.135c.385.641.798 1.309 1.232 2h-3.131l-2 4h17.527l-2-4h-3.131c.435-.691.848-1.359 1.232-2h3.136l4 8z"/>
									<h4>Estado / Cidade</h4>
									<p>
										{{ $cidade }} - {{ $uf }}
									</p>
								</div>

								<div class="email">
									<svg
										width="48"
										height="48"
										xmlns="http://www.w3.org/2000/svg"
										fill="#fff"
										fill-rule="evenodd"
										clip-rule="evenodd"
										viewbox="-3 -3 32 32"
									>
										<path d="M24 3l-3.195 11.716-4.329-3.855 4.154-4.385-5.568 3.849-3.843-.934 12.781-6.391zm-7.988 8.876v4.124l1.735-2.578-1.735-1.546zm-4.136 5.684c-.646.405-1.312.765-1.986 1.069l.492 1.184c.675-.303 1.343-.658 1.992-1.056l-.498-1.197zm3.124-2.408c-.59.581-1.363 1.171-2.042 1.67l.505 1.214c.486-.346 1.087-.758 1.537-1.146v-1.738zm-5.808 5.137c-1.294.457-2.52.711-3.643.711-3.069 0-5.549-1.787-5.549-4.83 0-1.348.457-2.511 1.326-3.392 1-1 2.315-1.489 4.001-1.489 2.533 0 4.338 1.631 4.338 3.903 0 1.022-.369 1.957-1.033 2.62-.564.565-1.305.892-2.032.892-.425 0-.772-.163-.936-.424-.054-.087-.065-.142-.098-.337-.413.478-.848.685-1.457.685-1.076 0-1.761-.804-1.761-2.044 0-1.837 1.206-3.359 2.652-3.359.609 0 .913.152 1.207.609l.108-.38h1.285c-.065.217-.261.88-.315 1.12-.706 2.612-.695 2.504-.695 2.74 0 .447.616.27.967-.011.533-.413.881-1.218.881-2.055 0-1-.468-1.87-1.25-2.359-.489-.293-1.175-.457-1.946-.457-2.294 0-3.903 1.522-3.903 3.675 0 3.446 3.626 4.262 7.361 2.996l.492 1.186zm-3.397-5.282c0-.446-.25-.75-.631-.75-.413 0-.794.271-1.065.783-.261.489-.435 1.13-.435 1.631 0 .576.217.88.631.88.401 0 .782-.315 1.064-.87.262-.511.436-1.174.436-1.674z"/>
									</svg>
									<h4>Email:</h4>
									<p>{{$email}}</p>
								</div>

								<div class="contato">
									<svg
										width="48"
										height="48"
										xmlns="http://www.w3.org/2000/svg"
										fill="#fff"
										fill-rule="evenodd"
										clip-rule="evenodd"
										viewbox="-3 -3 32 32"
									>
										<path d="M6.02 7.389c.399-.285.85-.417 1.292-.417.944 0 1.852.6 2.15 1.599-.382-.294-.83-.437-1.281-.437-.458 0-.919.147-1.321.434-.799.57-1.153 1.541-.845 2.461-1.242-.89-1.247-2.747.005-3.64zm3.741 12.77c.994.334 4.071 1.186 7.635 3.841l6.604-4.71c-1.713-2.402-1.241-4.082-2.943-6.468-1.162-1.628-1.827-1.654-3.037-1.432l.599.84c.361.507-.405 1.05-.764.544l-.534-.75c-.435-.609-1.279-.229-2.053-.051l.727 1.019c.36.505-.403 1.051-.764.544l-.629-.882c-.446-.626-1.318-.208-2.095-.01l.769 1.078c.363.508-.405 1.049-.764.544l-3.118-4.366c-.968-1.358-3.088.083-2.086 1.489l4.605 6.458c-.494-.183-1.363-.349-1.93-.349-1.754 0-2.429 1.92-.222 2.661zm-3.286-2.159h-4.475v-14h10v6.688l2-.471v-8.217c0-1.104-.895-2-2-2h-10c-1.105 0-2 .896-2 2v18.678c-.001 2.213 3.503 3.322 7.005 3.322 1.812 0 3.619-.299 4.944-.894-2.121-.946-6.378-1.576-5.474-5.106z"/>
									<h4>Contato / Whattsap:</h4>
									<p>
										<a href="#" onclick="window.location.href='https://wa.me/55{{$dddc}}{{$celular}}'" target="_blank">
											({{$dddc}}) {{$celular}}
										</a>
									</p>
								</div>

							</div>

						</div>

						<div class="col-lg-7 d-flex align-items-stretch p-3">
							<!-- form -->
							<div class="info ">

								<div class="container">

									<div class="row">

										<div class="col-md-12 col-xs-12">

											<div class="intro text-center">

												<h1 class="wow super2 mb-5" {!! (is_object($hotsite) && !empty($hotsite->cor_fundo_banner)) ? 'style="color: ' . $hotsite->cor_fundo_banner . '!important;"' : '' !!}>Entre em <span>contato</span> conosco</h1>

											</div>
											<form action="{!! route('site.contatoHotsite') !!}" method="post">

												{{ csrf_field() }}
												<div class="row m-0">

													<div class="form-group col-md-6 col-xs-12">

														<label for="exampleInputNome" class="active">Nome</label>
														<input required type="text" id="exampleInputNome" class="form-control" placeholder="Nome" name="nome" />

													</div>
													<div class="form-group col-md-6 col-xs-12">

														<label for="exampleInputCPF" class="active">CPF ou CNPJ</label>
														<input type="text" id="exampleInputCPF" class="form-control" placeholder="CNPJ" name="cpf_cnpj" />

													</div>

												</div>

												<div class="row m-0">

													<div class="form-group col-md-6 col-xs-12">

														<label for="exampleInputEmail" class="active">Email</label>
														<input required type="text" id="exampleInputEmail" class="form-control" placeholder="email@email.com.br" name="email" />

													</div>
													<div class="form-group col-md-6 col-xs-12">

														<label for="exampleInputTelefone" class="active">Telefone</label>
														<input required type="tel" id="exampleInputTelefone" class="form-control" placeholder="Telefone" name="telefone" />

													</div>

												</div>

												<div class="form-group col-md-12 col-xs-12">

													<label for="exampleInputMensagem">Mensagem</label>
													<textarea required id="exampleInputMensagem" class="form-control" rows="5" name="mensagem"></textarea>

												</div>
												<div class="form-group col-md-12 col-xs-12">

													<div style="display: table;">
														{!! Recaptcha::render() !!}
													</div>

												</div>
												<div class="form-group col-md-12 col-xs-12">

													<button type="submit" class="btn btn-cadastro-hotsite btn-success mt-4 ml-0">Entrar em Contato</button>

												</div>

											</form>

										</div>

									</div>

									</div>

							</div>
						</div>

					</div>

				</div>
				</section>

				<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
				<!-- &&&&&&&&&&&&&&&&&&&&&&&&&  Fim da Seção Contato  &&&&&&&&&&&&&&&&&&&&&&& -->
				<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->


				<!-- <section class="page" id="contato">

					<div class="container">

						<div class="row">

							<div class="col-md-12 col-xs-12">

								<div class="intro text-center">

									<h1 class="wow super2 mb-5">ENTRE EM <span>CONTATO</span> CONOSCO</h1>

								</div>
								<form action="{!! route('site.contatoHotsite') !!}" method="post">

									{{ csrf_field() }}
									<div class="row m-0">

										<div class="form-group col-md-6 col-xs-12">

											<label for="exampleInputNome" class="active">Nome</label>
											<input required type="text" id="exampleInputNome" class="form-control" placeholder="Nome" name="nome" />

										</div>
										<div class="form-group col-md-6 col-xs-12">

											<label for="exampleInputCPF" class="active">CPF ou CNPJ</label>
											<input type="text" id="exampleInputCPF" class="form-control" placeholder="CNPJ" name="cpf_cnpj" />

										</div>

									</div>

									<div class="row m-0">

										<div class="form-group col-md-6 col-xs-12">

											<label for="exampleInputEmail" class="active">Email</label>
											<input required type="text" id="exampleInputEmail" class="form-control" placeholder="email@email.com.br" name="email" />

										</div>
										<div class="form-group col-md-6 col-xs-12">

											<label for="exampleInputTelefone" class="active">Telefone</label>
											<input required type="tel" id="exampleInputTelefone" class="form-control" placeholder="Telefone" name="telefone" />

										</div>

									</div>

									<div class="form-group col-md-12 col-xs-12">

										<label for="exampleInputMensagem">Mensagem</label>
										<textarea required id="exampleInputMensagem" class="form-control" rows="5" name="mensagem"></textarea>

									</div>
									<div class="form-group col-md-12 col-xs-12">

										<div style="display: table;">
											{!! Recaptcha::render() !!}
										</div>

									</div>
									<div class="form-group col-md-12 col-xs-12">

										<button type="submit" class="btn btn-primary mt-4 ml-0">Entrar em Contato</button>

									</div>

								</form>

							</div>

						</div>

					</div>

				</section> -->

				<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
				<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&  Aside Whattsapp  &&&&&&&&&&&&&&&&&&&&&&&&& -->
				<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->

				<aside id="aside-contato" class="aside-contato">

					<span class="wpp-container">
						<a href="https://wa.me/55{{$dddc}}{{$celular}}" class="wpp-btn" target="_blank">
							<svg
								xmlns="http://www.w3.org/2000/svg"
								width="24"
								height="24"
								fill="#fff"
								class="mx-3"
								viewBox="0 0 24 24"
							>
								<path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
							</svg>
							Falar Agora
						</a>
					</span>

				</aside>

				<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
				<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&  Aside Whattsapp  &&&&&&&&&&&&&&&&&&&&&&&&& -->
				<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->

				<footer class="footer">

					<div class="container">

						<div class="row m-0">

							<div class="col-md-6 col-xs-12 p-5">
								© {{ $tituloSite }} - {{ $endereco }} N. {{ $numero }} - {{ $bairro }} - {{ $cidade }} - {{ $uf }} - {{ $cnpj }} Todos os direitos reservados.
							</div>

							<div class="col-md-4 col-xs-12 atendimento p-5">
								Atendimento: ({{$dddc}}) {{$celular}}
								<a role="button" href="https://wa.me/55{{$dddc}}{{$celular}}" target="_blank">
									<i class="fab fa-lg fa-whatsapp"></i>
								</a>
								<br/>
								E-mail: {{$email}}
							</div>

							<div class="col-md-2 col-xs-12 text-right p-5">
								By SuiteCred
							</div>

						</div>

						<div  class="row m-auto text-center">
							<div class="col-md-12 col-xs-12">
								<a href="#"  data-toggle="modal" data-target="#modal_terms" >Termo de Prestação de Serviços</a> - <a href="#" data-toggle="modal" data-target="#modal_policy">Política de Privacidade</a>.
							</div>
						</div>

					</div>

				</footer>
								</div>

							</div>

						</div>

					</div>

			</main>


    <div class="modal fade" tabindex="-1" id="modal_terms" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="background-color: transparent !important; box-shadow: none !important;">

		  <div class="modal-header m-0 p-0" style="height: 0px;">
            <!--  -->
          </div>

		  <div class="modal-body p-5">
			<button type="button" class="close fw-bold p-2" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true" class="close-btn">&times;</span>
            </button>

            @include('site.template.terms');
          </div>

        </div>
      </div>
    </div>


    <div class="modal fade" tabindex="-1" id="modal_policy" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="background-color: transparent !important; box-shadow: none !important;">

		  <div class="modal-header m-0 p-0" style="height: 0px;">
			<!--  -->
          </div>

		  <div class="modal-body p-5">
			<button type="button" class="close fw-bold p-2" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true" class="close-btn">&times;</span>
            </button>
            @include('site.template.policy')
          </div>

        </div>
      </div>
    </div>

                                          <!-- INICIO Modal Banner Carrossel -->

    <!-- Modal -->
    <div class="modal fade" tabindex="-1" id="modalBannerHot">
      <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="-webkit-box-shadow: none; box-shadow: none; background: transparent; border: none;">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <button type="button" class="close btn-danger" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                @if(isset($banners))
                  <div class="carousel-inner">
                    @foreach ($banners as $banner)
                    @if($loop->index == '0')
                    <div class="carousel-item active banner-carrossel">
                      @else
                      <div class="carousel-item banner-carrossel">
                      @endif
                      <a href="{{$banner->url}}" target="_blank"><img src="/storage/banners-carrossel/{{$banner->img}}" class="d-block w-200" alt="{{$banner->nome}}" style="height:400px;"></a>
                      @if(($banner->nome != null) || ($banner->nome != "") || ($banner->texto != null) || ($banner->texto != ""))
                      <div class="carrossel-style-mode">
                        <h3><a href="{{$banner->url}}" target="_blank" style="color: #ffffff">{{$banner->nome}}</a></h3>
                        <p><a href="{{$banner->url}}" target="_blank" style="color: #ffffff">{{$banner->texto}}</a></p>
                      </div>
                      @endif
                    </div>
                    @endforeach

                  </div>
                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                @endif
                </div>

            </div>
          </div>
        </div>

    <!-- FIM Modal Banner Carrossel -->

		<!-- Go to www.addthis.com/dashboard to customize your tools -->
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5cf15ab31fc36c2f"></script>
		<script src="{{ asset('hotsite/lib/mdb/js/jquery-3.4.1.min.js') }}"></script>
		<script src="{{ asset('hotsite/lib/mdb/js/popper.min.js') }}" defer></script>
		<script src="{{ asset('hotsite/lib/mdb/js/bootstrap.min.js') }}" defer></script>
		<script src="{{ asset('hotsite/lib/mdb/js/mdb.min.js') }}" defer></script>
		<script src="{{ asset('hotsite/lib/mdb/js/addons/datatables.min.js') }}" defer></script>
		<script src="{{ asset('hotsite/js/jscolor.js') }}"></script>
		<script src="{{ asset('hotsite/js/store.js') }}"></script>
		<script src="{{ asset('hotsite/js/bootstrap4-toggle.js') }}"></script>

		<!-- script customizados para hotsite -->
		<script>

		// <!-- script de scrolling da navbar -->
		let prevScrollpos = window.pageYOffset;
		window.onscroll = function() {

			let currentScrollPos = window.pageYOffset;
			if (window.screen.width > 580 && prevScrollpos < currentScrollPos) {
				document.getElementById("header").style.top = "-4%";
				// alert(1);
			} else {
				document.getElementById("header").style.top = "0px";
				// alert(2);
			}

			prevScrollpos = currentScrollPos;

		}

		// script da navbar
		const btn = document.querySelector(".button-menu");
		const offCanvas = document.querySelector(".offcanvas-menu");

		btn.addEventListener("click", toggleOffCanvas);

		function toggleOffCanvas() {
			offCanvas.classList.toggle("is-active");
		}
		</script>

		<script>

			$(document).ready(function () {

				$('#sidebarCollapse').on('click', function () {

					$('#sidebar').toggleClass('active');


				});

				$('.modal').on('show.bs.modal', function (event) {

				  setTimeout(function() {

					$('.modal-backdrop').on('click', function() {

					  $('.modal').modal('hide');

					})

				  }, 100);

				})

			});

		</script>


		@if( $chat == "jivochat")

			<!-- BEGIN JIVOSITE CODE {literal} -->

				<script type='text/javascript'>

					(function(){ var widget_id = '{{ $chat_id }}';var d=document;var w=window;function l(){ var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = 'https://code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false); }}})();

				</script>

			<!-- {/literal} END JIVOSITE CODE -->

		@elseif ( $chat == "zopim")

			<!--Start of Zopim Live Chat Script-->

				<script type="text/javascript">

					window.$zopim || (function(d, s)
					{
						var z = $zopim = function(c)
							{
								z._.push(c)
							},
							$ = z.s = d.createElement(s),
							e = d.getElementsByTagName(s)[0];
						z.set = function(o)
						{
							z.set.
							_.push(o)
						};
						z._ = [];
						z.set._ = [];
						$.async = !0;
						$.setAttribute('charset', 'utf-8');
						$.src = '//v2.zopim.com/?{{ $chat_id }}';
						z.t = +new Date;
						$.
							type = 'text/javascript';
						e.parentNode.insertBefore($, e)
					})(document, 'script');

				</script>

			<!--End of Zopim Live Chat Script-->

		@endif

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id={{ $analytics }}"></script>
		<script>

			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', '{{ $analytics }}');

		</script>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<!--Analytics da Plataforma Geral-->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-25718761-4"></script>
		<script>

			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'UA-25718761-4');

		</script>

		<!--Fim Geral-->

		<script>
			(function(w,d,t,u,n,a,m){w['MauticTrackingObject']=n;
				w[n]=w[n]||function(){(w[n].q=w[n].q||[]).push(arguments)},a=d.createElement(t),
					m=d.getElementsByTagName(t)[0];a.async=1;a.src=u;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://suitemail.site/mtc.js','mt');

			mt('send', 'pageview');
		</script>

		<script src="//suitemail.site/focus/1.js" type="text/javascript" charset="utf-8" async="async"></script>

    {!! $global_html_body !!}

  </body>

</html>
<script id="navegg" type="text/javascript">

  (function(n,v,g){o="Navegg";if(!n[o]){
    a=v.createElement('script');a.src=g;b=document.getElementsByTagName('script')[0];
    b.parentNode.insertBefore(a,b);n[o]=n[o]||function(parms){

      n[o].q=n[o].q||[];n[o].q.push([this, parms])

    };

  }})

  (window, document, 'https://tag.navdmp.com/universal.min.js');
  window.naveggReady = window.naveggReady||[];
  window.nvg65395 = new Navegg({

    acc: 65395

  });

</script>

{{--Script de Cookies para Politica de Privacidade--}}
<!--Usando https://www.osano.com/cookieconsent/download/-->
<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
  window.cookieconsent.initialise({
    "palette": {
      "popup": {
        "background": "#000"
      },
      "button": {
        "background": "#f1d600"
      }
    },
    "position": "bottom-left",
    "content": {
      "message": "Este site usa cookies para garantir que você obtenha a melhor experiência em nosso site.",
      "dismiss": "Entendi",
      "link": "Saber mais!",
      "href": "policy"
    }
  });
</script>

{{-- Chama Banner Carrossel --}}
@if (isset($banners))
@if(count($banners) > 0)
<script type="text/javascript">

$(document).ready(function() {
    $('#modalBannerHot').modal('show');
})

$('.carousel').carousel({
      interval: 2000
  });
</script>
@endif
@endif

@yield('scripts-after')
