@extends('layouts.admin-panel')

@section('content')

<form method="POST" action="{{ route('car.update', $car) }}" class="mt-5" enctype="multipart/form-data">
    @csrf @method('PUT')
    <div class="d-flex align-items-center justify-content-between">
        <h1>Vehiculo / {{ $car->model }} {{ $car->year->format('Y') }}</h1>
        <img src="{{ asset('storage/' . $car->picture) }}" alt="{{ $car->brand }} {{ $car->model }}" id="output" class="img-fluid" width="150px" height="150px" onerror="this.onerror=null;this.src='{{ asset('assets/images/image-placeholder.svg') }}';" >
        <label for="picture" class="btn btn-outline-info" id="pictureLabel" >Cambiar Foto</label>
        <input type="file" id="picture" name="picture" class="form-control d-none" >
        @error('picture')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
<hr>
<div class="form-group">
    <label for="brand">Marca</label>
    <input type="text" class="form-control" id="brand" name="brand" value="{{ old('brand', $car->brand) }}">
    @error('brand')
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    <label for="model">Modelo</label>
    <input type="text" class="form-control" id="model" name="model" value="{{ old('model', $car->model) }}">
    @error('model')
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    <label for="year">Año</label>
    <input type="date" class="form-control" id="year" name="year" value="{{ old('year', $car->year->format('Y-m-d')) }}">
    @error('year')
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    <label for="price">Precio</label>
    <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $car->price) }}">
    @error('price')
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    <label for="availability">Disponibilidad</label>
    <select name="availability" id="availability" class="form-control">
        <option value="1" {{ $car->availability == 1 ? 'selected' : '' }}>Disponible</option>
        <option value="0" {{ $car->availability == 0 ? 'selected' : '' }}>No Disponible</option>
    </select>
    @error('availability')
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<button type="submit" class="btn btn-primary">Actualizar</button>
</form>

<script>

document.querySelector('#picture').addEventListener('change', function(e){
    fileName = e.target.files[0].name
    document.querySelector('#pictureLabel').innerHTML = fileName;
    const image = document.querySelector('#output')
    image.src = URL.createObjectURL(e.target.files[0])
})

</script>
    
@endsection