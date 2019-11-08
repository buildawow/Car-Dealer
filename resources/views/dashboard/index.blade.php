@extends('layouts.admin-panel')

@section('content')
    <div class="jumbotron mt-4">
        <h1>Hola {{ auth()->user()->name }}</h1>
        <div class="d-flex align-items-center space-between">
            <p class="lead">
                Este es el modulo administrativo para subir un nuevo vehiculo y ver el registro de carros disponibles
            </p>
            <img src="{{ asset('assets/images/hero.svg') }}" alt="" class="img-fluid text-right" height="150" width="150">
        </div>
        <a class="btn btn-lg btn-primary" href="{{ route('car.create') }}" role="button">Subir un nuevo Vehiculo</a>
    </div>
@endsection