@include('welcome.header')

@include('welcome.preloader')

@include('welcome.navbar')

@include('welcome.recent-cars')

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

@include('welcome.footer')