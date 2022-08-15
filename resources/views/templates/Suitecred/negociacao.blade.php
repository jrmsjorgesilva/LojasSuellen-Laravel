@extends('site.hotsite.template')

<style>
/*--------------------------------------------------------------
# Todas as Sections
--------------------------------------------------------------*/

#section-hero {
	height: 100vh;
	padding-top: 120px;
	background: url("hotsite/img/negociacao.png") !important;
	background-color: {{ $hotsite->cor_fundo_banner . "fe" }} !important;
    background-position: center center !important;
    background-attachment: fixed !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;
    background-blend-mode: overlay !important;
}

#section-banner-dividas {
	/*  */
	background-color: #fafafa;
}

#section-vantagens {
	background-color: {{ $hotsite->cor_fundo_banner }};
}

#section-passo-a-passo {
	background-color: #fafafa;
}

#section-faq {
	background-color: {{ $hotsite->cor_fundo_banner }};
}

#section-negociacao {
	background: url("hotsite/img/negocie-agora.png");
	background-color: {{ $hotsite->cor_fundo_banner }};
	background: -moz-linear-gradient(145deg, {{ $hotsite->cor_fundo_banner . 'fa' }} 5%, {{ $hotsite->cor_fundo_banner . '88' }} 32%, {{ $hotsite->cor_fundo_banner . '55' }} 100%);
	background: -webkit-linear-gradient(145deg, {{ $hotsite->cor_fundo_banner . 'fa' }} 5%, {{ $hotsite->cor_fundo_banner . '88' }} 32%, {{ $hotsite->cor_fundo_banner . '55' }} 100%);
	background: linear-gradient(145deg, {{ $hotsite->cor_fundo_banner . 'fa' }} 5%, {{ $hotsite->cor_fundo_banner . '88' }} 32%, {{ $hotsite->cor_fundo_banner . '55' }} 100%);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="{{ $hotsite->cor_fundo_banner . 'fa' }}",endColorstr="#ffffff",GradientType=1);
}

#section-garantia {
	background-color: #fafafa;
}

/*--------------------------------------------------------------
# Buttons
--------------------------------------------------------------*/

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

/*--------------------------------------------------------------
# Section Hero
--------------------------------------------------------------*/

.section-hero {
	position: relative !important;
	z-index: 2;
	text-align: center;
	padding: 80px 0;
}

.section-hero .negociacao-form {
  text-align: center;
  font-size: 15px;
  margin-top: 30px;
}

.section-hero .negociacao-form form {
	background: #fff;
	padding: 6px 10px;
	position: relative;
	border-radius: 50px;
	text-align: left;
}

#dividaCpfCnpj,
#dividaCpfCnpj-negociacao {
	border: 0;
	padding: 4px 8px;
	/* width: calc(100% - 100px); */
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
  cursor: pointer;
}

/*--------------------------------------------------------------
# Section card banner dividas
--------------------------------------------------------------*/

.card-banner-dividas {
	padding:10px 5px;
	margin: 10px;
	box-shadow: 1px 3px 5px 0 rgba(0, 0, 0, 0.2);
	border-radius: 3px;
	transition: all ease-in-out 0.3s;
}

.card-banner-dividas:focus,
.card-banner-dividas:hover {
	box-shadow: 3px 6px 10px 0 rgba(0, 0, 0, 0.2);
}

/*--------------------------------------------------------------
# Section Passo a passo
--------------------------------------------------------------*/

.box-passo-a-passo {
	padding: 10px;
	box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.2);
	min-height: 360px;
}

.box-passo-a-passo .contagem {
	background-color: {{ $hotsite->cor_fundo_banner }};
    transform: translateY(-30px);
}

/*--------------------------------------------------------------
# Section negociacao
--------------------------------------------------------------*/

.section-negociacao .negociacao-form {
  text-align: center;
  font-size: 15px;
  margin-top: 30px;
}

.section-negociacao .negociacao-form form {
	background: #fff;
	padding: 6px 10px;
	position: relative;
	border-radius: 50px;
	text-align: left;
}


</style>

