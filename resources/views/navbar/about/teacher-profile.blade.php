@extends('back.layout.navtemplate')

@section('title', 'Profil GTK')

@push('styles')
<style>
    body {
        background: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .teacher-heading {
        font-size: 2.5rem;
        font-weight: bold;
        color: #2c3e50;
        margin-bottom: 50px;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
    }

    .teacher-card {
        display: flex;
        flex-direction: row;
        border-radius: 20px;
        overflow: hidden;
        background: rgba(255, 255, 255, 0.75);
        backdrop-filter: blur(10px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        min-height: 200px;
    }

    .teacher-card::before {
        content: "";
        position: absolute;
        inset: 0;
        border: 2px solid transparent;
        border-radius: 20px;

        -webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
        -webkit-mask-composite: destination-out;
        mask-composite: exclude;
        pointer-events: none;
    }

    .teacher-card:hover {
        transform: scale(1.015);
        box-shadow: 0 14px 35px rgba(0, 0, 0, 0.12);
    }

    .teacher-img {
        width: 150px;
        height: 100%;
        object-fit: cover;
        border-top-left-radius: 20px;
        border-bottom-left-radius: 20px;
        transition: transform 0.3s ease;
    }

    .teacher-card:hover .teacher-img {
        transform: scale(1.05);
    }

    .card-body {
        padding: 20px;
        font-size: 0.95rem;
        overflow-y: auto;
        width: 100%;
        color: #34495e;
    }

    .card-body p {
        margin: 8px 0;
        line-height: 1.5;
    }

    .card-body p strong {
        color: #2c3e50;
        font-weight: 600;
    }

    @media (max-width: 400px) {
        .teacher-card {
            flex-direction: column;
            height: auto;
        }

        .teacher-img {
            width: 100%;
            height: 250px;
            border-radius: 20px 20px 0 0;
        }

        .teacher-info {
            display: grid;
            grid-template-columns: auto 1fr;
            gap: 6px 12px;
            font-size: 0.95rem;
            margin-bottom: 6px;
            align-items: center;
        }

        .teacher-info strong {
            color: #2d3748;
            font-weight: 600;
        }
    }
</style>
@endpush


@section('content')
<div class="container py-4">
    <h1 class="text-center teacher-heading">Profil GTK</h1>

    <div class="row row-cols-1 row-cols-md-2 g-4">
        <!-- Card 1 -->

        <!-- Card 2 -->
        <div class="col">
            <div class="teacher-card">
                <img src="{{ asset('images/teachers/guru5.png') }}" class="teacher-img" alt="Anikah">
                <div class="card-body">
                    <p><strong>Nama Lengkap</strong>: Abi Habibi</p>
                    <p><strong>Jenis Kelamin</strong>: Laki-Laki</p>
                    <p><strong>Tempat Lahir</strong>: Jambi</p>
                    <p><strong>Tanggal Lahir</strong>: 13 Oktober 1979</p>
                    <p><strong>Jenis GTK</strong>: Guru Mata Pelajaran Produktif</p>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col">
            <div class="teacher-card">
                <img src="{{ asset('images/teachers/guru6.png') }}" class="teacher-img" alt="Anita Siwu">
                <div class="card-body">
                    <p><strong>Nama Lengkap</strong>: Achmad Taufik</p>
                    <p><strong>Jenis Kelamin</strong>: Laki-Laki</p>
                    <p><strong>Tempat Lahir</strong>: Balikpapan</p>
                    <p><strong>Tanggal Lahir</strong>: 13 Oktober 1981</p>
                    <p><strong>Jenis GTK</strong>: Guru Mata Pelajaran Produktif</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="teacher-card">
                <img src="{{ asset('images/teachers/guru4.png') }}" class="teacher-img" alt="Anita Siwu">
                <div class="card-body">
                    <p><strong>Nama Lengkap</strong>: Cicilia Siswarini</p>
                    <p><strong>Jenis Kelamin</strong>: Perempuan</p>
                    <p><strong>Tempat Lahir</strong>: Bandung</p>
                    <p><strong>Tanggal Lahir</strong>: 01 Oktober 1966</p>
                    <p><strong>Jenis GTK</strong>: Guru Mata Pelajaran Produktif</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="teacher-card">
                <img src="{{ asset('images/teachers/guru2.png') }}" class="teacher-img" alt="Anita Siwu">
                <div class="card-body">
                    <p><strong>Nama Lengkap</strong>: Etik Sulistyawati</p>
                    <p><strong>Jenis Kelamin</strong>: Perempuan</p>
                    <p><strong>Tempat Lahir</strong>: Boyolali</p>
                    <p><strong>Tanggal Lahir</strong>: 16 Mei 1983</p>
                    <p><strong>Jenis GTK</strong>: Guru Mata Pelajaran Adaktif / Normatif</p>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col">
            <div class="teacher-card">
                <img src="{{ asset('images/teachers/guru3.png') }}" class="teacher-img" alt="Annet Riyanto">
                <div class="card-body">
                    <p><strong>Nama Lengkap</strong>: Evlin Suzanna Pakpahan</p>
                    <p><strong>Jenis Kelamin</strong>: Perempuan</p>
                    <p><strong>Tempat Lahir</strong>: Balikpapan</p>
                    <p><strong>Tanggal Lahir</strong>: 07 Februari 1984</p>
                    <p><strong>Jenis GTK</strong>: Guru Mata Pelajaran Adaktif / Normatif</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="teacher-card">
                <img src="{{ asset('images/teachers/guru1.png') }}" class="teacher-img" alt="Aneke">
                <div class="card-body">
                    <p><strong>Nama Lengkap</strong>: Sayom</p>
                    <p><strong>Jenis Kelamin</strong>: Laki-Laki</p>
                    <p><strong>Tempat Lahir</strong>: Klaten</p>
                    <p><strong>Tanggal Lahir</strong>: 07 Februari 1967</p>
                    <p><strong>Jenis GTK</strong>: Guru Mata Pelajaran Produktif</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection