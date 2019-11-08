<div id="search">
    <button type="button" class="close">×</button>
    <form method="POST" action="{{ route('car-search') }}">
        @csrf
        <input type="search" name="query" placeholder="Escribe la marca, modelo o año del auto(s) que buscas" />
        <button type="submit" class="primary-button" onclick="submit()">Buscar <i class="fa fa-search"></i></button>
    </form>
</div>
	
<header class="site-header wow fadeIn bg-dark" data-wow-duration="1s" >
    <div id="main-header" class="main-header">
        <div class="container clearfix ">
            {{-- <div class="logo">
                <a href="index.html"></a>
            </div> --}}
            <div id='cssmenu'>
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
</header>