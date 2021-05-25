<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>EmpleosTics - @yield('title')</title>
</head>


<body class="bg-light bg-gradient">

    <nav class="navbar navbar-expand-md navbar-dark bg-primary bg-gradient" aria-label="Twelfth navbar example">

        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsEjercicios" aria-controls="navbarsEjercicios" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand fst-italic fs-2 fw-bold text-white" href="#">Empleos Tics</a>

            <div class="collapse navbar-collapse" id="navbarsEjercicios">
                <ul class="navbar-nav me-auto mb-2 mb-sm-0">

                    <li class="nav-item">
                        <a class="nav-link fw-bold text-light" aria-current="page" href="{{ url('/') }}">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold text-light" href="{{url('/rubros')}}">Rubros</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-bold text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Busquedas Laborales
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item fw-bold" href="{{ route('obtenerrubros') }}">Por Rubro</a></li>
                            <li><a class="dropdown-item" href="{{url('/busquedas')}}">Todas (crud)</a></li>

                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-bold text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Postulaciones
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item fw-bold" href="{{ route('obtenerbusquedas') }}">Por Busqueda Laboral</a></li>
                            <li><a class="dropdown-item" href="{{url('/inscripciones')}}">Todas (crud)</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <main class="container pt-5 pb-5" style="min-height:500px;">
        <div class="container">
            @yield('content')
        </div>
    </main>


    <footer class="ps-5 py-4 bg-primary bg-gradient text-light border-top">
        <span>PWA 2021 - Grupo Tres: Erick Calderon, Marcos Gutierrez, Mariela Chamas.</span>
    </footer>

  

    <!-- Zona de scripts, primero jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!--  bootstrap bundle que trae popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


    <script>
        $(function() {
            $(".modalExito").modal("show");
        });
    </script>

</body>

</html>