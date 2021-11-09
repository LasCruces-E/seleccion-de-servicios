<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Servicios</title>
    <link rel="shortcut icon" href="img/iconSierra.png">

    <script>
        $(document).ready(function(){
            $('#servicios-reservacion-list').hide();
            $("#reservacion-option").click(function(){
            $('#servicios-reservacion-list').show();
            $('#servicios-list').hide();
            });
            $("#servicios-option").click(function(){
            $('#servicios-reservacion-list').hide();
            $('#servicios-list').show();
            });
        });
      </script>
</head>
@extends('layouts.app')

@section('content')
    <section id="servicios">
        <div class="w-100 h-100 d-flex flex-column justify-content-center align-items-center">
            <h1 class="text-light fw-bolder">SERVICIOS</h1>
        </div>
    </section>
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="opciones-menu w-100">
              <div class="row w-50 m-auto mt-5">
                <div class="col-sm-6">
                  <button type="button"  id="servicios-option" class="bg-transparent fw-bolder border-0 text-orange mb-3">TODOS LOS SERVICIOS</button>
                </div>
                <div class="col-sm-6">
                  <button type="button"  id="reservacion-option" class="bg-transparent fw-bolder border-0 text-orange">CON RESERVACIÓN</button>
                </div>
              </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-3" id="servicios-list">
              <div class="col">
                <div class="card h-100 shadow rounded">
                  <img src="img/J_tradicionales.jpg" class="card-img-top " alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title text-orange fw-bold mb-4">Juegos tradicionales</h5>
                    <p class="card-text">Trompo, yoyo, canicas y balero</p>
                    <p class="fw-bold">Gratis</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 shadow rounded">
                  <img src="img/Columpios.jpg" class="card-img-top " alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title text-orange fw-bold mb-4">Columpio</h5>
                    <p class="fw-bold">Gratis</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-3" id="servicios-reservacion-list">
              <div class="col">
                <div class="card h-100 shadow rounded">
                  <img src="img/Caballo.jpg" class="card-img-top " alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title text-orange fw-bold mb-4">Paseo a caballo</h5>
                    <p class="card-text"></p>
                    <p class="fw-bold">$200.00 por hora</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 shadow rounded">
                  <img src="img/Caminata.jpg" class="card-img-top " alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title text-orange fw-bold mb-4">Caminata guiada (2km, 4km, y 5km)</h5>
                    <p class="fw-bold">$20.00 por persona en grupos minimo de 10 (Gratis sin guía)</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 shadow rounded">
                  <img src="img/zona_acampar.jpeg" class="card-img-top " alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title text-orange fw-bold mb-4">Espacio para acampar</h5>
                    <p class="card-text">Casa de campaña propia</p>
                    <p class="fw-bold">$150.00 por noche y por tienda de campaña</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 shadow rounded">
                  <img src="img/mesas.jpg" class="card-img-top " alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title text-orange fw-bold mb-4">Espacio para eventos</h5>
                    <p class="card-text">Incluye cocina, espacio techado con mobiliario rústico para 80 personas, baños secos, agua y vigilancia</p>
                    <p class="fw-bold">$3000.00 por jornada de 10 horas</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 shadow rounded">
                  <img src="img/cuatrimoto.jpeg" class="card-img-top " alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title text-orange fw-bold mb-4">Cuatrimoto</h5>
                    <p class="fw-bold">$200.00 por hora</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 shadow rounded">
                  <img src="img/Bicicleta.jpg" class="card-img-top " alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title text-orange fw-bold mb-4">Bicicleta</h5>
                    <p class="fw-bold">$50.00 por hora</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 shadow rounded">
                  <img src="img/Lena_1.jpg" class="card-img-top " alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title text-orange fw-bold mb-4">Leña para fogata</h5>
                    <p class="fw-bold">$10.00 por kilo</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </section>
@endsection