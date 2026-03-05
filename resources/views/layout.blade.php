<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio | Bagas Hartanto</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/background.css') }}">
    
    @yield('css')
</head>

<body class="@yield('body-class')"> 

    @include('navbar')

    <main class="container mt-5 p-4 rounded-4" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(5px); flex: 1 0 auto;">
        @yield('content')
    </main>

    <footer class="footer-custom text-white py-5 mt-auto">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h3 class="fw-bold mb-3">Bagas Hartanto</h3>
                    <h5 class="fw-bold mb-2">Hubungi Saya</h5>
                    <p class="mb-1 text-secondary">bagas12@email.com</p>
                    <p class="text-secondary">Solo, Jawa Tengah</p>
                </div>

                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="fw-bold mb-3 border-bottom border-success d-inline-block pb-1">Bidang Keahlian</h5>
                    <ul class="list-unstyled mt-2">
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none">Mechatronics</a></li>
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none">Automation</a></li>
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none">Electrical Design</a></li>
                    </ul>
                </div>

                <div class="col-md-4">
                    <h5 class="fw-bold mb-3 border-bottom border-success d-inline-block pb-1">Tautan</h5>
                    <ul class="list-unstyled mt-2">
                        <li class="mb-2"><a href="{{ route('home') }}" class="text-secondary text-decoration-none">Beranda</a></li>
                        <li class="mb-2"><a href="{{ route('about') }}" class="text-secondary text-decoration-none">Tentang Saya</a></li>
                        <li class="mb-2"><a href="{{ route('service') }}" class="text-secondary text-decoration-none">Portfolio</a></li>
                        <li class="mb-2"><a href="{{ route('kontak') }}" class="text-secondary text-decoration-none">Kontak</a></li>
                    </ul>
                </div>
            </div>
            
            <hr class="border-secondary mt-4">
            <div class="text-center">
                <span class="small text-secondary">&copy; 2026 My Portofolio - Bagas Hartanto</span>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>