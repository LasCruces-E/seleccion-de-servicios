<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Acerca de</title>
    <link rel="shortcut icon" href="img/iconSierra.png">
</head>
@extends('layouts.app')

@section('content')
   <section id="hero">
        <div class="banner">
            <h1 class="titulo_banner">ACERCA DE</h1>
        </div>
    </section>

    <section id="introduccion">
        <div class="container mt-5">
            <div class="title mb-5">
                <h1 class="text-orange fw-bold">¿Quiénes somos?</h1>
            </div>
            <p>Un grupo de ejidatarios de la Morena, Municipio de Zaragoza, S,L,P, (GEMOZA) comprometidos con el turismo sustentable para favorecer el empleo y la economía local.</p>
            <p class="mb-5"><i> “Ponemos a su servicio un modelo de desarrollo respetuoso con la naturaleza, conscientes de las necesidades de las generaciones presentes y futuras del planeta, a quienes no podemos heredarles un mundo devastado”.</i> GEMOZA</p>
            <!-- Gallery -->
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
                  src="img/Ciclismo.jpg"
                  class="w-100 shadow-1-strong rounded mb-4"
                  alt=""
                />
              </div>
            </div>
            <!-- Gallery -->
      </div>
    </section>
@endsection