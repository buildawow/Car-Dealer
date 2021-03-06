@extends('layouts.admin-panel')

@section('content')
<h1 class="text-center mt-5">Vehiculos</h1>
<div class="d-flex align-items-center justify-content-between mt-4">
    <form class="form-inline" action="{{ route('car-admin-search') }}" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control mb-2 shadow-sm" name="query" placeholder="Buscar">
        </div>
    </form>
    <a href="{{ route('car.create') }}" class="btn btn-outline-primary">Nuevo</a>
</div>
<hr>
<div class="table-responsive">
    <table class="table table-striped mt-4">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Marca</th>
            <th scope="col">Modelo</th>
            <th scope="col">Año</th>
            <th scope="col">Precio</th>
            <th scope="col">Placa</th>
            <th scope="col">Disponibilidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <td><a class="text-secondary text-decoration-none" href="{{ route('car.show', $car) }}">{{ $car->brand }}</a></td>
                    <td><a class="text-secondary text-decoration-none" href="{{ route('car.show', $car) }}">{{ $car->model }}</a></td>
                    <td><a class="text-secondary text-decoration-none" href="{{ route('car.show', $car) }}">{{ $car->year->format('Y') }}</a></td>
                    <td><a class="text-secondary text-decoration-none" href="{{ route('car.show', $car) }}">{{ $car->price }}</a></td>
                    <td><a class="text-secondary text-decoration-none" href="{{ route('car.show', $car) }}">{{ $car->plates }}</a></td>
                    <td>
                        <a href="{{ route('car.show', $car) }}"><span class="badge @if($car->availability == 'Disponible') badge-primary @elseif($car->availability == 'Vendido') badge-warning @else badge-danger @endif p-2">{{ $car->availability }}</span></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{ $cars->links() }}

    
@endsection