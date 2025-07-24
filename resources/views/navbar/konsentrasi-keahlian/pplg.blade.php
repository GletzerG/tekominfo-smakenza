@extends('back.layout.navtemplate')

@section('title', 'Profil Jurusan PPLG')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold">Pengembangan Perangkat Lunak dan Gim</h1>
        <h3 class="text-muted">(PPLG)</h3>
    </div>

    <div class="row align-items-center mb-5">
        <div class="col-md-6 mb-3">
            <img src="{{ asset('images/konsentrasi-keahlian/pplg.png') }}" class="img-fluid rounded shadow" style="width: 600px; height: 300px;" alt="PPLG">
        </div>
        <div class="col-md-6">
            <h4><i class="bi bi-info-circle-fill text-primary me-2"></i>Deskripsi Jurusan</h4>
            <p>
                Pengembangan Perangkat Lunak dan Gim (PPLG) adalah salah satu program keahlian yang mempelajari tentang analisis dan pemrograman komputer. Lulusan PPLG dibutuhkan industri karena keterampilan teknis mereka dalam mengembangkan teknologi berbasis komputer.
            </p>
        </div>
    </div>

    <div class="p-4 rounded mb-5" style="background-color: #f8f9fa;">
        <h4><i class="bi bi-list-check text-success me-2"></i>Kompetensi yang Dipelajari</h4>
        <div class="row">
            <div class="col-md-6">
                <strong>Basis Data:</strong>
                <ul>
                    <li>Microsoft Access</li>
                    <li>DFD (Data Flow Diagram)</li>
                </ul>
                <strong>Multimedia & Desain:</strong>
                <ul>
                    <li>Photoshop</li>
                    <li>Corel Draw</li>
                    <li>Video Editing</li>
                    <li>Web Design</li>
                    <li>Unreal Engine</li>
                </ul>
            </div>
            <div class="col-md-6">
                <strong>Pemrograman:</strong>
                <ul>
                    <li>Algoritma Dasar & Lanjut</li>
                    <li>Gerbang Logika</li>
                    <li>Bahasa C / C++ / Java / JavaScript</li>
                    <li>Pemrograman Desktop</li>
                    <li>Pemrograman Web (HTML, CSS, PHP, MySQL)</li>
                    <li>Pemrograman Aplikasi Mobile (Android)</li>
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
                        <h5 class="card-title">Web Developer</h5>
                        <p class="card-text">Membuat dan mengembangkan aplikasi berbasis web untuk berbagai kebutuhan pengguna.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <h5 class="card-title">Game Developer</h5>
                        <p class="card-text">Mengembangkan aplikasi game interaktif untuk platform desktop maupun mobile.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <h5 class="card-title">Mobile App Developer</h5>
                        <p class="card-text">Merancang dan membangun aplikasi berbasis Android dan platform mobile lainnya.</p>
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
            <li>Wirabuana</li>
            <li>Maha Karya Teknologi</li>
        </ul>
    </div>

    <div class="alert alert-primary text-center rounded shadow">
        <strong>"Bangun masa depanmu dengan baris kode yang kamu tulis hari ini."</strong>
    </div>
</div>
@endsection