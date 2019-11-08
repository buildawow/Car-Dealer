
<section class="top-slider-features wow fadeIn" data-wow-duration="1.5s">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slider-top-features">
                    <div id="owl-top-features" class="owl-carousel owl-theme">
                        @foreach ($cars as $car)
                        {{-- Car Item Card --}}
                        <div class="item car-item">
                            <div class="thumb-content">
                                <a href="single_car.html"><img src="{{ asset('storage/' . $car->picture ) }}" alt="{{ $car->brand }} {{ $car->model }}"></a>
                            </div>
                            <div class="down-content">
                                <a href="single_car.html"><h4>{{ $car->brand }} {{ $car->model }} {{ $car->year->format('Y') }}</h4></a>
                                <span>Q {{ $car->price }}</span>
                            </div>
                        </div>
                        {{-- End Car Item Card --}}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>