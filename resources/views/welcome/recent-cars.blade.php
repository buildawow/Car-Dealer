
	<section>
		<div class="recent-cars">
			<div class="container">
				<div class="recent-car-content">
					<div class="row">
						<div class="col-md-12">
							<div class="section-heading">
								<div class="icon">
									<i class="fa fa-car"></i>
								</div>
								<div class="text-content">
									<h2>Autos Recientes</h2>
									<span>Estos son algunos de los autos mas recientes en stock</span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">

						{{-- Car Column --}}
						@foreach ($cars as $car)
							<div class="col-md-4 col-sm-6">
								<div class="car-item wow fadeIn" data-wow-duration="0.75s">
									<div class="thumb-content">
										<div class="car-banner">
											<a href="single_car.html">En Venta</a>
										</div>
										<div class="thumb-inner">
											<a href="single_car.html"><img src="{{ asset('storage/' . $car->picture) }}" alt="{{ $car->brand }} {{ $car->model }}"></a>
										</div>
									</div>
									<div class="down-content">
										<a href="single_car.html"><h4>{{ $car->brand }} {{ $car->model }}</h4></a>
										<span>Q{{ $car->price }}</span>
										<p>Informacion del vehiculo</p>
										<ul class="car-info">
											<li><div class="item"><i class="flaticon flaticon-calendar"></i><p>{{ $car->year->format('Y') }}</p></div></li>
											<li><div class="item"><i class="flaticon flaticon-speed"></i><p>{{ $car->brand }}</p></div></li>
											<li><div class="item"><i class="flaticon flaticon-fuel"></i><p>{{ $car->model }}</p></div></li>
											<li><div class="item"><i class="flaticon flaticon-road"></i><p>26.00km</p></div></li>
										</ul>
									</div>
								</div>
							</div>
						@endforeach
						{{-- End Car Column --}}

					</div>
				</div>
			</div>
		</div>
	</section>