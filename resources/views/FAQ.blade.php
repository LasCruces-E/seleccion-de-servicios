<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas Frecuentes</title>
    <link rel="shortcut icon" href="img/iconSierra.png">
    <link rel="stylesheet" href="css/estilos.css">
</head>
@extends('layouts.app')

@section('content')
    <div class="banner mb-5">
        <h1 class="inicio">PREGUNTAS MÁS FRECUENTES</h1>
    </div>
    <!--primera sección-->
<div class="container mb-5">
    <h2>Sobre nuestros servicios y comidas</h2>
    <div class="accordion mb-5">
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-heading1">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1" aria-expanded="false" aria-controls="panelsStayOpen-collapse1">
                ¿Es necesario reservar para recibir el servicio de comida?
              </button>
            </h2>
            <div id="panelsStayOpen-collapse1" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading1">
              <div class="accordion-body">
                En caso de no reservar, puede disfrutar de nuestro menú del día. Para consumir nuestra comida que este catalogada como "Con reservación" en nuestro menú será necesario hacer una reservación con mínimo 2 días previo a la visita al lugar.
              </div>
            </div>
          </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-heading2">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse2" aria-expanded="false" aria-controls="panelsStayOpen-collapse2">
            ¿Cómo puedo reservar algún servicio o comida?
            </button>
          </h2>
          <div id="panelsStayOpen-collapse2" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading2">
            <div class="accordion-body">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos repellendus, a, est nihil magni, ut eveniet commodi ad quo vitae at assumenda. Tenetur hic ut itaque nesciunt quod, quam earum. 
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-heading3">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse3" aria-expanded="false" aria-controls="panelsStayOpen-collapse3">
                ¿Cómo puedo reservar algún servicio o comida?
            </button>
          </h2>
          <div id="panelsStayOpen-collapse3" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading3">
            <div class="accordion-body">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis iste laborum a, distinctio quia deleniti quod reprehenderit sapiente harum. Exercitationem ut doloribus neque maiores quae consequuntur quisquam vel animi pariatur.
            </div>
          </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-heading">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse4" aria-expanded="false" aria-controls="panelsStayOpen-collapse4">
                ¿Cómo puedo reservar algún servicio o comida?
              </buttton>
            </h2>
            <div id="panelsStayOpen-collapse4" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading4">
              <div class="accordion-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, magni odio debitis officiis delectus recusandae incidunt corrupti distinctio, non ut iusto dolorum obcaecati vitae pariatur a, expedita beatae consequatur eveniet!
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-heading5">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse5" aria-expanded="false" aria-controls="panelsStayOpen-collapse5">
                ¿Cómo puedo reservar algún servicio o comida?
              </button>
            </h2>
            <div id="panelsStayOpen-collapse5" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading5">
              <div class="accordion-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae velit eveniet eaque culpa. Adipisci ad fuga omnis aliquam nihil unde esse tenetur quisquam mollitia cupiditate minus, sed eveniet soluta dolorem!
              </div>
            </div>
          </div>
      </div>
      <!--Segunda sección-->
        <h2>Sobre nuestras instalaciones </h2>
        <div class="accordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-heading6">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse6" aria-expanded="false" aria-controls="panelsStayOpen-collapse6">
                    ¿Tiene costo de entrada?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapse6" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading6">
                  <div class="accordion-body">
                    No, no se cobra la entrada
                  </div>
                </div>
              </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-heading7">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse7" aria-expanded="false" aria-controls="panelsStayOpen-collapse7">
                    ¿Tienen cabañas?
                </button>
              </h2>
              <div id="panelsStayOpen-collapse7" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading7">
                <div class="accordion-body">
                  Actualmente nuestras cabañas se encuentran en construcción. Una vez que esten disponibles avisará mediante nuestro sitio web y nuestras redes sociales.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-heading8">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse8" aria-expanded="false" aria-controls="panelsStayOpen-collapse8">
                ¿Rentan casas para acampar?
                </button>
              </h2>
              <div id="panelsStayOpen-collapse8" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading8">
                <div class="accordion-body">
                 No, se cobra por el espacio para acampar. Sin embargo, es necesario llevar su propía casa de campaña.
                </div>
              </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-heading9">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse9" aria-expanded="false" aria-controls="panelsStayOpen-collapse9">
                    ¿Puedo llevar a mi mascota?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapse9" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading9">
                  <div class="accordion-body">
                    Perros y gatos se les permite la entrada siempre y cuando esten con correa.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-heading10">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsg10" aria-expanded="false" aria-controls="panelsStayOpen-collapsg10">
                    ¿Cómo puedo llegar fácilmente al lugar?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapsg10" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading10">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et nemo quam, porro sint unde dignissimos natus illo laborum suscipit voluptate in aspernatur sequi officiis itaque veniam? Maxime aliquam quaerat molestias.
                  </div>
                </div>
              </div>
    </div>
</div>
<div class="d-flex justify-content-center mb-5">
    <div class="card text-center" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">¿Te fue útil ésta Información?</h5>
            <a href="#" class="btn btn-primary btn-lg">Si</a>
            <a href="#" class="btn btn-primary btn-lg">No</a>
        </div>
    </div>
</div>

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