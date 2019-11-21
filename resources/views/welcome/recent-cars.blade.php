
	<section class="mt-3">
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
											<a 
												href="{{ route('car-detail', $car) }}" 
												style="font-size: 10px; 
												@if($car->availability == 'Disponible') 
													background-color: #00a6eb; color:white 
												@elseif($car->availability == 'No Disponible')
													background-color: #e74a3b; color:white 
												@endif" 
												>{{ $car->availability }}
											</a>
										</div>
										<div class="thumb-inner">
											<a href="{{ route('car-detail', $car) }}"><img src="{{ asset('storage/' . $car->picture) }}" alt="{{ $car->brand }} {{ $car->model }}" onerror="this.onerror=null;this.src='{{ asset('assets/images/image-placeholder.png') }}';" class="img-fluid"></a>
										</div>
									</div>
									<div class="down-content">
										<a href="{{ route('car-detail', $car) }}"><h4>{{ $car->brand }} {{ $car->model }}</h4></a>
										<span>Q{{ $car->price }}</span>
										<p>Informacion del vehiculo</p>
										<ul class="car-info">
											<li><div class="item"><i class="flaticon flaticon-calendar"></i><p>{{ $car->year->format('Y') }}</p></div></li>
											<li><div class="item"><i class="flaticon flaticon-speed"></i><p>{{ $car->brand }}</p></div></li>
											<li><div class="item"><i class="flaticon flaticon-car"></i><p>{{ $car->model }}</p></div></li>
											<li><div class="item"><i class="flaticon flaticon-road"></i><p>{{ $car->mileage }} km</p></div></li>
										</ul>
									</div>
								</div>
							</div>
						@endforeach
						{{-- End Car Column --}}

					</div>
				</div>

				<style>
					.page-link{
						color: #1e1e1e !important;
						background-color: #f4c23d !important;
						padding-top: 10px;
						padding-bottom: 10px;
						padding-right: 15px;
						padding-left: 15px;
						margin-left: 2px;
						margin-right: 2px;
    					border-radius: 4px;
					}
					.page-link:hover{
						color: white !important;
						background-color: #2959ad !important;
						background-color: #2959ad !important;
					}
					.page-item.active .page-link{
						color: white !important;
						background-color: #2959ad !important;
						border-color: #2959ad !important;
					}
					.page-link:active{
						color: white !important;
						background-color: #2959ad !important;
						border-color: #2959ad !important;
					}
				</style>
				
				<div class="mb-5">{{ $cars->links() }}</div>

			</div>
		</div>
	</section>