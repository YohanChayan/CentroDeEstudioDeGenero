<style>
    .nav-link {
        color: white;
    }
</style>
<!-- navbar navbar-expand-lg" style="background:#195270 -->
<nav class="navbar navbar-light navbar-expand-md sticky-top shadow-lg" style="background:#e1251b">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            <img src="<?php echo e(asset('/img/CEG.png')); ?>" alt="logoCEG" class="rounded-circle"
                style="min-height: 50px; padding-top: 0px; height: 100PX;">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">

                <li class="nav-item" style="font-family: 'Filson Pro', sans-serif;">
                    <a href="<?php echo e(route('welcome')); ?>" class="nav-link text-white">
                        Inicio
                    </a>
                </li>
                <li class="nav-item" style="font-family: 'Filson Pro', sans-serif;">
                    <a href="http://revistalaventana.cucsh.udg.mx/index.php/LV" target="_blank"
                        class="nav-link text-white">
                        Revista la ventana
                    </a>
                </li>
                <li class="nav-item" style="font-family: 'Filson Pro', sans-serif;">
                    <a href="<?php echo e(route('Otra-Ventana-Podcast')); ?>" class="nav-link text-white">
                        <i class="fab fa-spotify pe-1"></i>Otra Ventana (Podcast)</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('Centro-de-Documentacion')); ?>" class="nav-link text-white"
                        style="font-family: 'Filson Pro', sans-serif;">
                        Centro de Documentación
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('blog')); ?>" class="nav-link text-white"
                        style="font-family: 'Filson Pro', sans-serif;">
                        Blog
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#Contacto" class="nav-link text-white" style="font-family: 'Filson Pro', sans-serif;">
                        Contacto
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('Encuestas')); ?>" class="nav-link text-white" style="font-family: 'Filson Pro', sans-serif;">
                        Encuestas
                    </a>
                </li>
                <!-- Authentication Links -->
                <?php if(auth()->guard()->guest()): ?>
                    <?php if(Route::has('login')): ?>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?php echo e(route('login')); ?>"><?php echo e(__('Iniciar sesión')); ?></a>
                        </li>
                    <?php endif; ?>

                    <?php if(Route::has('register')): ?>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?php echo e(route('register')); ?>"><?php echo e(__('Registrarse')); ?></a>
                        </li>
                    <?php endif; ?>
                <?php else: ?>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <?php echo e(Auth::user()->name); ?>

                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-white" href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\xampp\htdocs\CentroDeEstudioDeGenero\resources\views/layouts/navbar2.blade.php ENDPATH**/ ?>