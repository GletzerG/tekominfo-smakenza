{{-- {{-- @extends('back.layout.navtemplate')

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
@endsection --}}
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
            margin: 0 auto 70px auto;
            text-align: center;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
            border-bottom: 3px solid #2c3e50;
            padding-bottom: 10px;
            display: block;
        }

        .konten {
            margin-left: 8px;
            /* Kamu bisa sesuaikan misalnya 10px atau lebih */
        }

        .teacher-card {
            display: flex;
            flex-direction: row;
            align-items: stretch;
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

        .teacher-card:hover {
            transform: scale(1.015);
            box-shadow: 0 14px 35px rgba(0, 0, 0, 0.12);
        }

        .teacher-img {
            width: 150px;
            height: auto;
            object-fit: cover;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
        }

        .card-body {
            padding: 20px;
            font-size: 1rem;
            width: 100%;
            color: #34495e;
        }

        .teacher-info {
            display: flex;
            margin-bottom: 10px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
        }

        .teacher-info strong {
            width: 180px;
            color: #2c3e50;
            font-weight: 600;
            display: inline-block;
        }

        .teacher-info span {
            flex: 1;
        }

        @media (max-width: 400px) {
            .teacher-card {
                flex-direction: column;
            }

            .teacher-img {
                width: 100%;
                height: 250px;
                border-radius: 20px 20px 0 0;
            }

            .teacher-info {
                flex-direction: column;
            }

            .teacher-info strong {
                width: auto;
            }

            .teacher-info span {
                width: auto;
            }
        }
    </style>
@endpush

@section('content')
    <div class="container py-4">
        <h1 class="teacher-heading">Profil GTK</h1>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <!-- Card Contoh -->
            <div class="col">
                <div class="teacher-card">
                    <img src="{{ asset('images/teachers/guru5.png') }}" class="teacher-img" alt="Abi Habibi">
                    <div class="card-body">
                        <div class="teacher-info"><strong>Nama Lengkap</strong>: <span class="konten">Abi Habibi</span></div>
                        <div class="teacher-info"><strong>Jenis Kelamin</strong>: <span class="konten">Laki-Laki</span>
                        </div>
                        <div class="teacher-info"><strong>Tempat Lahir</strong>: <span class="konten">Jambi</span></div>
                        <div class="teacher-info"><strong>Tanggal Lahir</strong>: <span class="konten">13 Oktober 1979</span></div>
                        <div class="teacher-info"><strong>Jenis GTK</strong>: <span class="konten">Guru Bengkel</span></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="teacher-card">
                    <img src="{{ asset('images/teachers/guru6.png') }}" class="teacher-img" alt="Achmad Taufik">
                    <div class="card-body">
                        <div class="teacher-info"><strong>Nama Lengkap</strong>: <span class="konten">Achmad Taufik</span></div>
                        <div class="teacher-info"><strong>Jenis Kelamin</strong>: <span class="konten">Laki-Laki</span>
                        </div>
                        <div class="teacher-info"><strong>Tempat Lahir</strong>: <span class="konten">Balikpapan</span></div>
                        <div class="teacher-info"><strong>Tanggal Lahir</strong>: <span class="konten">13 Oktober 1981</span></div>
                        <div class="teacher-info"><strong>Jenis GTK</strong>: <span class="konten">Guru Bengkel</span></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="teacher-card">
                    <img src="{{ asset('images/teachers/guru4.png') }}" class="teacher-img" alt="Cicilia Siswarini">
                    <div class="card-body">
                        <div class="teacher-info"><strong>Nama Lengkap</strong>: <span class="konten">Cicilia Siswarini</span></div>
                        <div class="teacher-info"><strong>Jenis Kelamin</strong>: <span class="konten">Perempuan</span>
                        </div>
                        <div class="teacher-info"><strong>Tempat Lahir</strong>: <span class="konten">Bandung</span></div>
                        <div class="teacher-info"><strong>Tanggal Lahir</strong>: <span class="konten">1 Oktober 1966</span></div>
                        <div class="teacher-info"><strong>Jenis GTK</strong>: <span class="konten">Guru Bengkel</span></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="teacher-card">
                    <img src="{{ asset('images/teachers/guru2.png') }}" class="teacher-img" alt="Etik Sulistyawati">
                    <div class="card-body">
                        <div class="teacher-info"><strong>Nama Lengkap</strong>: <span class="konten">Etik Sulistyawati</span></div>
                        <div class="teacher-info"><strong>Jenis Kelamin</strong>: <span class="konten">Perempuan</span>
                        </div>
                        <div class="teacher-info"><strong>Tempat Lahir</strong>: <span class="konten">Boyolali</span></div>
                        <div class="teacher-info"><strong>Tanggal Lahir</strong>: <span class="konten">16 Mei 1983</span></div>
                        <div class="teacher-info"><strong>Jenis GTK</strong>: <span class="konten">Guru Bengkel</span></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="teacher-card">
                    <img src="{{ asset('images/teachers/guru3.png') }}" class="teacher-img" alt="Evlin Suzanna Pakpahan">
                    <div class="card-body">
                        <div class="teacher-info"><strong>Nama Lengkap</strong>: <span class="konten">Evlin Suzanna Pakpahan</span></div>
                        <div class="teacher-info"><strong>Jenis Kelamin</strong>: <span class="konten">Perempuan</span>
                        </div>
                        <div class="teacher-info"><strong>Tempat Lahir</strong>: <span class="konten">Balikpapan</span></div>
                        <div class="teacher-info"><strong>Tanggal Lahir</strong>: <span class="konten">07 Februari 1984</span></div>
                        <div class="teacher-info"><strong>Jenis GTK</strong>: <span class="konten">Guru Bengkel</span></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="teacher-card">
                    <img src="{{ asset('images/teachers/guru1.png') }}" class="teacher-img" alt="Sayom">
                    <div class="card-body">
                        <div class="teacher-info"><strong>Nama Lengkap</strong>: <span class="konten">Sayom</span></div>
                        <div class="teacher-info"><strong>Jenis Kelamin</strong>: <span class="konten">Laki-Laki</span>
                        </div>
                        <div class="teacher-info"><strong>Tempat Lahir</strong>: <span class="konten">Klaten</span></div>
                        <div class="teacher-info"><strong>Tanggal Lahir</strong>: <span class="konten">07 Februari 1967</span></div>
                        <div class="teacher-info"><strong>Jenis GTK</strong>: <span class="konten">Guru Bengkel</span></div>
                    </div>
                </div>
            </div>





        </div>
    </div>
@endsection
