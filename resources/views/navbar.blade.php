<nav class="navbar navbar-expand-lg border-bottom" style="background-color: #50C878;" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold d-flex align-items-center" href="{{ route('home') }}">
      <img src="{{ asset('img/1.jpg') }}" alt="Logo" width="35" height="35" class="me-2 rounded">
      MY PORTOFOLIO
    </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('service') ? 'active' : '' }}" href="{{ route('service') }}">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('kontak') ? 'active' : '' }}" href="{{ route('kontak') }}">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>