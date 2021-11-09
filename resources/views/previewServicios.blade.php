<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Preview servicios</title>
</head>
@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <a href="/agregar-servicio" class="text-light"><button type="button" class="btn btn-primary w-100 mb-5 bg-brown">AGREGAR SERVICIO</button></a>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($servicios as $s)
                <div class="col">
                    <div class="card h-100 shadow rounded">
                        <img src="{{ asset($s->imagen)}}" class="card-img-top " alt="...">
                        <div class="card-body text-center">
                            <div class="d-flex justify-content-around align-items-baseline">
                                <h5 class="card-title text-orange fw-bold mb-4">{{$s->nombre}}</h5>
                                <div class="opciones d-flex justify-content-evenly w-25">
                                    <div class="modificar" style="width:25px; height:25px">
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Actualizar"><a href="/actualizar-servicio/{{$s->id}}" class="text-light"><i class="fas fa-pen"></i></a></button>
                                    </div>
                                    <div class="borrar">
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar"><a href="/eliminar-servicio/{{$s->id}}" class="text-light"><i class="fas fa-trash"></i></a></button>
                                    </div>
                                </div>
                            </div>
                            <p class="card-text">{{$s->descripcion}}</p>
                            <p class="fw-bold">${{$s->costo}}.00</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
