@include('welcome.header')
	
@include('welcome.preloader')

@include('welcome.navbar')

<style>
.img-car-background {
    position: relative;
	margin-left: 10px;
    width:  600px;
    height: 120px;
    background-position: 50% 50% !important;
    background-repeat:   no-repeat !important;
    background-size:     cover !important;
	cursor: pointer;
}
.banner {
	height: 430px;
	/* width:100%;  */
	background-repeat: no-repeat !important;
	background-position: center !important; 
	background-size:cover !important;
}
@media only screen and (max-width: 1000px) {
	.img-car-background{
		height: 40px;
	}
	.banner{
		height: 200px;
	}
}
</style>

<div class="blog-page" >
	<div class="container">
		<div class="row">

			<div class="col-md-8">
				<div class="single-post">
					<div class="item">
						{{-- <img id="banner" src="{{ asset('storage/' . $car->picture) }}" alt=""> --}}
						<div class="banner" style="background: url({{ asset('storage/' . $car->picture) }});" ></div>
						<div class="down-content">
							<h4>{{ $car->brand }} {{ $car->model }}</h4>
							<ul>
								<li><span><em>Marca:</em><a href="#">{{ $car->brand }}</a></span></li>
								<li><span><em>Modelo:</em>{{ $car->model }}</span></li>
								<li><span><em>Año:</em><a href="#">{{ $car->year->format('Y') }}</a></span></li>
								<li><span><em>Kilometraje:</em><a href="#">{{ $car->mileage }} km</a></li>
							</ul>
							<div class="d-flex flex-row align-items-center justify-content-left">
								
								<em class="mr-5">{{ $car->detail() }}</em>

								<div class="img-car-background" style="background: url({{ asset('storage/' . $car->picture) }})"></div>

								@foreach ($galleryImages as $gallery)

									<div class="img-car-background" style="background: url({{ asset('storage/' . $gallery->image) }})"></div>

								@endforeach
								
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="sidebar-widgets">
					<div class="sidebar-widget">

						<form method="POST" action="{{ route('car-search') }}">
							@csrf
							<div class="search-widget">
							<input type="search" name="query" placeholder="Escribe la marca, modelo o año del auto(s) que buscas" />
							</div>
							<button type="submit" class="primary-button d-none" onclick="submit()">Buscar <i class="fa fa-search"></i></button>
						</form>							

					</div>

					<div class="sidebar-widget">
						<div class="categories">
							<div class="sidebar-heading">
								<h4>MARCAS</h4>
							</div>
							<ul>
								@foreach ($brands as $brand)
									<li><a href="{{ route('list-by-brand', $brand) }}">{{ $brand }}</a></li>
								@endforeach
							</ul>
						</div>
					</div>

					<div class="sidebar-widget">
						<div class="tags">
							<div class="sidebar-heading">
								<h4>MODELOS</h4>
							</div>
							<ul>
								@foreach ($models as $model)
								<li><a href="{{ route('list-by-model', $model) }}">{{ $model }}</a></li>
								@endforeach
							</ul>
						</div>
					</div>

				</div>
			</div>
			
		</div>
	</div>
</div>

    <section>
        <div class="call-to-action wow fadeIn" data-wow-duration="0.75s">
            <div class="container">
                <div class="call-to-action-content">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Puedes Encontrar el carro que tanto buscas al mejor <em>precio</em> </p>
                            <div class="secondary-button">
                                <a href="{{ route('welcome') }}">Buscar Auto <i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</section>
	
	<script>
		function changeImage(e){
			var image = e.src
			document.querySelector('#banner').src = image
		}
	</script>

@include('welcome.footer')