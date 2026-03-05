@extends('layout') 

@section('body-class', 'bg-service')
@section('content')
    <div class="py-4 text-white"> <h2 class="fw-bold border-bottom pb-2">LAYANAN DAN KEMAMPUAN</h2>
        <p class="text-light">Bidang mekatronika yang saya kuasai:</p> <div class="row mt-4">
            <div class="col-md-6 mb-5">
                <h4 class="fw-bold text-white">1. Design Electrical (SolidWorks Electrical)</h4>
                <p>Pemodelan 3D komponen elektrikal, merancang rangkaian electrical yang sesuai di SolidWorks Electrical.</p>
                <img src="{{ asset('img/2.jpg') }}" alt="Skill 90%" class="img-fluid mt-2 rounded" style="max-width: 350px;">
            </div>

            <div class="col-md-6 mb-5">
                <h4 class="fw-bold text-white">2. Drafting & Layout (AutoCAD) dan (AUTODESK FUSION 360)</h4>
                <p>Pembuatan gambar kerja 2D dan 3D, Pembuatan layout jalur PCB.</p>
                <img src="{{ asset('img/3.jpg') }}" alt="Skill 75%" class="img-fluid mt-2 rounded" style="max-width: 350px;">
            </div>

            <div class="col-md-6 mb-5">
                <h4 class="fw-bold text-white">3. Programming</h4>
                <p>Pemrograman serta pengembangan logika otomasi untuk efisiensi sistem mekatronika.</p>
                <img src="{{ asset('img/4.jpg') }}" alt="Skill 60%" class="img-fluid mt-2 rounded" style="max-width: 350px;">
            </div>

            <div class="col-md-6 mb-5">
                <h4 class="fw-bold text-white">4. Electrical Wiring </h4>
                <p>Instalasi dan troubleshooting kabel listrik dan juga pemahaman komponen elektrikal lainnya.</p>
                <img src="{{ asset('img/5.jpg') }}" alt="Skill 55%" class="img-fluid mt-2 rounded" style="max-width: 350px;">
            </div>
        </div>
    </div>
@endsection