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
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

    <!-- Fonts -->
    <link href="http://fonts.cdnfonts.com/css/filson-pro" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>

<body class="py-0">
    <div id="app">

        {{-- @include('layouts.navbar') --}}
        @include('layouts.navbar2')

        <main class="container">
            @yield('content')
        </main>
    </div>
    <footer class="bg-secondary mt-4 text-center text-lg-start text-white">
        <!-- Grid container -->
        <div class="container p-1 ">
            <!--Grid row-->
            <div class="row my-4">
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

                    <div class="bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto"
                        style="width: 150px; height: 150px;">
                        <img src="{{ asset('img/CEG.png') }}" width="100%"alt=""
                            loading="lazy" />
                    </div>

                    <p class="text-center" style="font-family: 'Filson Pro', sans-serif;">Centro de Estudios de Género - Universidad de Guadalajara</p>

                    <ul class="list-unstyled d-flex flex-row justify-content-center">
                        <li>
                            <a class="text-white px-2" href="https://www.facebook.com/CEG.UdeG">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                        </li>
                        <li>
                            <a class="text-white px-2" href="https://twitter.com/rev_la_ventana">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a class="text-white ps-2"
                                href="https://open.spotify.com/show/38deWOD94zSGJXhUwYnfTJ?si=770ac524704647bd&nd=1">
                                <i class="fab fa-spotify"></i>
                            </a>
                        </li>
                    </ul>

                </div>

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="{{ route('welcome') }}" class="text-white" style="font-family: 'Filson Pro', sans-serif;"><i class="fa fa-map-pin pe-3"></i>Inicio</a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('welcome') }}" class="text-white" style="font-family: 'Filson Pro', sans-serif;"><i class="fa fa-map-pin pe-3"></i>Quiénes somos</a>
                        </li>
                        <li class="mb-2">
                            <a href="http://revistalaventana.cucsh.udg.mx/index.php/LV" target="_blank" class="text-white" style="font-family: 'Filson Pro', sans-serif;"><i class="fa fa-clipboard pe-3" aria-hidden="true"></i>Revista la ventana</a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('Otra-Ventana-Podcast') }}" class="text-white" style="font-family: 'Filson Pro', sans-serif;"><i class="fab fa-spotify pe-3"></i>Otra Ventana (Podcast)</a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('Centro-de-Documentacion') }}" class="text-white" style="font-family: 'Filson Pro', sans-serif;"><i class="fas fa-server pe-3"></i>Centro de Documentación</a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('Encuestas') }}" class="text-white" style="font-family: 'Filson Pro', sans-serif;"><i class="fas fa-server pe-3"></i>Encuestas</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white" style="font-family: 'Filson Pro', sans-serif;" id="Contacto"><i class="fas fa-phone pe-3"></i>Contacto</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4" style="font-family: 'Filson Pro', sans-serif;">Dirección</h5>

                    <ul class="list-unstyled">
                        <li>
                            <p style="font-family: 'Filson Pro', sans-serif;"><i class="fas fa-map-marker-alt pe-2"></i>Centro Universitario de Ciencias Sociales y
                                Humanidades, Campus Los Belenes. Edificio "F4", Primer piso - Av. Parres Arias #150 y
                                Periférico Norte. C.P. 45100. Zapopan, Jalisco, México.</p>
                            <p style="font-family: 'Filson Pro', sans-serif;"><i class="fa fa-clock pe-2"></i> Horario: 9:00 AM - 4:00 PM</p>
                        </li>
                        <li>
                            <p style="font-family: 'Filson Pro', sans-serif;"><i class="fas fa-phone pe-2" ></i>33 3819 3300 EXT-</p>
                        </li>
                        <li>
                            <p style="font-family: 'Filson Pro', sans-serif;" ><i class="fas fa-envelope pe-2 mb-0"></i>estudios.genero@administrativos.udg.mx</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class=" col-lg-3 col-md-6 h-100">
                    <h5 class="text-uppercase p-0" style="font-family: 'Filson Pro', sans-serif;">Mapa <i class="fa fa-map"></i></h5>

                    <div class="col-sm-12 col-md-12">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14925.878635251594!2d-103.38539232049988!3d20.731749728558736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428af097b88abe3%3A0xbb90e158805bcd46!2sCUCSH%20Belenes%20(Centro%20Universitario%20De%20Ciencias%20Sociales%20y%20Humanidades%20Campus%20Belenes)!5e0!3m2!1ses-419!2smx!4v1656698246059!5m2!1ses-419!2smx"
                            class="w-100" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->
    </footer>

</body>

</html>
