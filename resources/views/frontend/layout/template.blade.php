<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title></title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	{{-- CSS --}}
	<link rel="stylesheet" type="text/css" href="{{ asset('css/uikit.css') }}"> 
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
	{{-- ICONOS --}}
	<script defer src="https://use.fontawesome.com/releases/v5.4.1/js/all.js" integrity="sha384-L469/ELG4Bg9sDQbl0hvjMq8pOcqFgkSpwhwnslzvVVGpDjYJ6wJJyYjvG3u8XW7" crossorigin="anonymous"></script>


</head>
<body class="">
	<div class="uk-offcanvas-content">
		
	
	{{-- PRE-HEADER --}}
	<div class="uk-container-expand uk-background-muted uk-flex uk-flex-between uk-visible@m p-05 " >
		<div class="">
			<small class="">
				<i class="fas fa-phone"></i> (+8400) 123 456 789 
			</small>
			<small class="uk-margin-small-left">
				<i class="fas fa-envelope"></i> Email: hello@company.co
			</small>
		</div>
		<div class="">
			<small>
				<a href="" title="" class="c-indianred"><i class="fa fa-map-marker-alt"></i> Store Locator </a>
			</small>
			
		</div>
	</div>
	{{-- FIN PRE-HEADER --}}
	{{-- ////////////// --}}
	{{-- HEADER --}}
	<header class="uk-background-default" uk-sticky>
		<div class="uk-container uk-flex uk-flex-between uk-margin-small-top uk-margin-small-bottom uk-padding-small-left uk-padding-small-right">
			{{-- ICONOS RESPONSIVE (SOLO VISIBLE EN DISPOSITIVOS PEQUEÑOS)--}}
			<div class="uk-width-auto uk-flex uk-flex-center uk-flex-middle uk-hidden@m uk-margin-small-left">
				<a href="" title="" class="c-black" uk-toggle="target: #offcanvas-push">
					<i class="fa fa-bars uk-margin-small-right font-icon" ></i>
				</a>
				<a href="" title="" class="c-black">
					<i class="fa fa-search font-icon" ></i>
				</a>
			</div>
			{{--  --}}
			{{-- BUSCADOR SOLO VISIBLE EN DISPOSITIVOS GRANDES--}}
			<div class="uk-width-1-1 uk-flex uk-flex-center uk-flex-middle uk-visible@m">
				<div class="uk-inline ">
					<span class="fas fa-search uk-form-icon uk-margin-small-top uk-margin-small-left"></span>
				    <input class="uk-input" name="search" placeholder="Buscar en la tienda">
				</div>
			</div>
			{{-- LOGO --}}
			<div class="uk-width-small logo uk-flex-first@m">
				<a href="" title="">
					<img src="{{ asset('img/logo.png') }}" class="uk-responsive-width" alt="">
				</a>
			</div>
			{{-- ICONOS --}}
			<div class="uk-width-auto uk-flex uk-flex-right uk-flex-middle">
				<span class="">
					<a href="" class="c-black">
						<i class="far fa-heart font-icon" ></i> 
					</a>
				</span>
				<span class=" uk-margin-small-left uk-margin-small-right">
					<a href=""  class="uk-flex-inline uk-flex-middle uk-flex-center c-black">
						<i class="fa fa-shopping-cart font-icon" ></i> 
						<div class="uk-flex-middle uk-flex uk-flex-center circle" >
							<small>
								<b class="c-white" >0</b>
							</small>	
						</div>
					</a>
				</span>
			</div>
		</div>
	</header>
	{{-- FIN HEADER --}}
	{{-- MENU --}}
		{{-- MENU  --}}
		
			<nav class="  bg-primary uk-visible@m" style="height: 50px" uk-navbar>
				<div class=" uk-container uk-container-expand uk-flex uk-flex-between" style="width: 90%">
					<div class="uk-width-auto " >
				        <ul class="uk-navbar-nav " >
				            <li class="uk-active"><a href="#">Inicio</a></li>
				            <li>
				                <a href="#">Categorias</a>
				                <div class="uk-navbar-dropdown uk-width-1-2">
				                    <ul class="uk-nav uk-navbar-dropdown-nav">
				                        <li><a href="#">Categoría 1</a></li>
				                        <li><a href="#">Categoría 2</a></li>
				                        <li><a href="#">Categoría 3</a></li>
				                        <li><a href="#">Categoría 4</a></li>
				                        <li><a href="#">Categoría 5</a></li>
				                        <li><a href="#">Categoría 6</a></li>
				                    </ul>
				                </div>
				            </li>
				            <li><a href="#">Tus Compras</a></li>
				        </ul>
				    </div>
				
				    <div class="uk-width-auto">
				        <ul class="uk-navbar-nav">
				            <li class=""><a href="#"><i class="fa fa-plus margin-xsmall-right"></i>  Crea tu cuenta</a></li>
				            <li><a href="#"><i class="fa fa-user margin-xsmall-right"></i> Ingresa</a></li>
				            <li><a href="#"><i class="fa fa-info margin-xsmall-right"></i> Ayuda</a></li>
				        </ul>
				    </div>
				</div>
			    

			</nav>
		
			
		{{--  --}}
		{{-- MENU OCULTO --}}
	    <div id="offcanvas-push" uk-offcanvas="mode: push; overlay: true">
	        <div class="uk-offcanvas-bar ">

	            <button class="uk-offcanvas-close " type="button" uk-close></button>

	            <ul class="uk-nav uk-nav-primary uk-margin-auto-vertical">
	                <li class="{{-- uk-active --}}"><a href="#">Inicio</a></li>
	                <li class="{{-- uk-active --}}"><a href="#">Categorias</a></li>
	                <li class="{{-- uk-active --}}"><a href="#">Tus Compras</a></li>

	                <li class="uk-nav-divider"></li>
					<li class="{{-- uk-active --}}"><a href="#"><i class="fa fa-plus"></i> Crea tu cuenta</a></li>
					<li class="{{-- uk-active --}}"><a href="#"><i class="fa fa-user"></i> Ingresa</a></li>
					<li class="{{-- uk-active --}}"><a href="#"><i class="fa fa-info"></i> Ayuda</a></li>


	                {{-- <li class="uk-parent">
	                    <a href="#">Parent</a>
	                    <ul class="uk-nav-sub">
	                        <li><a href="#">Sub item</a></li>
	                        <li><a href="#">Sub item</a></li>
	                    </ul>
	                </li> --}}
	                {{-- <li class="uk-nav-header">Header</li> --}}
	            </ul>

	            <div class="uk-position-bottom uk-padding-small">
	            	<div class="">
						<small class="">
							<i class="fas fa-phone"></i> (+8400) 123 456 789 
						</small>
						<br>
						<small class="">
							<i class="fas fa-envelope"></i> Email: hello@company.co
						</small>
					</div>
					<div class="">
						<small>
							<a href="" title="" class="c-indianred"><i class="fa fa-map-marker-alt"></i> Store Locator </a>
						</small>
					</div>
	            </div>

	        </div>
	    </div>
	    {{-- FIN MENU RESPONSIVE --}}
	{{-- FIN MENU --}}
	{{-- SLIDER --}}
	<div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow="min-height:100; max-height: 400; animation: push; autoplay: true">
	    <ul class="uk-slideshow-items">
	        <li>
	            <img src="{{ asset('img/1.jpg') }}" alt="" uk-cover>
	            <div class="uk-position-center uk-position-small position-right uk-flex uk-flex-center uk-text-center">
	                <h1 uk-slideshow-parallax="x: 200,-200" class="text-shadow title-head" >Audífonos BitOp</h1>
	                <div class="uk-flex-inline" uk-slideshow-parallax="x: 300,-300">
	                	<p class="tachado text-shadow uk-margin-remove ">123.000 Gs.</p>
	                	<h3 class="text-shadow uk-margin-remove subtitle-head">100.000 Gs.</h3>
	                </div>
	            </div>
	        </li>
	        <li>
	            <img src="{{ asset('img/2.jpg') }}" alt="" uk-cover>
	            <div class="uk-position-center uk-position-small position-right uk-flex uk-flex-center uk-text-center">
	                <h1 uk-slideshow-parallax="x: 200,-200" class="text-shadow title-head" >Sombreros de Calabaza</h1>
	                <div class="uk-flex-inline" uk-slideshow-parallax="x: 300,-300">
	                	<p class="tachado text-shadow uk-margin-remove ">123.000 Gs.</p>
	                	<h3 class="text-shadow uk-margin-remove subtitle-head">100.000 Gs.</h3>
	                </div>
	            </div>
	        </li>

	    </ul>

	    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
	    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
	 	<ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>
	</div>

	{{-- FIN SLIDER --}}


</div>
<script src="{{ asset('js/jQuery.min.js') }}" type="text/javascript" charset="utf-8" async defer></script>
<script src="{{ asset('js/uikit.js') }}" type="text/javascript" charset="utf-8" async defer></script>
<script src="{{ asset('js/uikit-icons.min.js') }}" type="text/javascript" charset="utf-8" async defer></script>
<script src="{{ asset('js/main.js') }}" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>