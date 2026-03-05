@extends('layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/background.css') }}">
@endsection

@section('content')
   
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
                            <a href="{{ route('service') }}" class="btn btn-success me-2 px-4">Keahlian Saya</a>
                            <a href="{{ route('kontak') }}" class="btn btn-outline-dark px-4">Hubungi Saya</a>
                             <a href="{{ route('about') }}" class="btn btn-outline-dark px-4">Tentang Saya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection