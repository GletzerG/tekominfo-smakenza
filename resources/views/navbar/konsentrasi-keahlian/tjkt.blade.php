@extends('back.layout.navtemplate')

@section('title', 'Profil Jurusan TJKT')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold">Teknik Jaringan Komputer dan Telekomunikasi</h1>
        <h3 class="text-muted">(TJKT)</h3>
    </div>

    <div class="row align-items-center mb-5">
        <div class="col-md-6 mb-3">
            <img src="{{ asset('images/konsentrasi-keahlian/tjkt.png') }}" class="img-fluid rounded shadow " style="width: 600px; height: 300px;" alt="TJKT">
        </div>
        <div class="col-md-6">
            <h4><i class="bi bi-info-circle-fill text-primary me-2"></i>Deskripsi Jurusan</h4>
            <p>
                Teknik Jaringan Komputer dan Telekomunikasi (TJKT) adalah program keahlian yang mempelajari Teknologi Jaringan dan Komputer.
                Lulusan TJKT dibutuhkan industri sebagai teknisi jaringan komputer karena kebutuhan teknologi informasi sangat tinggi.
            </p>
        </div>
    </div>

    <div class="p-4 rounded mb-5" style="background-color: #f8f9fa;">
        <h4><i class="bi bi-list-check text-success me-2"></i>Kompetensi yang Dipelajari</h4>
        <div class="row">
            <div class="col-md-6">
                <ul>
                    <li>Pemrograman Dasar</li>
                    <li>Internet of Things (IoT)</li>
                    <li>TCP / IP</li>
                    <li>Administrasi Infrastruktur Jaringan</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul>
                    <li>Administrasi Sistem Jaringan</li>
                    <li>Teknologi Layanan Jaringan</li>
                    <li>Produk Kreatif & Kewirausahaan</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mb-5">
        <h4 class="mb-4"><i class="bi bi-briefcase-fill text-warning me-2"></i>Prospek Pekerjaan</h4>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <h5 class="card-title">IoT Programmer</h5>
                        <p class="card-text">Membuat sistem Internet of Things yang terintegrasi dengan perangkat keras.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <h5 class="card-title">Junior Network Engineer</h5>
                        <p class="card-text">Merancang dan mengelola sistem jaringan di perusahaan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <h5 class="card-title">IT Support</h5>
                        <p class="card-text">Membantu pengguna dalam penggunaan perangkat keras dan perangkat lunak.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="p-4 rounded mb-5" style="background-color: #f0f8ff;">
        <h4><i class="bi bi-building text-danger me-2"></i>Kerjasama Industri</h4>
        <ul>
            <li>PT. PINS Indonesia</li>
            <li>Putra Mahkota Technology</li>
        </ul>
    </div>

    <div class="alert alert-primary text-center rounded shadow">
        <strong>"Masa depanmu dimulai dari jaringan yang kamu bangun hari ini."</strong>
    </div>
</div>
@endsection