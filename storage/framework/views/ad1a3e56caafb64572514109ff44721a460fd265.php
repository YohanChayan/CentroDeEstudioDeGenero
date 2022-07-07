<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link href="http://fonts.cdnfonts.com/css/filson-pro" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body class="py-0">
    <div id="app">

        
        <?php echo $__env->make('layouts.navbar2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <main class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
    <footer class="bg-secondary mt-4 text-center text-lg-start text-white">
    <!-- Grid container -->
    <div class="container p-1 ">
      <!--Grid row-->
      <div class="row my-4">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

          <div class="rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto" style="width: 150px; height: 150px;">
            <img src="<?php echo e(asset('img/CEG.png')); ?>" class="rounded-circle" width="100%"alt="" loading="lazy" />
          </div>

          <p class="text-center">Centro de Estudios de Género - Universidad de Guadalajara</p>

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
              <a class="text-white ps-2" href="https://open.spotify.com/show/38deWOD94zSGJXhUwYnfTJ?si=770ac524704647bd&nd=1">
                <i class="fab fa-spotify"></i>
              </a>
            </li>
          </ul>

        </div>

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="#" class="text-white"><i class="fa fa-map-pin pe-3"></i>Inicio</a>
            </li>
            <li class="mb-2">
              <a href="#Quienes Somos" class="text-white"><i class="fa fa-question pe-3" aria-hidden="true"></i>Quiénes somos</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fa fa-clipboard pe-3" aria-hidden="true"></i>Revista la ventana</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fab fa-spotify pe-3"></i>Otra Ventana (Podcast)</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-server pe-3"></i>Centro de Documentación</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white" id="Contacto"><i class="fas fa-phone pe-3"></i>Contacto</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Dirección</h5>

          <ul class="list-unstyled">
            <li>
              <p><i class="fas fa-map-marker-alt pe-2"></i>Centro Universitario de Ciencias Sociales y Humanidades, Campus Los Belenes. Edificio "F4", Primer piso - Av. Parres Arias #150 y Periférico Norte. C.P. 45100. Zapopan, Jalisco, México.</p>
              <p><i class="fa fa-clock pe-2"></i> Horario: 9:00 AM - 4:00 PM</p>
            </li>
            <li>
              <p><i class="fas fa-phone pe-2"></i>33 3819 3300 EXT-</p>
            </li>
            <li>
              <p><i class="fas fa-envelope pe-2 mb-0"></i>estudios.genero@administrativos.udg.mx</p>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class=" col-lg-3 col-md-6 h-100">
          <h5 class="text-uppercase p-0">Mapa <i class="fa fa-map"></i></h5>

          <div class="col-sm-12 col-md-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14925.878635251594!2d-103.38539232049988!3d20.731749728558736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428af097b88abe3%3A0xbb90e158805bcd46!2sCUCSH%20Belenes%20(Centro%20Universitario%20De%20Ciencias%20Sociales%20y%20Humanidades%20Campus%20Belenes)!5e0!3m2!1ses-419!2smx!4v1656698246059!5m2!1ses-419!2smx" class="w-100" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
<?php /**PATH C:\xampp\htdocs\CentroDeEstudioDeGenero\resources\views/layouts/app.blade.php ENDPATH**/ ?>