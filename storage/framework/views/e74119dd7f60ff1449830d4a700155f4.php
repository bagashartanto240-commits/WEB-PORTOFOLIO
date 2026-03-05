<nav class="navbar navbar-expand-lg border-bottom" style="background-color: #50C878;" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold d-flex align-items-center" href="<?php echo e(route('home')); ?>">
      <img src="<?php echo e(asset('img/1.jpg')); ?>" alt="Logo" width="35" height="35" class="me-2 rounded">
      MY PORTOFOLIO
    </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link <?php echo e(request()->is('/') ? 'active' : ''); ?>" href="<?php echo e(route('home')); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(request()->is('service') ? 'active' : ''); ?>" href="<?php echo e(route('service')); ?>">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(request()->is('about') ? 'active' : ''); ?>" href="<?php echo e(route('about')); ?>">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(request()->is('kontak') ? 'active' : ''); ?>" href="<?php echo e(route('kontak')); ?>">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav><?php /**PATH D:\bagashartanto.20236004\WEB_LARAVEL\todo-app\resources\views/navbar.blade.php ENDPATH**/ ?>