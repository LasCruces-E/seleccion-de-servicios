<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Selección de servicios</title>
</head>

@extends('layouts.app')

@section('content')

    <div class="container mt-5" id="general">
        <div class="mx-auto">
            <h1 class="fw-bolder">Reservación</h1>
        </div>
        <div class="paso mt-3 justify-content-start">
            <span class="badge bg-brown rounded-circle me-2">1</span>
            <p><b>Datos de reservación</b></p>
        </div>
        <div class="mt-2">
            <div class="formulario mt-3">
                <form action="">
                    <div class="campos">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Juan Perez">
                            <label for="floatingInput">Nombre</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Teléfono">
                            <label for="floatingInput">Teléfono</label>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="exampleFormControlInput1" class="form-label">No. personas</label>
                                <input class="quantity form-control" min="0" max="100" name="quantity" value="1" type="number">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Dia</label>
                                <input placeholder="Select date" type="date" id="dia" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Hora</label>
                                <input type="time" id="inputMDEx1" class="form-control">
                            </div>
                        </div>
                        <!--<button type="button" class="btn bg-brown boton mt-5 m-auto">CONTINUAR</button>-->
                    </div>
                </form>
            </div>
        </div>

        <div class="paso mt-4 justify-content-start">
            <span class="badge bg-brown rounded-circle me-2">2</span>
            <p><b>Selección de comida y servicios</b></p>
        </div>
        <h5 class="mt-3">Comida</h5>
        <div class="row row-cols-1 row-cols-md-2 mt-3">
            
            @foreach($productos as $p)
            <div class="col">
                <div class="card mb-3 ">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{asset($p->imagen)}}" class="w-100 h-100" alt="...">
                        </div>
                        <div class="col-6">
                            <div class="card-body">
                                <p class="id" hidden>{{$p->id}}</p>
                                <h5 class="nombre card-title">{{$p->nombre}}</h5>
                                <!--<p class="descripcion card-text">{{$p->descripcion}}</p>-->
                                <p class="card-text"><small>$</small><small class="costo text-muted">{{$p->costo}}</small></p>
                                <button type="button" class="agregar {{$p->id}} btn btn-primary btn-sm">AGREGAR</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <h5>Servicios</h5>
        
        <div class="row row-cols-1 row-cols-md-2 mt-3">
            
            @foreach($servicios as $s)
            <div class="col">
                <div class="card mb-3 ">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{asset($s->imagen)}}" class="w-100 h-100" alt="...">
                        </div>
                        <div class="col-6">
                            <div class="card-body overflow-auto">
                                <p class="id" hidden>{{$s->id}}</p>
                                <h5 class="nombre card-title">{{$s->nombre}}</h5>
                                <!--<p class="descripcion card-text">{{$p->descripcion}}</p>-->
                                <p class="card-text"><small>$</small><small class="costo text-muted">{{$s->costo}}</small></p>
                                <div class="row">
                                    @foreach($horas as $h)
                                        @if($h->service_id == $s->id)
                                        <div class="col-sm-6 mb-2">
                                            <p class="h-id" hidden>{{$h->id}}</p>
                                            <button type="button" class="agregar-hora h-{{$h->id}} btn btn-outline-secondary btn-sm" aria-pressed="true">{{$h->hora}}</button>
                                        </div>
                                        @endif
                                    @endforeach
                                </div>
                                @if($s->id > 3)
                                <button type="button" class="agregar {{$s->id}} btn btn-primary btn-sm">AGREGAR</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>

    <div class="seleccionados container mb-5">
        <table class="table" id="productos">
            <thead>
                <tr>
                    <th>Nombre del producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody class="lista-productos">
                
            </tbody>
        </table>
        <div class="total">
            <p>Total: <span class="cantidad-total fw-bold"></span></p>
        </div>
    </div>

    <div class="d-grid gap-2 col-6 mx-auto mb-5">
        <button class="btn btn-primary" type="button">CONTINUAR</button>
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
    
    <script>
        $(document).ready(function(){
            var producto = "";
            var nombre = "";
            var costo = "";
            var total = 0;
            var cantidad = 0;
            var id = "";
            var id_hora = "N";
            var hora = "";
            var total_pedido = 0;

            $("#general").on("change","#dia",function(){
                alert($("#dia").val());
            });

            //Agregar elemento al carrito de compras
            $("#general").on("click","button.agregar", function(){
                id = $(this).closest(".card").find(".id").text();
                nombre = $(this).closest(".card").find(".nombre").text();
                costo = $(this).closest(".card").find(".costo").text();
                total = parseInt(costo) * 1;
                $(this).closest(".card").find("button.agregar").prop('disabled', true);
                producto = "<tr><td class='p-nombre'>"+nombre+"<button type='button' class='eliminar btn btn-danger btn-sm ms-3'>Eliminar</button><p class='p-id' hidden>"+id+"</p></td><td class='p-costo'>"+costo+"</td><td><input type='number' id='cantidad' name='cantidad' min='1' max='20' value='1'></td><td><p class='p-total'>"+total+"</p></td></tr>";
                $(".lista-productos").append(producto);
                total_pedido += parseInt(costo);
                $("span.cantidad-total").html(total_pedido);
            });

            //Agregar hora al carrito de compras
            $("#general").on("click","button.agregar-hora", function(){
                id = $(this).closest(".card").find(".id").text();
                id_hora = $(this).closest(".col-sm-6").find(".h-id").text();
                nombre = $(this).closest(".card").find(".nombre").text();
                costo = $(this).closest(".card").find(".costo").text();
                total = parseInt(costo) * 1;
                hora = $(this).text();
                nombre += " " + hora;
                $(this).closest(".col-sm-6").find("button.agregar-hora").prop('disabled', true);
                producto = "<tr><td class='p-nombre'>"+nombre+"<button type='button' class='eliminar btn btn-danger btn-sm ms-3'>Eliminar</button><p class='p-id' hidden>"+id+"</p><p class='h-id' hidden>"+id_hora+"</p></td><td class='p-costo'>"+costo+"</td><td><input type='number' id='cantidad' name='cantidad' min='1' max='1' value='1'></td><td><p class='p-total'>"+total+"</p></td></tr>";
                $(".lista-productos").append(producto);
                total_pedido += parseInt(costo);
                $("span.cantidad-total").html(total_pedido);
            });

            //Eliminar elemento de carrito de compras
            $(".seleccionados").on("click","button.eliminar", function(){
                id = $(this).closest("tr").find("p.p-id").text();
                id_hora = $(this).closest("tr").find("p.h-id").text();
                costo = $(this).closest("tr").find(".p-total").text();
                total_pedido -= parseInt(costo);
                if(id_hora != ""){
                    $("button.h-"+id_hora).prop('disabled', false);
                }else{
                    $("button."+id).prop('disabled', false);
                }
                $("span.cantidad-total").html(total_pedido);
                $(this).closest("tr").remove();
            });

            $(".seleccionados").on("click","input[type=number]", function(){
                costo = $(this).closest("tr").find(".p-costo").text();
                cantidad = $(this).val();
                $(this).closest("tr").find(".p-total").html(costo*cantidad);

                total_pedido += parseInt(costo);
                $("span.cantidad-total").html(total_pedido);
            });
        });
    </script>
    <script src="jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection