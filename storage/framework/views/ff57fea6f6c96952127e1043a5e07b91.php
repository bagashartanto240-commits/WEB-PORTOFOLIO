
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/background.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-8">
                <div class="card p-5 border-0 rounded-4 shadow-lg" style="background-color: rgba(255, 255, 255, 0.9);"> 
                    <div class="text-center">
                        <p class="text-success fw-bold mb-0" style="letter-spacing: 2px; font-size: 0.9rem;">SELAMAT DATANG</p>
                        <h1 class="display-4 fw-bold mt-1 text-dark">Halo, Saya Bagas!</h1>
                        <p class="lead text-muted">Mechatronics Engineer </p>
                        <hr class="my-4" style="width: 80px; margin: auto; border: 2px solid #50C878; opacity: 1;">
                    </div>
                    
                    <div class="mt-4 text-dark">
                        <h3 class="fw-bold">Tentang Saya</h3>
                        <p>
                            Selamat datang di portofolio saya. Saya adalah seorang Mechatronics Engineer yang antusias 
                            dalam membangun sistem otomasi, desain electrical, serta pemrograman. 
                            Di sini, Anda dapat melihat biodata saya dan kemampuan yang saya miliki.
                        </p>
                        
                        <div class="mt-4">
                            <a href="<?php echo e(route('service')); ?>" class="btn btn-success me-2 px-4">Keahlian Saya</a>
                            <a href="<?php echo e(route('kontak')); ?>" class="btn btn-outline-dark px-4">Hubungi Saya</a>
                             <a href="<?php echo e(route('about')); ?>" class="btn btn-outline-dark px-4">Tentang Saya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\bagashartanto.20236004\WEB_LARAVEL\todo-app\resources\views/home.blade.php ENDPATH**/ ?>