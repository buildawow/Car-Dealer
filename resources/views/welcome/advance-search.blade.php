<section id="advance-search">
    <div class="features-search-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-lg-8 d-flex align-items-center justify-content-start" style="background: url({{ asset('assets/images/hero.jpg') }}); background-size: cover;height: 100vh">
                    <div class="pl-5 ml-5 d-none d-sm-none d-md-none d-lg-block">
                        <h1 class="text-white display-1 text-wrap">Carros de Agencia</h1>
                        <h1 class="text-white display-1">2017 - 2019</h1>
                    </div>
                    <div class="d-sm-block d-md-block d-lg-none mx-auto">
                        <h1 class="text-white text-wrap text-center">Carros de Agencia</h1>
                        <h1 class="text-white  text-center">2017 - 2019</h1>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4" >
                    <div class="search-content wow fadeIn py-5 h-100 " data-wow-duration="0.75s" >
                        <div class="d-flex flex-column h-100 justify-content-center">

                        
                            <div class="search-heading">
                                <div class="icon">
                                    <i class="fa fa-search"></i>
                                </div>
                                <div class="text-content">
                                    <h2>Busqueda Rapida</h2>
                                    <span>Coloca tus criterios de busqueda</span>
                                </div>
                            </div>
                            <div class="search-form">
                                <div class="row">
                                    <form action="{{ route('advance-search') }}" method="POST" class="w-100">
                                        @csrf
                                        <div class="col-md-12">       
                                            <div class="input-select">
                                                <select name="brand" id="brand">
                                                    <option disabled selected>Selecciona la Marca</option>
                                                        @foreach ($brands as $brand)
                                                            <option value="{{ $brand }}">{{ $brand }}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-12">       
                                            <div class="input-select">
                                                <select name="mark" id="mark">
                                                    <option value="-1">Selecciona el Modelo</option>
                                                        @foreach ($models as $model)
                                                            <option value="{{ $model }}">{{ $model }}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                        </div> --}}
                                        <div class="col-md-12">       
                                            <div class="input-select">
                                                <select name="min-price" id="min-price">
                                                    <option disabled selected>Precio Minimo</option>
                                                    <option value="30000">Q 30, 000</option>
                                                    <option value="40000">Q 40, 000</option>
                                                    <option value="50000">Q 50,000</option>
                                                    <option value="60000">Q 60,000</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">       
                                            <div class="input-select">
                                                <select name="max-price" id="max-price">
                                                    <option disabled selected>Precio Maximo</option>
                                                    <option value="30000">Q 30, 000</option>
                                                    <option value="40000">Q 40, 000</option>
                                                    <option value="50000">Q 50,000</option>
                                                    <option value="60000">Q 60,000</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="secondary-button">
                                                <button type="submit" class="btn btn-block" onclick="submit()">Buscar <i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
