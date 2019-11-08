@extends('layouts.admin-panel')

@section('content')

<div class="d-flex align-items-center justify-content-between mt-4">
    <h1>Vehiculos</h1>
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
                    <td>
                    @if ($car->availability)
                    <a href="{{ route('car.show', $car) }}"><span class="badge badge-primary p-2">Disponible</span></a>
                    @else
                    <a href="{{ route('car.show', $car) }}"><span class="badge badge-danger">No Disponible</span></a>
                    @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{ $cars->links() }}

    
@endsection