@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header fw-bolder bg-brown">Opciones</div>
                <div class="card-body">
                    <div class="d-flex position-relative">
                        <img src="img/Pizza.jpg" class="flex-shrink-0 me-3 w-25 rounded" alt="...">
                        <div>
                            <h5 class="mt-0 fw-bold">Administrar menú</h5>
                            <p>Agregar, actualizar datos o eliminar comida</p>
                            <div class="d-flex flex-column">
                                <a href="/preview-comida" >Continuar</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex position-relative mt-3">
                        <img src="img/cuatrimoto.jpeg" class="flex-shrink-0 me-3 w-25 rounded" alt="...">
                        <div>
                            <h5 class="mt-0 fw-bold">Administrar servicios</h5>
                            <p>Agregar, actualizar datos o eliminar servicios</p>
                            <div class="d-flex flex-column">
                                <a href="/preview-servicios">Continuar</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex position-relative mt-3">
                        <img src="img/mesas.jpg" class="flex-shrink-0 me-3 w-25 rounded" alt="...">
                        <div>
                            <h5 class="mt-0 fw-bold">Administrar galeria</h5>
                            <p>Agregar, actualizar datos o eliminar fotos de galeria</p>
                            <a href="#" class="stretched-link">Continuar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
