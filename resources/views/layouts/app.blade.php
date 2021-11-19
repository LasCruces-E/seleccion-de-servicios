    <!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
       
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body class="bg-white">
        <div id="app">
            <nav class="navbar navbar-expand-md shadow-sm bg-brown">
                <div class="container">
                    
                    <div class="container-fluid">
                        <a class="navbar-brand me-5 ms-sm-2" href="/">
                            <img src="img/logoHorizontalBlanco.png" alt="" width="200" height="60" class="d-inline-block align-text-top">
                        </a>
                        <button class="navbar-toggler border-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <p class="text-white">MENÚ</p>
                        </button>
                        <div class="collapse navbar-collapse ms-sm-5 text-center" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active text-light" aria-current="page" href="/">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="galeria">Galeria</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Servicios
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="comida">Menu</a></li>
                                    <li><a class="dropdown-item" href="servicios">Servicios</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Politicas
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="recomendaciones_y_compromisos">Compromisos</a></li>
                                    <li><a class="dropdown-item" href="recomendaciones_y_compromisos">Recomendaciones</a></li>
                                    <li><a class="dropdown-item" href="FAQ">FAQ</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="acerca_de">Acerca de</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="contacto">Contacto</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="reservar">Reservar</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('home') }}">{{ __('Dashboard') }}</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            <section>
                <div class="avisos bg-cdark">
                    <div class="row h-100 mw-100 d-flex justify-content-center">
                        <div class="col-sm-4 bg-cdark d-flex justify-content-center align-items-center w-75">
                            <p class="ms-3 mt-3 fw-bolder"> Servicio previa reservación </p>
                        </div>
                        <div class="col-sm-8 d-flex justify-content-center align-items-center w-75">
                            <p class="mt-3"> <marquee direction="left" class="w-100">No se permite la entrada con alimentos o bebidas </marquee></p>
                        </div>
                    </div>
                </div>
            </section>
            <main class="py-0">
                @yield('content')
            </main>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/b6a0ace850.js"></script>
    </body>
    </html>
