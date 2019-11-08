@extends('layouts.admin-panel')

@section('content')

<form class="mt-5">
<div class="d-flex align-items-center justify-content-between">
    <h1>Vehiculo / {{ $car->model }} {{ $car->year->format('Y') }}</h1>
    <img src="{{ asset('storage/' . $car->picture) }}" alt="" class="img-fluid" width="150px" height="150px" onerror="this.onerror=null;this.src='{{ asset('assets/images/image-placeholder.svg') }}';">
</div>
<hr>
<div class="form-group">
    <label for="brand">Marca</label>
    <input readonly type="text" class="form-control" id="brand" name="brand" value="{{ old('brand', $car->brand) }}">
</div>
<div class="form-group">
    <label for="model">Modelo</label>
    <input readonly type="text" class="form-control" id="model" name="model" value="{{ old('model', $car->model) }}">
</div>
<div class="form-group">
    <label for="year">Año</label>
    <input readonly type="date" class="form-control" id="year" name="year" value="{{ old('year', $car->year->format('Y-m-d')) }}">
</div>
<div class="form-group">
    <label for="price">Precio</label>
    <input readonly type="text" class="form-control" id="price" name="price" value="{{ old('price', $car->price) }}">
</div>
<div class="form-group">
    <label for="availability">Disponibilidad</label>
    <input readonly type="text" class="form-control" id="availability" name="availability" value="{{ old('availability', $car->availability == 1 ? 'Disponible' : 'No Disponible') }}">
</div>
<div class="d-flex align-items-center justify-content-between">
    <a class="btn btn-danger text-white" href="#" onclick="document.getElementById('deleteForm').submit();">Eliminar</a>
    <a href="{{ route('car.edit', $car) }}" class="btn btn-primary">Editar</a>
</div>
</form>

<form action="{{ route('car.destroy', $car) }}" method="POST" id="deleteForm" class="d-none">
    @csrf @method('DELETE')
</form>
    
@endsection

{{-- //TODO
5 AGREGAR MANEJO DE IMAGEN 
6 AGREGAR VISTAS --}}