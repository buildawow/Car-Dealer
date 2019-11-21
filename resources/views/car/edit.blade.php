{{-- @extends('layouts.admin-panel')

@section('content')

<form method="POST" action="{{ route('car.update', $car) }}" class="mt-5" enctype="multipart/form-data">
    @csrf @method('PUT')
    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ route('car.show', $car) }}" class="btn btn-info">Regresar</a>
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
    <label for="mileage">Kilometraje</label>
    <input type="number" class="form-control" id="mileage" name="mileage" value="{{ old('mileage', $car->mileage) }}">
    @error('mileage')
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
    
@endsection --}}












@extends('layouts.admin-panel')

@section('content')

<div class="row">

<div class="d-flex align-items-center justify-content-center w-100 mt-5">
    <a href="{{ route('car.index') }}" class="btn btn-info">Regresar</a>
    <h1 class="mx-auto">Vehiculo / Crear</h1>
</div>

<div class="col-md-8">
    <form method="POST" action="{{ route('car.update', $car) }}" class="mt-5" enctype="multipart/form-data">
        @csrf @method('PUT')
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
        <label for="plates">Placas</label>
        <input type="text" class="form-control" id="plates" name="plates" value="{{ old('plates', $car->plates) }}">
        @error('plates')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="mileage">Kilometraje</label>
        <input type="number" class="form-control" id="mileage" name="mileage" value="{{ old('mileage', $car->mileage) }}">
        @error('mileage')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="availability">Disponibilidad</label>
        <select name="availability" id="availability" class="form-control">
            <option value="Disponible"      {{ $car->availability == 'Disponible'       ? 'selected' : '' }}>Disponible</option>
            <option value="Vendido"         {{ $car->availability == 'Vendido'          ? 'selected' : '' }}>Vendido</option>
            <option value="No Disponible"   {{ $car->availability == 'No Disponible'    ? 'selected' : '' }}>No Disponible</option>
        </select>
        @error('availability')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <input type="file" id="picture" name="picture" class="form-control d-none" >
    <input type="file" id="gallery" name="gallery[]" class="form-control d-none" multiple="multiple">

    <button type="submit" class="btn btn-primary">Actualizar</button>

    </form>

</div>

<div class="col-md-4 order-md-2 mt-5">

    <ul class="list-group mb-3">

        <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div class="w-100">
                <h6 class="my-1 text-center">Imagen Destacada</h6>
                <div id="main-image"  class="d-flex align-items-center justify-content-center">
                    <img id="output" src="{{ asset('storage/' . $car->picture) }}" class="my-1 img-fluid" onerror="this.onerror=null;this.src='{{ asset('assets/images/image-placeholder.svg') }}';" height="200px" width="200px" />
                </div>
                <label for="picture" class="btn btn-primary btn-block mt-2" id="pictureLabel" >Subir</label>
            </div>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div class="w-100">
                <h6 class="my-1 text-center">Reemplazar Fotos de Galeria de Imagenes</h6>
                <div id="galleryOutput" class="d-flex flex-wrap align-items-center justify-content-between" >
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
                <label for="gallery" class="btn btn-primary btn-block mt-2" id="galleryLabel" >Subir</label>
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
    
        document.querySelector('#gallery').addEventListener('change', function(e){
            let galleryOutput = document.getElementById("galleryOutput")
            while (galleryOutput.firstChild) {
                galleryOutput.removeChild(galleryOutput.firstChild);
            }
            galleryImages = e.target.files
            for (let index = 0; index < galleryImages.length; index++) {
                let element = document.createElement("img");
                element.setAttribute("src", URL.createObjectURL(e.target.files[index]));
                element.setAttribute("height", "90");
                element.setAttribute("width", "90");
                element.setAttribute("alt", "Car Image");
                element.classList.add('my-1');
                element.classList.add('img-fluid');
                
                galleryOutput.appendChild(element);
                
            }
        })
        
    </script>
    
@endsection