@section('botoes-nav')

	<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
	<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&  Navegação  &&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
	<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->

	<!-- <li  class="btn-group btn-negociar">
		<a href="/login" class="btn btn-success ">MINHA CONTA</a>
	</li>

	<li  class="btn-group btn-negociar">
		<a href="{{ route('site.parceiros.index') }}" class="btn btn-success ">Parceiros</a>
	</li> -->

	<li class="nav-item mr-2">
		<a href="/login" class="btn-cadastro-hotsite btn-success w-100 text-center fw-bold" target="_blank">Minha Conta</a>
	</li>

	<li class="nav-item mr-2">
		<a href="{{  route('site.seja-um-representante') }}" class="btn-cadastro-hotsite btn-success w-100 text-center fw-bold" target="_blank">Seja Representante</a>
	</li>

	<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
	<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&  Fim da navbar  &&&&&&&&&&&&&&&&&&&&&&&&&& -->
	<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->


@endsection

@section('conteudo-header')

<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&  Seção Hero  &&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->


<section id="section-hero" class="section-hero justify-content-center">

	<div class="row justify-content-center pt-5 my-5">
		<div class="col-lg-6 col-xs-12">
			<h1 id="titulobanner mt-5">SUA CENTRAL DIGITAL DE NEGOCIAÇÃO DE DÍVIDAS</h1>
			<p class="textobanner" id="textobanner">
				Insira seu CPF ou CNPJ e negocie com descontos imperdíveis.
			</p>
		</div>
		<!-- <div class="col-md-4 col-xs-12">
			<img src="{{ asset('hotsite/img/negociacao.png') }}" border="0" class="banner_img" alt="O maior e mais completo relatório de CPF ou CNPJ Online" />
		</div> -->
	</div>

	<div class="row negociacao-form justify-content-center">
		<div class="col-lg-6 col-xs-12">
			<form method="GET" action="{{ route('site.buscar-dividas') }}">
				{{ csrf_field() }}
				<input class="form-control" type="text" placeholder="Insira o CPF ou CNPJ" id="dividaCpfCnpj" name="cpf_cnpj" value="CPF ou CNPJ">
				<input class="btn-success" type="submit" id="divida-btn" value="Continuar">
			</form>
		</div>
	</div>

</section>

<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&  Fim da Seção Hero  &&&&&&&&&&&&&&&&&&&&&&&& -->
<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->

@endsection

@section('content')

<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
<!-- &&&&&&&&&&&&&&&&&&&&&&&&  Seção banner dividas  &&&&&&&&&&&&&&&&&&&&&&&& -->
<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->

<section id="section-banner-dividas" class="section-banner-dividas gray-f">

	<h1 class="title text-center mb-5">VEJA AS DÍVIDAS QUE VOCÊ ENCONTRA AQUI</h1>

	<div class="container">
		<div class="row m-0">

			@if (is_object($logos))
				@foreach ($logos as $logo)
					<!-- Verifica a quanitdade de itens do array e calcula o tamanho da coluna responsiva (se menor que dois coloca dois pois é o menor valor de coluna no bootstrap)  -->
					<div class="col-md-{!! (12 / count($logos)) < 2 ? 2 : (12 / count($logos)) !!}">
						<div class="card-banner-dividas text-center">
							<img src="/storage/logos-hotsite/{{$logo->imagem}}">
						</div>
					</div>
				@endforeach
			@endif

		</div>
	</div>
</section>

<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
<!-- &&&&&&&&&&&&&&&&&&&&&  Fim da Seção banner dividas  &&&&&&&&&&&&&&&&&&&& -->
<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->


<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&  Seção vantagens  &&&&&&&&&&&&&&&&&&&&&&&&&& -->
<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->

