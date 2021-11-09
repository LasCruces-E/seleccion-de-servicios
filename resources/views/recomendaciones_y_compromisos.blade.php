<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Recomendaciones y Compromisos</title>
    <link rel="shortcut icon" href="img/iconSierra.png">
</head>
@extends('layouts.app')

@section('content')
  <section id="hero">
        <div class="recompromisos">
            <h1 class="titulo_banner">RECOMENDACIONES Y COMPROMISOS</h1>
        </div>

        <div class="row justify-content-evenly">
            <div class="col-md-5  mt-5 d-flex flex-column justify-content-center align-items-center">
                <div class="title mb-5 mt-5">
                    <h1 class="text-orange fw-bold">Recomendaciones</h1>
                </div>
                <p>
                <ul>
                    <li> Llevar vestimenta y calzado propio para Sierra y senderismo</li>
                     <li>En época de lluvias se recomienda, solo vehículos 4x4, cuatrimotos, motocicleta, bicicleta de montaña, rzr y camionetas grandes</li>
                    <li>Casa para acampar si desean vivir la experiencia de una o varias noches en la Sierra</li>
                     <li>En caso de llevar mascotas,con collar, recoger y depositar heces en espacios destinados</li>
                </ul>
                </p>
            </div> 
            <div class="col-md-5 mt-5">
                <img src="img/vista.jpeg" class="img-fluid" alt="test">
            </div> 
        </div>
        <div class="row justify-content-evenly mt-5">
            <div class="col-md-5 order-md-2  mb-5 d-flex flex-column justify-content-center align-items-center">
                <div class="title mb-5 mt-5">
                    <h1 class="text-orange fw-bold">Compromisos</h1>
                </div>
                <p>
                   <ul>
                        <li>Uso de baños secos (en los mismos se encuentran folletos sobre este concepto). Para conocer más sobre los baños secos dar click en el botón de abajo.</li>
                       <li>No dejar ningún tipo de producto contaminante (plásticos, basura, etc)</li> 
                       <li>No entrar con ningún tipo de alimentos y líquidos</li> 
                    </ul>
                </p>
                <div class="d-grid gap-2 mb-5">
                     <button class="btn btn-primary" type="button">Más Sobre los Baños Secos</button>
                </div>
            </div>
            <div class="col-md-5 order-md-1"> 
                <img src="img/senderismo.jpeg" class="img-fluid" alt="test">
            </div> 
        </div>
    <div class="container  bg-light mt-5 justify-content-center">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="100%" height="600" src="https://www.youtube.com/embed/aiV1j1PMWT8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
    </div>
    </div>
@endsection