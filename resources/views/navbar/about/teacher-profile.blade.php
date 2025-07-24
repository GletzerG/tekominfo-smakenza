@extends('back.layout.navtemplate')

@section('title', 'Profil Guru')

@push('styles')
<style>
    body {
        background-color: #f8f9fa;
    }

    .teacher-heading {
        font-size: 2.5rem;
        font-weight: 700;
        color: #343a40;
        margin-bottom: 50px;
    }

    .teacher-card {
        border: none;
        border-radius: 20px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }

    .teacher-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
    }

  .teacher-card img {
    height: 300px; /* Tambahkan lebih tinggi dari sebelumnya (misal 220px jadi 300px) */
    object-fit: cover; /* atau gunakan contain untuk menampilkan seluruh gambar tanpa terpotong */
    width: 100%;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
}

    .card-title {
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 8px;
        color: #2c3e50;
    }

    .card-text {
        font-size: 0.95rem;
        color: #555;
        margin-bottom: 0;
    }
</style>
@endpush

@section('content')
<div class="container py-4">
    <h1 class="text-center teacher-heading">Profil Guru</h1>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        <!-- Guru 1 -->
        <div class="col">
            <div class="card teacher-card h-100 text-center">
                <img src="{{ asset('images/teachers/guru1.png') }}" class="card-img-top" alt="Bapak Sayom">
                <div class="card-body">
                    <h5 class="card-title">Bapak Sayom ,S.Pd</h5>
                    <p class="card-text">Jurusan: Rekayasa Perangkat Lunak</p>
                </div>
            </div>
        </div>

        <!-- Guru 2 -->
        <div class="col">
            <div class="card teacher-card h-100 text-center">
                <img src="{{ asset('images/teachers/guru2.png') }}" class="card-img-top" alt="Ibu Rina Wulandari">
                <div class="card-body">
                    <h5 class="card-title">Ibu Rina Wulandari</h5>
                    <p class="card-text">Jurusan: Teknik Komputer dan Jaringan</p>
                </div>
            </div>
        </div>

        <!-- Guru 3 -->
        <div class="col">
            <div class="card teacher-card h-100 text-center">
                <img src="{{ asset('images/teachers/guru3.png') }}" class="card-img-top" alt="Bapak Dedi Susanto">
                <div class="card-body">
                    <h5 class="card-title">Bapak Dedi Susanto</h5>
                    <p class="card-text">Jurusan: Teknik Komputer dan Jaringan</p>
                </div>
            </div>
        </div>

        <!-- Guru 4 -->
        <div class="col">
            <div class="card teacher-card h-100 text-center">
                <img src="{{ asset('images/teachers/guru4.png') }}" class="card-img-top" alt="Ibu Sari Lestari">
                <div class="card-body">
                    <h5 class="card-title">Ibu Sari Lestari</h5>
                    <p class="card-text">Jurusan: Rekayasa Perangkat Lunak</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card teacher-card h-100 text-center">
                <img src="{{ asset('images/teachers/guru1.png') }}" class="card-img-top" alt="Bapak Sayom">
                <div class="card-body">
                    <h5 class="card-title">Bapak Sayom</h5>
                    <p class="card-text">Jurusan: Rekayasa Perangkat Lunak</p>
                </div>
            </div>
        </div>

        <!-- Guru 2 -->
        <div class="col">
            <div class="card teacher-card h-100 text-center">
                <img src="{{ asset('images/teachers/guru2.png') }}" class="card-img-top" alt="Ibu Rina Wulandari">
                <div class="card-body">
                    <h5 class="card-title">Ibu Rina Wulandari</h5>
                    <p class="card-text">Jurusan: Teknik Komputer dan Jaringan</p>
                </div>
            </div>
        </div>

        <!-- Guru 3 -->
        <div class="col">
            <div class="card teacher-card h-100 text-center">
                <img src="{{ asset('images/teachers/guru3.png') }}" class="card-img-top" alt="Bapak Dedi Susanto">
                <div class="card-body">
                    <h5 class="card-title">Bapak Dedi Susanto</h5>
                    <p class="card-text">Jurusan: Teknik Komputer dan Jaringan</p>
                </div>
            </div>
        </div>

        <!-- Guru 4 -->
        <div class="col">
            <div class="card teacher-card h-100 text-center">
                <img src="{{ asset('images/teachers/guru4.png') }}" class="card-img-top" alt="Ibu Sari Lestari">
                <div class="card-body">
                    <h5 class="card-title">Ibu Sari Lestari</h5>
                    <p class="card-text">Jurusan: Rekayasa Perangkat Lunak</p>
                </div>
            </div>
        </div>

        <!-- Tambahkan lebih banyak guru jika dibutuhkan -->
    </div>
</div>
@endsection