<section id="section-vantagens" class="section-vantagens py-5">
	<div class="container">
		<h1 class="title text-center mb-5">Conheça nossas vantagens</h1>
		<div class="row m-0 my-consult">
			<div class="col-md-6 col-xs-12">
				<div class="box">
					<div class="box-img">
						<img src="{{ asset('hotsite/img/passos/calcular.svg') }}"
						border="0" alt="Parcele sem enrolação" />
					</div>
					<h4>Parcele sem enrolação</h4>
					<div class="description">Juros congelados a partir do seu aceite, em até 72x</div>
				</div>
			</div>

			<div class="col-md-6 col-xs-12">
				<div class="box">
					<div class="box-img">
						<img src="{{ asset('hotsite/img/passos/desconto.svg') }}"
						border="0" alt="Descontos de até 90%" />
					</div>
					<h4>Descontos de até 90%</h4>
					<div class="description">Descontos diferenciados para você pagar sua dívida</div>
				</div>
			</div>

			<div class="col-md-6 col-xs-12">
				<div class="box">
					<div class="box-img">
						<img src="{{ asset('hotsite/img/passos/proposta.svg') }}"
						border="0" alt="Aqui você faz sua proposta" />
					</div>
					<h4>Aqui você faz sua proposta</h4>
					<div class="description">Em menos de 3 minutos você renegocia sua dívida</div>
				</div>
			</div>

			<div class="col-md-6 col-xs-12">
				<div class="box">
					<div class="box-img">
						<img src="{{ asset('hotsite/img/passos/plan.svg') }}" border="0"
						alt="Comece a se planejar agora mesmo" />
					</div>
					<h4>Comece agora a se planejar</h4>
					<div class="description">Dívida paga e nome fora da SERASA e SPC em até 5 dias úteis</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
<!-- &&&&&&&&&&&&&&&&&&&&&&&&  Fim da Seção vantagens  &&&&&&&&&&&&&&&&&&&&&& -->
<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->

<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
<!-- &&&&&&&&&&&&&&&&&&&&&&&&&  Seção Passo a Passo  &&&&&&&&&&&&&&&&&&&&&&&& -->
<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->


<section id="section-passo-a-passo" class="section-passo-a-passo gray-f">
	<div class="container">
		<h1 class="title text-center mb-5">COMO FUNCIONA PASSO A PASSO</h1>
		<ul class="steps row m-0">
			<li class="col-md-3 col-xs-12">
				<div class="box box-passo-a-passo mx-2 my-3">
					<!-- <div class="icon"><span class="sprite ico-01"></span></div> -->
					<h1 class="contagem">1</h1>
					<div class="desc">
						<img src="{{ asset('hotsite/img/passos/cadastro.svg') }}" alt="Faça seu cadastro gratuitamente">
						<p>
							Faça seu cadastro gratuitamente na nossa plataforma
						</p>
						<a class="btn-success btn-cadastro-hotsite" href="/cadastro" title="cadastrar">
							Cadastrar agora
						</a>
					</div>
					<div class="clear"></div>
				</div>
			</li>
			<li class="col-md-3 col-xs-12">
				<div class="box box-passo-a-passo mx-2 my-3">
				<!-- <div class="icon"><span class="sprite ico-02"></span></div> -->
					<h1 class="contagem">2</h1>
					<div class="desc">
					<img src="{{ asset('hotsite/img/passos/cpf.svg') }}" alt="Veja se sua dívida está conosco a avalie as nossas propostas de negociação">
						<p>
							Veja se sua dívida está conosco a avalie as nossas propostas
						</p>
						<a href="/login" class="btn-success btn-cadastro-hotsite" title="Inserir créditos">
							Já sou cadastrado
						</a>
					</div>
					<div class="clear"></div>
				</div>
			</li>
			<li class="col-md-3 col-xs-12">
				<div class="box box-passo-a-passo mx-2 my-3">
					<!-- <div class="icon"><span class="sprite ico-03"></span></div> -->
					<h1 class="contagem">3</h1>
					<div class="desc">
					<img src="{{ asset('hotsite/img/passos/calcular.svg') }}" alt="Escolha a melhor proposta de negociação">
						<p>
							Escolha a melhor proposta de negociação para quitar sua dívida
						</p>
						<a href="/login" class="btn-success btn-cadastro-hotsite" title="minha conta">
							Acessar conta
						</a>
					</div>
					<div class="clear"></div>
				</div>
			</li>
			<li class="col-md-3 col-xs-12">
				<div class="box box-passo-a-passo mx-2 my-3">
					<!-- <div class="icon"><span class="sprite ico-04"></span></div> -->
					<h1 class="contagem">4</h1>
					<div class="desc">
					<img src="{{ asset('hotsite/img/passos/ok.svg') }}" alt="Pronto! Acordo fechado de forma rápida e segura">
						<p>
							Pronto! Acordo fechado de forma rápida e segura
						</p>
						<a href="/cadastro" class="btn-success btn-cadastro-hotsite" title="ver consultas">
							Quero saber mais
						</a>
					</div>
					<div class="clear"></div>
				</div>
			</li>
		</ul>
	</div>
