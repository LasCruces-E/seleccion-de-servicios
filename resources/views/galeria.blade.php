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