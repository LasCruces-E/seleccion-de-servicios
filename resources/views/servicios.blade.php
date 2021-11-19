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
              @foreach($servicios as $s)
                <div class="col">
                  <div class="card h-100 shadow rounded">
                    <img src="{{ asset($s->imagen)}}" class="card-img-top " alt="...">
                    <div class="card-body text-center">
                      <div class="d-flex justify-content-around align-items-baseline">
                        <h5 class="card-title text-orange fw-bold mb-4">{{$s->nombre}}</h5>
                      </div>
                      <p class="card-text">{{$s->descripcion}}</p>
                      <p class="fw-bold">${{$s->costo}}.00</p>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>

            <div class="row row-cols-1 row-cols-md-3 g-4 mt-3" id="servicios-reservacion-list">
              @foreach($servicios as $s)
                @if($s->reservacion == 1)
                  <div class="col">
                    <div class="card h-100 shadow rounded">
                      <img src="{{ asset($s->imagen)}}" class="card-img-top " alt="...">
                      <div class="card-body text-center">
                        <div class="d-flex justify-content-around align-items-baseline">
                          <h5 class="card-title text-orange fw-bold mb-4">{{$s->nombre}}</h5>
                        </div>
                        <p class="card-text">{{$s->descripcion}}</p>
                        <p class="fw-bold">${{$s->costo}}.00</p>
                      </div>
                    </div>
                  </div>
                @endif 
              @endforeach
            </div>
        </div>
    </section>

    <section id="footer">
      <div class="w-100 bg-brown pt-5 pb-5">
        <div class="row row-cols-md-3 d-flex justify-content-center">
          <div class="col-sm-3 m-auto d-flex flex-column align-items-center">
            <img src="img/logo.png" alt="" class="w-25 h-50">
          </div>
          <div class="col-sm-3 d-flex flex-column align-items-center">
            <h3 class="mb-3">Contacto</h3>
            <ul class="list-group d-flex align-items-center">
              <li class="list-group mb-2">ecoturismodenaturaleza@gmail.com</li>
              <li class="list-group mb-2">4443196619</li>
              <li class="list-group mb-2"><a href="FAQ.php" class="text-white text-decoration-none">FAQ</a></li>
            </ul>
          </div>
          <div class="col-sm-3 d-flex flex-column align-items-center">
            <h3 class="mb-3">Redes sociales</h3>
            <ul class="list-group d-flex align-items-center">
              <li class="list-group mb-2"><a href="https://www.facebook.com/Ecoturismo-Las-Cruces-113553307075098/?modal=admin_todo_tour" class="text-white text-decoration-none"> <i class="fab fa-facebook-square"></i> Ecoturismo Las Cruces</a> </li>
              <li class="list-group mb-2"><a href="https://www.instagram.com/ecoturismolascruces/?hl=en" class="text-white text-decoration-none"> <i class="fab fa-instagram-square"></i> ecoturismolascruces</a></li>
              <li class="list-group mb-2"><a href="https://www.instagram.com/ecoturismolascruces/?hl=en" class="text-white text-decoration-none"> <i class="fab fa-twitter-square"></i> Las Cruces</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
@endsection