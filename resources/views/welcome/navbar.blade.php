{{-- <div id="search">
    <button type="button" class="close">×</button>
    <form method="POST" action="{{ route('car-search') }}">
        @csrf
        <input type="search" name="query" placeholder="Escribe la marca, modelo o año del auto(s) que buscas" />
        <button type="submit" class="primary-button" onclick="submit()">Buscar <i class="fa fa-search"></i></button>
    </form>
</div>
	
<header class="site-header wow fadeIn bg-dark" data-wow-duration="1s" >
    <div id="main-header" class="main-header">
        <div class="container clearfix "> --}}
            {{-- <div class="logo">
                <a href="index.html"></a>
            </div> --}}
            {{-- <div id='cssmenu'>
                <ul>
                    <li><a href="{{ route('welcome') }}">Inicio</a></li>
                    <li><a href='{{ route('contact.index') }}'>Contacto</a></li>
                    <li>
                        <a href="#search"><i class="fa fa-search"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header> --}}

<div id="search">
    <button type="button" class="close">×</button>
    <form method="POST" action="{{ route('car-search') }}">
        @csrf
        <input type="search" name="query" placeholder="Escribe la marca, modelo o año del auto(s) que buscas" />
        <button type="submit" class="primary-button" onclick="submit()">Buscar <i class="fa fa-search"></i></button>
    </form>
</div>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">

    <a class="navbar-brand" href="{{ route('welcome') }}">Car Dealer GT</a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbarColor01" style="">
        <ul class="navbar-nav ml-auto mr-4 py-2 align-items-center">
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('welcome') }}">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('contact.index') }}">Contacto</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#search"><i class="fa fa-search "></i></a>
        </li>
        </ul>
        {{-- <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Buscar</button>
        </form> --}}
    </div>
</nav>