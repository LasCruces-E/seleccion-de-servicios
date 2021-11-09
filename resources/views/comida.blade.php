<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Menú</title>
    <link rel="shortcut icon" href="img/iconSierra.png">

    <script>

      $(document).ready(function(){
        $('#prev-reservacion').hide();
        $('#dia').hide();
        $('#especiales').hide();
        $('#comida-option').addClass(["border-orange"]);
        $("#reservacion-option").click(function(){
          $('#dia').hide();
          $('#comida').hide();
          $('#prev-reservacion').show();
          $('#especiales').hide();
          $('#comida-option').removeClass(["border-orange"]);
          $("#reservacion-option").addClass(["border-orange"]);
          $("#dia-option").removeClass(["border-orange"]);
          $("#especiales-option").removeClass(["border-orange"]);
        });
        $("#comida-option").click(function(){
          $('#comida').show();
          $('#prev-reservacion').hide();
          $('#dia').hide();
          $('#especiales').hide();
          $('#comida-option').addClass(["border-orange"]);
          $("#reservacion-option").removeClass(["border-orange"]);
          $("#dia-option").removeClass(["border-orange"]);
          $("#especiales-option").removeClass(["border-orange"]);
        });
        $("#dia-option").click(function(){
          $('#dia').show();
          $('#comida').hide();
          $('#prev-reservacion').hide();
          $('#especiales').hide();
          $('#comida-option').removeClass(["border-orange"]);
          $("#reservacion-option").removeClass(["border-orange"]);
          $("#dia-option").addClass(["border-orange"]);
          $("#especiales-option").removeClass(["border-orange"]);
        });
        $("#especiales-option").click(function(){
          $('#dia').hide();
          $('#comida').hide();
          $('#prev-reservacion').hide();
          $('#especiales').show();
          $('#comida-option').removeClass(["border-orange"]);
          $("#reservacion-option").removeClass(["border-orange"]);
          $("#dia-option").removeClass(["border-orange"]);
          $("#especiales-option").addClass(["border-orange"]);
        });
      });
      </script>
</head>

@extends('layouts.app')

