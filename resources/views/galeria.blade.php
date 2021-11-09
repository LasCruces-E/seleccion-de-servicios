<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Galeria</title>
    <link rel="shortcut icon" href="img/iconSierra.png">
</head>
@extends('layouts.app')

@section('content')
    <section id="galeria">
        <div class="w-100 h-100 d-flex flex-column justify-content-center align-items-center">
            <h1 class="text-light">GALERIA</h1>
        </div>
    </section>
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                  <img
                    src="img/Columpios.jpg"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt=""
                  />
              
                  <img
                    src="img/acampar.jpg"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt=""
                  />
                </div>
              
                <div class="col-lg-4 mb-4 mb-lg-0">
                  <img
                    src="img/Recomendacion.jpg"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt=""
                  />
              
                  <img
                    src="img/AtoleArroz.jpg"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt=""
                  />
                </div>
              
                <div class="col-lg-4 mb-4 mb-lg-0">
                  <img
                    src="img/zona_acampar.jpeg"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt=""
                  />
              
                  <img
                    src="img/Recomendacion.jpg"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt=""
                  />
                </div>
              </div>
        </div>
    </section>
@endsection