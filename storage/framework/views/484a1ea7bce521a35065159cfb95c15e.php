 

<?php $__env->startSection('body-class', 'bg-about'); ?>
<?php $__env->startSection('content'); ?>
    <div class="py-4 text-white"> <h2 class="fw-bold border-bottom pb-2">Tentang Saya</h2>
        
        <div class="row mt-4 align-items-center">
            <div class="col-md-8">
                <h4 class="text-white fw-bold">Halo, Saya Bagas</h4> 
                
                <p class="lead text-light">Seorang antusias di bidang Mekatronika dan Sistem Otomasi.</p>
                
                <p>
                    Saya memiliki latar belakang di bidang mekatronika yang menggabungkan keahlian mekanik, elektrikal, dan pemrograman. Fokus utama saya adalah menciptakan solusi desain teknis yang efisien menggunakan teknologi terbaru seperti <strong>SolidWorks Electrical</strong>, <strong>AutoCAD</strong>, <strong>Autodesk Fusion 360</strong>, <strong>Visual Studio Code</strong>.
                </p>
                
                <p>
                    Menurut saya, teknologi bukan sekadar alat, melainkan jembatan untuk mempermudah pekerjaan manusia melalui sistem otomasi yang cerdas.
                </p>

                <div class="mt-4 border-start ps-3 border-white border-3"> <p class="mb-1"><strong>Pendidikan:</strong> POLITEKNIK ATMI SURAKARTA (TEKNIK MEKATRONIKA)</p>
                    <p class="mb-1"><strong>Lokasi:</strong> Solo, Indonesia</p>
                    <p class="mb-0"><strong>Minat:</strong> Robotika, IoT, Desain Electrical, Programming</p>
                </div>
            </div>
            
            <div class="col-md-4 text-center mt-4 mt-md-0">
                <img src="<?php echo e(asset('img/7.jpg')); ?>" 
                     class="img-fluid rounded-circle border border-5 border-white p-1" 
                     style="width: 250px; height: 250px; object-fit: cover;">
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\bagashartanto.20236004\WEB_LARAVEL\todo-app\resources\views/about.blade.php ENDPATH**/ ?>