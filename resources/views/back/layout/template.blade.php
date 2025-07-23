<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Website Coba-coba</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
        rel="stylesheet" />

    <!-- Bootstrap & Theme CSS -->
    <link href="{{ asset('back/css/styles.css') }}" rel="stylesheet" />
</head>

<body>
    {{-- Navbar --}}
    @include('back.layout.navbar')

    {{-- Carousel --}}
    @include('back.layout.carousel')

    {{-- Banner / Gambar --}}
    <div class="text-center my-4">
        <img src="{{ asset('uploads/SMKVOKASI.png') }}" class="img-fluid rounded mb-3" style="max-width: 500px;"
            alt="Banner SMK Vokasi">
    </div>

    {{-- Konten Dinamis --}}
    <main class="container">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('back.layout.footer')

    <!-- Bootstrap Bundle (JS + Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Core Theme JS -->
    <script src="{{ asset('back/js/scripts.js') }}"></script>
</body>

</html>