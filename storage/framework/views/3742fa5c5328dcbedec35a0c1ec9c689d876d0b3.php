
<?php $__env->startSection('content'); ?>

    <div class="container">
        <?php if(Auth::check()): ?>
            <?php if(session('message')): ?>
                <div class="alert alert-success">
                    <h2><?php echo e(session('message')); ?></h2>

                </div>
            <?php endif; ?>

            <div class="row">
                <h2>Capturar el Podcast</h2>
                <hr>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#js-example-basic-single').select2();
                        $('#js-example-basic-single2').select2();
                        $('#equipos').select2();
                    });
                </script>

            </div>
            <b>Recuerda agregar el /embed en el link, para que se pueda visualizar el podcast</b>
            <p>Ejemplo: https://open.spotify.com/episode/0xHXacNPy2elqxJTbFCo66 -> https://open.spotify.com<b>/embed</b>/episode/0xHXacNPy2elqxJTbFCo66</p>
            <form action="<?php echo e(route('podcast.store')); ?>" method="post" enctype="multipart/form-data"
                class="col-12">
                <div class="row">
                    <div class="col">
                        <?php echo csrf_field(); ?>

                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <div class="row g-3 align-items-center">
                            <div class="row g-3 align-items-center">
                                <div class="col-md-9">
                                    <label class="font-weight-bold" for="link">Link del Podcast</label>
                                    <input type="text" class="form-control" id="link" name="link">
                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="row g-3 align-items-center">
                            <div class="col-md-12">
                                <a href="<?php echo e(route('welcome')); ?>" class="btn btn-danger"><i class="fas fa-times-circle"></i></a>
                                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i></button>
                            </div>
                        </div>
                    </div>
                    <br>

                </div>
            </form>
            <br>
            <div class="row g-5 align-items-center">

                <br>
                <h5>En caso de inconsistencias, favor de reportarlas.</h5>
                <hr>

            </div>

    </div>
<?php else: ?>
    Acceso No válido
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CentroDeEstudioDeGenero\resources\views/Podcast/create.blade.php ENDPATH**/ ?>