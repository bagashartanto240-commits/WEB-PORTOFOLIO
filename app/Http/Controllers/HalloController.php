<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalloController extends Controller
{
    public function index()
    {
        // Memanggil resources/views/home.blade.php
        return view('home');
    }

    public function service()
    {
        // Memanggil resources/views/service.blade.php
        return view('service');
    }

    public function about()
    {
        // Memanggil resources/views/about.blade.php
        return view('about');
    }

    public function kontak()
    {
        // Memanggil resources/views/kontak.blade.php
        return view('kontak');
    }
}