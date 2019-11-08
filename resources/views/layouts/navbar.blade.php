<nav class="navbar navbar-expand-md navbar-dark bg-dark">
<a class="navbar-brand" href="{{ route('dashboard') }}">Car Dealer Online</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
        {{-- <li class="nav-item mx-1">
            <a class="nav-link" href="#">Reporte de Vehiculos Disponibles</a>
        </li> --}}
        <li class="nav-item mx-1">
            <a class="nav-link" href="{{ route('car.index') }}" tabindex="-1" aria-disabled="true">Vehiculos</a>
        </li>
    </ul>
</div>
</nav>