@section('content')
    <section id="hero">
        <div class="banner">
            <h1 class="titulo_banner">MENÚ</h1>
        </div>
    </section>
    <div class="container h-100 pt-5">
            <div class="d-flex justify-content-around mt-2 text-orange opciones-menu">
                <div>
                    <button type="button"  id="comida-option" class="bg-transparent fw-bolder border-0 text-orange">COMIDA</button>
                </div>
                <div>
                    <button type="button"  id="reservacion-option" class="bg-transparent fw-bolder border-0 text-orange">CON RESERVACIÓN</button>
                </div>
                <div>
                    <button type="button"  id="dia-option" class="bg-transparent fw-bolder border-0 text-orange">MENÚ DEL DÍA</button>
                </div>
                <div>
                    <button type="button"  id="especiales-option" class="bg-transparent fw-bolder border-0 text-orange">ESPECIALES</button>
                </div>
            </div>
            <div class="comida container mt-5" id="comida">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                      <div class="card h-100 shadow rounded">
                        <img src="img/GorditasComal.jpg" class="card-img-top " alt="...">
                        <div class="card-body text-center">
                          <h5 class="card-title text-orange fw-bold mb-4">Gorditas</h5>
                          <p class="card-text">Guisos del día</p>
                          <p class="fw-bold">$15.00 c/u</p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100 shadow rounded">
                        <img src="img/Desayuno.jpg" class="card-img-top " alt="...">
                        <div class="card-body text-center">
                          <h5 class="card-title text-orange fw-bold mb-4">Desayuno de la casa</h5>
                          <p class="card-text">Guisos del día y tortillas hechas a mano</p>
                          <p class="fw-bold">$90.00</p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100 shadow rounded">
                        <img src="img/nave.jpg" class="card-img-top " alt="...">
                        <div class="card-body text-center">
                          <h5 class="card-title text-orange fw-bold mb-4">Quesadilla sencilla</h5>
                          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="fw-bold">$15.00 c/u</p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100 shadow rounded">
                        <img src="img/nave.jpg" class="card-img-top " alt="...">
                        <div class="card-body text-center">
                          <h5 class="card-title text-orange fw-bold mb-4">Quesadilla con guisado</h5>
                          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="fw-bold">$25.00 c/u</p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100 shadow rounded">
                        <img src="img/nave.jpg" class="card-img-top " alt="...">
                        <div class="card-body text-center">
                          <h5 class="card-title text-orange fw-bold mb-4">Quesadilla de arrachera</h5>
                          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="fw-bold">$30.00 c/u</p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100 shadow rounded">
                        <img src="img/Sopes.jpg" class="card-img-top " alt="...">
                        <div class="card-body text-center">
                          <h5 class="card-title text-orange fw-bold mb-4">Sopes sencillos</h5>
                          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="fw-bold">$15.00 c/u</p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100 shadow rounded">
                        <img src="img/nave.jpg" class="card-img-top " alt="...">
                        <div class="card-body text-center">
                          <h5 class="card-title text-orange fw-bold mb-4">Sopes con guisado</h5>
                          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="fw-bold">$20.00 c/u</p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100 shadow rounded">
                        <img src="img/nave.jpg" class="card-img-top " alt="...">
                        <div class="card-body text-center">
                          <h5 class="card-title text-orange fw-bold mb-4">Menudo chico</h5>
                          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="fw-bold">$75.00</p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100 shadow rounded">
                        <img src="img/nave.jpg" class="card-img-top " alt="...">
                        <div class="card-body text-center">
                          <h5 class="card-title text-orange fw-bold mb-4">Menudo grande</h5>
                          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="fw-bold">$85.00</p>
                        </div>
                      </div>
                    </div>
                </div>
          </div>
          <div class="container mt-5" id="prev-reservacion">
            <div class="row row-cols-1 row-cols-md-3 g-4">
              <div class="col">
                <div class="card h-100 shadow rounded">
                  <img src="img/Barbacoa_borrego.jpg" class="card-img-top " alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title text-orange fw-bold mb-4">Orden de barbacoa de borrego</h5>
                    <p class="card-text">Al horno de tierra</p>
                    <p class="fw-bold">$150.00</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 shadow rounded">
                  <img src="img/Barbacoa.jpg" class="card-img-top " alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title text-orange fw-bold mb-4">Orden de barbacoa de res</h5>
                    <p class="card-text">Al horno de tierra</p>
                    <p class="fw-bold">$120.00</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 shadow rounded">
                  <img src="img/Pizza.jpg" class="card-img-top " alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title text-orange fw-bold mb-4">Pizza</h5>
                    <p class="card-text">Al horno: pepperoni y de la casa (productos del huerto)</p>
                    <p class="fw-bold">$240 por pizza / $30 por rebanada</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 shadow rounded">
                  <img src="img/Carnitas.jpg" class="card-img-top " alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title text-orange fw-bold mb-4">Orden de carnitas</h5>
                    <p class="card-text">Estilo La Creación a la leña</p>
                    <p class="fw-bold">$100.00</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 shadow rounded">
                  <img src="img/GorditasAzucar.jpg" class="card-img-top " alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title text-orange fw-bold mb-4">Gordas de horno</h5>
                    <p class="card-text">Chicharrón, queso encebollado, chorizo y rajas</p>
                    <p class="fw-bold">$20.00 c/u</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 shadow rounded">
                  <img src="img/atoleArroz.jpg" class="card-img-top " alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title text-orange fw-bold mb-4">Atole de arroz</h5>
                    <p class="card-text">Con canela y pasas</p>
                    <p class="fw-bold">$20.00 c/u</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="container mt-5" id="dia"> 
            <div class="row row-cols-1 row-cols-md-3 g-4">
              <div class="col">
                <div class="card h-100 shadow rounded">
                  <img src="img/Pizza.jpg" class="card-img-top " alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title text-orange fw-bold mb-4">Pizza</h5>
                    <p class="card-text">Al horno: pepperoni y de la casa (productos del huerto)</p>
                    <p class="fw-bold">$240 por pizza / $30 por rebanada</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 shadow rounded">
                  <img src="img/GorditasComal.jpg" class="card-img-top " alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title text-orange fw-bold mb-4">Gorditas</h5>
                    <p class="card-text">Guisos del día</p>
                    <p class="fw-bold">$15.00 c/u</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 shadow rounded">
                  <img src="img/Desayuno.jpg" class="card-img-top " alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title text-orange fw-bold mb-4">Desayuno de la casa</h5>
                    <p class="card-text">Guisos del día y tortillas hechas a mano</p>
                    <p class="fw-bold">$90.00</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 shadow rounded">
                  <img src="img/nave.jpg" class="card-img-top " alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title text-orange fw-bold mb-4">Quesadilla sencilla</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="fw-bold">$15.00 c/u</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 shadow rounded">
                  <img src="img/nave.jpg" class="card-img-top " alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title text-orange fw-bold mb-4">Quesadilla con guisado</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="fw-bold">$25.00 c/u</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 shadow rounded">
                  <img src="img/nave.jpg" class="card-img-top " alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title text-orange fw-bold mb-4">Quesadilla de arrachera</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="fw-bold">$30.00 c/u</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 shadow rounded">
                  <img src="img/Sopes.jpg" class="card-img-top " alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title text-orange fw-bold mb-4">Sopes sencillos</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="fw-bold">$15.00 c/u</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 shadow rounded">
                  <img src="img/nave.jpg" class="card-img-top " alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title text-orange fw-bold mb-4">Sopes con guisado</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="fw-bold">$20.00 c/u</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="container mt-5" id="especiales">
            <div class="row row-cols-1 row-cols-md-3 g-4">
              <div class="col">
                <div class="card h-100 shadow rounded">
                  <img src="img/nave.jpg" class="card-img-top " alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title text-orange fw-bold mb-4">Carne de pichon</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="fw-bold">$20.00 c/u</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 shadow rounded">
                  <img src="img/nave.jpg" class="card-img-top " alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title text-orange fw-bold mb-4">Huevo de codorniz</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="fw-bold">$20.00 c/u</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

    </div>
    <div class="precios container mt-3 mb-5">
      <p class="text-orange">* Precios actualizados al 30 de Agosto de 2021</p>
    </div>   
@endsection