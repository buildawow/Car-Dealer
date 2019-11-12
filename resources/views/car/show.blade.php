@extends('layouts.admin-panel')

@section('content')

<div class="row">

<div class="d-flex align-items-center justify-content-center w-100 mt-5">
    <a href="{{ route('car.index') }}" class="btn btn-info">Regresar</a>
    <h1 class="mx-auto">Vehiculo / Crear</h1>
</div>

<div class="col-md-8">
    <form method="POST" action="{{ route('car.store') }}" class="mt-5" enctype="multipart/form-data">
        @csrf
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
            <label for="price">Placas</label>
            <input readonly type="text" class="form-control" id="plates" name="plates" value="{{ old('plates', $car->plates) }}">
        </div>
    <div class="form-group">
        <label for="mileage">Kilometraje</label>
        <input readonly type="number" class="form-control" id="mileage" name="mileage" value="{{ old('mileage', $car->mileage) }}">
    </div>
    <div class="form-group">
        <label for="availability">Disponibilidad</label>
        <input readonly type="number" class="form-control" id="mileage" name="mileage" value="{{ old('mileage', $car->availability) }}">
    </div>
    <input type="file" id="picture" name="picture" class="form-control d-none" >
    <div class="d-flex align-items-center justify-content-between">
        <a class="btn btn-danger text-white" href="#" onclick="document.getElementById('deleteForm').submit();">Eliminar</a>
        <a href="{{ route('car.edit', $car) }}" class="btn btn-primary">Editar</a>
    </div>
    </form>
    <form action="{{ route('car.destroy', $car) }}" method="POST" id="deleteForm" class="d-none">
        @csrf @method('DELETE')
    </form>
</div>

<div class="col-md-4 order-md-2 mt-5">

    <ul class="list-group mb-3">

        <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div class="w-100">
                <h6 class="my-0 text-center">Imagen Destacada</h6>
                <div id="main-image"  class="d-flex align-items-center justify-content-center">
                    <img id="output" src="{{ asset('storage/' . $car->picture) }}" class="my-1 img-fluid" onerror="this.onerror=null;this.src='{{ asset('assets/images/image-placeholder.svg') }}';" height="200px" width="200px" />
                </div>
            </div>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div class="w-100">
                <h6 class="my-0 text-center">Galeria de Imagenes</h6>
                <div id="gallery" class="d-flex flex-wrap align-items-center justify-content-between" >
                    @foreach ($car->galleryImages as $galleryImage)
                        <img 
                            src="{{ asset('storage/' . $galleryImage->image) }}" 
                            id="main-image" 
                            class="my-1 img-fluid" 
                            height="100px" width="100px" 
                            onerror="this.onerror=null;this.src='{{ asset('assets/images/image-placeholder.svg') }}';" 
                        />
                    @endforeach
                </div>
            </div>
        </li>

    </ul>

  </div>

</div>

<script>

    document.querySelector('#picture').addEventListener('change', function(e){
        const image = document.querySelector('#output')
        image.src = URL.createObjectURL(e.target.files[0])
    })
    
</script>
    
@endsection