</section>

<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
<!-- &&&&&&&&&&&&&&&&&&&&&&&&&  Seção Passo a Passo  &&&&&&&&&&&&&&&&&&&&&&&& -->
<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->

<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&  Seção FAQ  &&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->

<section id="section-faq" class="section-faq">
	<div class="container">
		<h4 class="title text-center mb-5">Dúvidas frequentes</h4>
		<div class="accordion" id="accordionFaq">
			<div class="card" {!! (is_object($hotsite) && !empty($hotsite->cor_fundo_banner)) ? 'style="background: ' . $hotsite->cor_fundo_banner . '!important;"' : '' !!}>
				<div class="card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" >
					<span class="title">Por que a minha dívida não está na {{ $tituloSite }}?</span>
					<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
				</div>
				<div id="collapseOne" class="collapse" data-parent="#accordionFaq">
					<div class="card-body">
						A {{ $tituloSite }} vem fechando parcerias com empresas e carteiras variadas. Se você não encontrou a sua dívida por aqui, é por que ainda não administramos a carteira na qual ela se encontra.
					</div>
				</div>
			</div>
			<div class="card" {!! (is_object($hotsite) && !empty($hotsite->cor_fundo_banner)) ? 'style="background: ' . $hotsite->cor_fundo_banner . '!important;"' : '' !!}>
				<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" {!! (is_object($hotsite) && !empty($hotsite->cor_fundo_banner)) ? 'style="background: ' . $hotsite->cor_fundo_banner . '!important;"' : '' !!}>
					<span class="title">Preciso pagar para acessar minhas dívidas?</span>
					<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
				</div>
				<div id="collapseTwo" class="collapse" data-parent="#accordionFaq">
					<div class="card-body">
						Não! O portal {{ $tituloSite }} é de uso totalmente gratuito para ver suas dívidas e suas negociações.
					</div>
				</div>
			</div>
			<div class="card" {!! (is_object($hotsite) && !empty($hotsite->cor_fundo_banner)) ? 'style="background: ' . $hotsite->cor_fundo_banner . '!important;"' : '' !!}>
				<div class="card-header collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" {!! (is_object($hotsite) && !empty($hotsite->cor_fundo_banner)) ? 'style="background: ' . $hotsite->cor_fundo_banner . '!important;"' : '' !!}>
					<span class="title">Após quantos dias do primeiro pagamento meu nome estará limpo?</span>
					<span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
				</div>
				<div id="collapseThree" class="collapse" data-parent="#accordionFaq">
					<div class="card-body">
					Seu nome estará limpo dentro de um prazo de até 05 dias úteis depois que o primeiro pagamento for confirmado. Mas se tiver outras dívidas que ainda não estão na {{ $tituloSite }}, seu nome pode não ser regularizado.
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&  Fim da Seção FAQ  &&&&&&&&&&&&&&&&&&&&&&&&& -->
<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->

<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&  Seção Negociacao  &&&&&&&&&&&&&&&&&&&&&&&&& -->
<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->

<section id="section-negociacao" class="section-negociacao gray-f">
	<div class="container">

		<div class="row  justify-content-center">
			<div class="col-lg-6">
				<h1 class="text-center">
					Não deixe para
					<span style="background-color: {{!! $hotsite->cor_fundo_banner !!}}">
						negociar sua dívida
					</span>
					  depois
				</h1>
				<p class="text-center">Digite já seu CPF ou CNPJ e aproveite os melhores descontos</p>
			</div>
		</div>

		<div class="row negociacao-form justify-content-center">
			<div class="col-lg-6">
				<form method="GET" action="{{ route('site.buscar-dividas') }}">
					{{ csrf_field() }}
					<input class="form-control" type="text" placeholder="Insira o CPF ou CNPJ" id="dividaCpfCnpj-negociacao" name="cpf_cnpj" value="CPF ou CNPJ">
					<input class="btn-success" type="submit" id="divida-btn" value="Continuar">
				</form>
			</div>
		</div>

	</div>
</section>

<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&  Seção Negociacao  &&&&&&&&&&&&&&&&&&&&&&&&& -->
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
      $('#dividaCpfCnpj-negociacao').mask(CpfCnpjMaskBehavior, cpfCnpjpOptions);
    })

  </script>

@endsection
