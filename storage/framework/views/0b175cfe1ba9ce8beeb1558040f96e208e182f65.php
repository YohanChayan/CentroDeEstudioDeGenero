

<?php $__env->startSection('content'); ?>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">
    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="<?php echo e(asset('LandingPage/css/blog.css')); ?>" rel="stylesheet">

    <!-- <style>
              .carousel .carousel-item {
                height: 25vh;
              }

              .carousel-item img {
                position: absolute;
                top: 0;
                left: 0;
                min-height: 300px;
              }

              body {
                background-color: #f4f5f0;
              }
            </style> -->
    <div class="row">
        <div class="container-fluid">
            <div class="row justify-content-center ">
                <div class="col-sm-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo e(asset('img/banner.png')); ?>" class="img-fluid d-block" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo e(asset('img/banner-2.png')); ?>" class="img-fluid d-block" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo e(asset('img/banner-podcast-1080.png')); ?>" class="img-fluid d-block"
                                    alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <link href="<?php echo e(asset('LandingPage/css/carousel.css')); ?>" rel="stylesheet">

    <div class="container">

        <div class="jumbotron p-2 rounded bg-white text-center">
            <div class="col-md-12 px-0">
                <h1 class="display-4" style="font-family: 'Filson Pro', sans-serif;" id="Quienes somos">Qui??nes somos</h1>
                <p class="lead my-3" style="text-align:justify;">El Centro de Estudios de G??nero (CEG) forma parte del
                    Departamento de Estudios en Educaci??n (DEDUC), mismo que a su vez pertenece a la Divisi??n de Estudios de
                    Estado y Sociedad (DEES) del Centro Universitario de Ciencias Sociales y Humanidades (CUCSH) de la
                    Universidad de Guadalajara.
                    Desde 1994, fecha en que fue constituido el CEG, se ha venido trabajando en las tres ??reas sustantivas
                    de la Universidad, como son la docencia, la investigaci??n y la difusi??n-extensi??n. Los logros han sido
                    importantes, ya que adem??s de brindar un espacio acad??mico al estudio de las problem??ticas de g??nero, se
                    vincula la difusi??n y docencia, para aportar conocimientos cient??ficos en las distintas ??reas.
                    Todo ello es relevante para la construcci??n de una cultura democr??tica, equitativa y tolerante, sobre
                    las pr??cticas de hombres y mujeres en la sociedad mexicana.
                    <span id="text-oculto" style="display:none;"> Proyecto acad??mico del CEG gira en torno al inter??s por
                        generar discusiones te??rico-conceptuales que introduzcan la perspectiva de g??nero en los debates
                        acad??micos y que se conviertan en un aporte para tranversalizar la perspectiva de g??nero en los
                        distintos ??mbitos: gubernamentales, culturales, educativos, sociales, pol??ticos y civiles.
                        Contamos con la Revista de estudios de g??nero. La ventana, que se encuentra en el padr??n de
                        excelencia del Consejo Nacional de Ciencia y Tecnolog??a (CONACYT) y que es un referente en este
                        campo de estudios, tanto en el ??mbito nacional como internacional.</span>
                </p>
                <p class="lead mb-0"><a id="Ver mas" class="text-dark font-weight-bold" onclick="mostrar()">Ver m??s <i
                            class="fa fa-plus-circle"></i></p></a>
            </div>
            <hr class="featurette-divider m-3">
        </div>

        <div class="album bg-white">
            <div class="pricing-header px-3 py-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4" style="font-family: 'Filson Pro', sans-serif;">Blog<h1>
                        <p class="lead" style="font-family: 'Filson Pro', sans-serif;">Nos sumergimos a las profundidades
                            de la sociedad ... </p>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow h-100">
                        <img class="card-img-top"
                            data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Thumbnail [100%x225]"
                            src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_181a5fe1e16%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_181a5fe1e16%22%3E%3Crect%20width%3D%22348%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22117.125%22%20y%3D%22120.046875%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                            data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                        <div class="card-body">
                            <p class="card-text" style="font-family: 'Filson Pro', sans-serif;">This is a wider card with
                                supporting text below as a natural lead-in to additional content. This content is a little
                                bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                        style="font-family: 'Filson Pro', sans-serif;">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                        style="font-family: 'Filson Pro', sans-serif;">Edit</button>
                                </div>
                                <small class="text-muted" style="font-family: 'Filson Pro', sans-serif;">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 box-shadow h-100">
                        <img class="card-img-top"
                            data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Thumbnail [100%x225]"
                            src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_181a5fe1e16%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_181a5fe1e16%22%3E%3Crect%20width%3D%22348%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22117.125%22%20y%3D%22120.046875%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                            data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                        <div class="card-body">
                            <p class="card-text" style="font-family: 'Filson Pro', sans-serif;">This is a wider card with
                                supporting text below as a natural lead-in to additional content. This content is a little
                                bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                        style="font-family: 'Filson Pro', sans-serif;">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                        style="font-family: 'Filson Pro', sans-serif;">Edit</button>
                                </div>
                                <small class="text-muted" style="font-family: 'Filson Pro', sans-serif;">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 box-shadow h-100">
                        <img class="card-img-top"
                            data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Thumbnail [100%x225]"
                            src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_181a5fe1e16%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_181a5fe1e16%22%3E%3Crect%20width%3D%22348%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22117.125%22%20y%3D%22120.046875%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                            data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                        <div class="card-body">
                            <p class="card-text" style="font-family: 'Filson Pro', sans-serif;">This is a wider card with
                                supporting text below as a natural lead-in to additional content. This content is a little
                                bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                        style="font-family: 'Filson Pro', sans-serif;">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                        style="font-family: 'Filson Pro', sans-serif;">Edit</button>
                                </div>
                                <small class="text-muted" style="font-family: 'Filson Pro', sans-serif;">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 mb-3">
            <div class="card bg-dark text-white">
                <img src="<?php echo e(asset('img/pageHeaderLogoImage_es_ES.png')); ?>" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h5 class="card-title revista-la-ventana" style="font-family: 'Filson Pro', sans-serif;"
                        id="Revista La Ventana">Revista La Ventana</h5>
                    <p class="card-text revista-la-ventana" style="font-family: 'Filson Pro', sans-serif;">
                        Revista de Estudios de G??nero, La Ventana es una publicaci??n semestral de car??cter
                        multidisciplinario del Centro Universitario de Ciencias Sociales y Humanidades de la Universidad de
                        Guadalajara correspondiente al Centro de Estudios de G??nero.
                        Su prop??sito es investigar sobre la relaci??n y evoluci??n de la condici??n femenina y la condici??n
                        masculina. Trata de identificar las funciones y los verdaderos compromisos de toda ret??rica sobre el
                        g??nero, ya sea que estos compromisos se originen en los poderes, en los individuos o en los grupos.
                    </p><a href="http://revistalaventana.cucsh.udg.mx/index.php/LV" target="_blank"
                        class="text-white pe-2" style="font-family: 'Filson Pro', sans-serif;">Ir a la ventana</a><i
                        class="fa fa-arrow-right"></i>
                </div>
            </div>
        </div>

        <!-- Podcast -->
        <div class="row m-2">
            <div class="col-md-8 col-sm-12">
                <div class="card">
                    <div class="row">
                        <div class="col-sm-1 col-md-2">
                            <img src="<?php echo e(asset('img/simple-normal.png')); ?>" class="img-fluid rounded-start"
                                style="height: 100%; width: 100%; display: block;" alt="Podcast - Otra ventana al g??nero">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body md-12">
                                <h5 class="card-title" style="font-family: 'Filson Pro', sans-serif;">Podcast - Otra
                                    ventana al g??nero</h5>
                                <p class="card-text" style=" font-family: 'Filson Pro', sans-serif; text-align:justify;">
                                    Esto es Otra ventana al g??nero. Podcast de promoci??n y divulgaci??n de debates e
                                    investigaciones acad??micas sobre g??nero con episodios de comentarios entrevistas,
                                    rese??as y agenda de actividades. Con la producci??n acad??mica de Marisa Mart??nez del
                                    cuerpo acad??mico G??nero, cultura y relaciones sociales CA-UDG-490 y el apoyo del equipo
                                    del Centro de Estudios de G??nero y la Revista de Estudios de G??nero La Ventana de la
                                    Universidad de Guadalajara.</p>
                                <p class="card-text"><a href="<?php echo e(route('Otra-Ventana-Podcast')); ?>" class="text-dark"><small class="text-muted pe-2" style="font-family: 'Filson Pro', sans-serif;">Ver todos los podcast</small><i class="fa fa-arrow-right pe-4"></i></a> 
                                  <a href="https://open.spotify.com/show/38deWOD94zSGJXhUwYnfTJ?si=770ac524704647bd&nd=1" class="text-dark" style="font-family: 'Filson Pro', sans-serif;"> Ir a Spotify <i class="fab fa-spotify"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card h-100">
                    <div class="card-body h-100">
                        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/38deWOD94zSGJXhUwYnfTJ?utm_source=generator" class="w-100 " height="200%" frameBorder="0" allowfullscreen allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                    </div>
                </div>
            </div>

        </div>

        <div class="container">
          <div class="card">
              <h3 class="text-dark" style="font-family: 'Filson Pro', sans-serif; text-align:center;">Centro de
                  Documentaci??n - Simone de Beauvoir</h3>
              <img src="<?php echo e(asset('img/librer??a.png')); ?>" class="card-img-top" alt="..." height="300">

              <div class="card-body">
                  <h5 class="card-title" style="font-family: 'Filson Pro', sans-serif;">Bienvenido a la biblioteca
                      Simone de Beauvoir</h5>
                  <p class="card-text" style="font-family: 'Filson Pro', sans-serif;">Aqu?? encontrar??s contenido
                      acerca de ...</p>
                  <a href="#" class="btn btn-primary" style="font-family: 'Filson Pro', sans-serif;">Acceder
                      a la biblioteca</a>
              </div>
          </div>
      </div>
        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo e(asset('LandingPage_template/template1/js/scripts.js')); ?>"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

        <script>
            function mostrar() {
                let show = document.getElementById('text-oculto');
                if (show.style.display == "block") {
                    show.style.display = "none";
                } else {
                    show.style.display = "block";
                }
                //console.log(show.style.display);
            }
        </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CentroDeEstudioDeGenero\resources\views/welcome.blade.php ENDPATH**/ ?>