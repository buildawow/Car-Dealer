<section id="advance-search" class="mt-5">
    <div class="features-search-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="service-item wow fadeIn" data-wow-duration="0.75s">
                                <i class="fa fa-car"></i>
                                    <div class="text-content">
                                    <h6>Compra tu proximo auto</h6>
                                    <p>Manejamos buenos precios y una amplia gama.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item wow fadeIn" data-wow-duration="0.75s">
                                <i class="fa fa-search"></i>
                                    <div class="text-content">
                                    <h6>Aqui filtrar tu busqueda</h6>
                                    <p>Encuentra tu vehiculo esperado segun precio, año y modelo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item wow fadeIn" data-wow-duration="0.75s">
                                <i class="fa fa-users"></i>
                                    <div class="text-content">
                                    <h6>La mejor atencion</h6>
                                    <p>Te brindamos informacion rapida y detallada sobre el vehiculo que buscas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item wow fadeIn" data-wow-duration="0.75s">
                                <i class="fa fa-globe"></i>
                                    <div class="text-content">
                                    <h6>Las marcas de talla mundial</h6>
                                    <p>Contamos con las marcas de mayor confianza a nivel mundial.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="search-content wow fadeIn py-5" data-wow-duration="0.75s">
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
                                                <option value="-1">Selecciona la Marca</option>
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
                                                <option value="">Precio Minimo</option>
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
                                                <option value="">Precio Maximo</option>
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
</section>
