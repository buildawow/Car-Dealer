{{-- @extends('layouts.admin-panel')

@section('content')
    <form action="{{ route('contact.store') }}" method="POST" class="mt-4">
        @csrf
        <h1>Contacto</h1>
        <hr>
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" autofocus>
            @error('name')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
            @error('email')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="subject">Tema</label>
            <input type="text" class="form-control" id="subject" name="subject" value="{{ old('subject') }}">
            @error('subject')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="comment">Comentario</label>
            <textarea id="comment" name="comment" cols="30" rows="10" class="form-control">{{ old('comment') }}</textarea>
            @error('comment')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button class="btn btn-primary btn-block btn-lg mt-4" type="submit">Enviar</button>

    </form>
@endsection --}}


{{-- <!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Car Dealer Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Acropos - Car Dealer HTML5 Template</title>

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- Slider Pro Css -->
	<link rel="stylesheet" href="assets/css/sliderPro.css">
	<!-- Owl Carousel Css -->
	<link rel="stylesheet" href="assets/css/owl-carousel.css">
	<!-- Flat Icons Css -->
	<link rel="stylesheet" href="assets/css/flaticon.css">
	<!-- Animated Css -->
	<link rel="stylesheet" href="assets/css/animated.css">


	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	
	
	<div class="preloader">
        <div class="preloader-bounce">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
	
	<div id="search">
	    <button type="button" class="close">×</button>
	    <form>
	        <input type="search" value="" placeholder="type keyword(s) here" />
	        <button type="submit" class="primary-button"><a href="#">Search <i class="fa fa-search"></i></a></button>
	    </form>
	</div>
	
	<header class="site-header wow fadeIn" data-wow-duration="1s">
		<div id="main-header" class="main-header">
			<div class="container clearfix">
				<div class="logo">
					<a href="index.html"></a>
				</div>
				<div id='cssmenu'>
					<ul>
					   	<li><a href='index.html'>Homepage</a></li>
					   	<li class='active'><a href='#'>Car Listing</a>
					      	<ul>
					         	<li><a href='#'>Sidebar</a>
					            	<ul>
					               		<li><a href='car_listing_sidebar.html'>Car Listing</a></li>
					               		<li><a href='car_grid_sidebar.html'>Car Grid</a></li>
					            	</ul>
					        	</li>
					         	<li><a href='#'>No Sidebar</a>
					            	<ul>
					               		<li><a href='car_listing_no_sidebar.html'>Car Listing</a></li>
					               		<li><a href='car_grid_no_sidebar.html'>Car Grid</a></li>
					            	</ul>
					         	</li>
					         	<li><a href="single_car.html">Single Car</a></li>
					      	</ul>
					   	</li>
					   	<li class='active'><a href='#'>Blog</a>
					      	<ul>
					         	<li><a href='#'>Sidebar</a>
					            	<ul>
					               		<li><a href='blog_listing_sidebar.html'>Blog Classic</a></li>
					               		<li><a href='blog_grid_sidebar.html'>Blog Grid</a></li>
					            	</ul>
					         	</li>
					         	<li><a href='#'>No Sidebar</a>
					            	<ul>
					               		<li><a href='blog_listing_no_sidebar.html'>Blog Classic</a></li>
					               		<li><a href='blog_grid_no_sidebar.html'>Blog Grid</a></li>
					            	</ul>
					         	</li>
					         	<li><a href="single_post.html">Single Post</a></li>
					      	</ul>		
					   </li>
					   <li><a href='about_us.html'>About Us</a></li>
					   <li><a href='contact_us.html'>Contact Us</a></li>
					   <li>
					   		<a href="#search"><i class="fa fa-search"></i></a>
					   </li>
					</ul>
				</div>
			</div>
		</div>
    </header> --}}
    
    @include('welcome.header')
	
    @include('welcome.preloader')
	
    @include('welcome.navbar')


	<div class="page-heading wow fadeIn bg-dark" data-wow-duration="0.5s">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="heading-content-bg wow fadeIn" data-wow-delay="0.75s" data-wow-duration="1s">
						<div class="row">
							<div class="heading-content col-md-12">
								<p><a href="{{ route('welcome') }}">Inicio</a> / <em> Contacto</em></p>
								<h2>Contactanos <em>.</em></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<section>
		<div class="contact-content wow fadeIn" data-wow-delay="0.5s" data-wow-duration="1s">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="send-message">
							<div class="sep-section-heading">
								<h2>Envianos un <em>Mensaje</em></h2>
							</div>
							<form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
								<div class="row">
									<div class=" col-md-4 col-sm-4 col-xs-6">
										<input type="text" class="blog-search-field" name="s" placeholder="Tu nombre..." value="" >
									</div>
									<div class="col-md-4 col-sm-4 col-xs-6">
										<input type="text" class="blog-search-field" name="s" placeholder="Tu Correo electronico..." value="">
									</div>
									<div class="col-md-4 col-sm-4 col-xs-12">
										<input type="text" class="subject" name="s" placeholder="Tema..." value="">
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 col-sm-12">
										<textarea id="message" class="input" name="message" placeholder="Mensaje..."></textarea>
									</div>
								</div>
								<div class="row">
									<div class="submit-coment col-md-12">
										<div class="primary-button">
											<a href="#">Enviar <i class="fa fa-paper-plane"></i></a>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-md-4">
						<div class="contact-info">
							<div class="sep-section-heading">
								<h2>Informacion de <em>Contacto</em></h2>
							</div>
							<p>Puedes visitarnos en zona 4, edificio el TEC</p>
							<div class="info-list">
								<ul>
									<li><i class="fa fa-phone"></i><span>+502 31022441</span></li>
									<li><i class="fa fa-envelope"></i><span>soporte@car-dealer.com</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	@include('welcome.footer')
	

	<script src="assets/js/jquery-1.11.0.min.js"></script>

	<!-- Slider Pro Js -->
	<script src="assets/js/sliderpro.min.js"></script>

	<!-- Slick Slider Js -->
	<script src="assets/js/slick.js"></script>

	<!-- Owl Carousel Js -->
    <script src="assets/js/owl.carousel.min.js"></script>

	<!-- Boostrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Boostrap Js -->
    <script src="assets/js/wow.animation.js"></script>

	<!-- Custom Js -->
    <script src="assets/js/custom.js"></script>

    <!-- Google Map -->
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="assets/js/jquery.gmap3.min.js"></script>

	<!-- Google Map Init-->
   <script>
		// Initialize and add the map
		function initMap() {
		  // The location of Uluru
		  var uluru = {lat: 50.688363, lng: 10.436397};
		  // The map, centered at Uluru
		  var map = new google.maps.Map(
		      document.getElementById('map'), {zoom: 4, center: uluru});
		  // The marker, positioned at Uluru
		  var marker = new google.maps.Marker({position: uluru, map: map});
		}
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap">
    </script>

</body>
</html>