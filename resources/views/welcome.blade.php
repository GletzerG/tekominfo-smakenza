@extends('back.layout.template')
@extends('back.layout.vidio')
@section('content')
                                    <!-- Main Content-->
                        <div class="container px-4 px-lg-5">
                            <div class="row gx-4 gx-lg-5 justify-content-center">
                                <div class="video-section">
                                    <div class="section-header">
                                        <h1 class="section-title">Lihat vidio ini</h1>
                                        <p class="section-subtitle">Lorem Ipsum Dolor Sit Amet Consectrour</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="container my-5">
                                <div class="row g-4">
                                    <!-- Video 1 -->
                                    <div class="col-lg-6 col-md-12">
                                        <div class="card shadow-lg border-0 h-100">
                                            <div class="card-body p-0">
                                                <div class="ratio ratio-16x9">
                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/FQTROS_NKj0?si=hzUVJ7v8ZYNbhtH4"
                                                        title="YouTube video player" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Video 2 -->
                                    <div class="col-lg-6 col-md-12">
                                        <div class="card shadow-lg border-0 h-100">
                                            <div class="card-body p-0">
                                                <div class="ratio ratio-16x9">
                                                    <iframe src="https://www.youtube.com/embed/j3p6sXq_uUM?si=_rEwW_eQkclYbCv5"
                                                        title="YouTube video player" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="rounded-top"
                                                        data-video-id="j3p6sXq_uUM">
                                                    </iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    <hr class="hr" />
    <div class="text-left my-5">
      <h1 class="display-4 fw-bold text-warning title-highlight">
        Judul Artikel Menarik 📰
      </h1>
    </div>


            <div class="container my-5">
                <div class="row g-4 justify-content-left">
                    <!-- Artikel 1 -->
                    <div class="col-24 col-md-20 col-lg-16">
                        <a href="#" class="text-decoration-none">
                            <div class="card h-100 shadow-lg border-0 hover-shadow transition-all duration-300">
                                <div class="row g-0 align-items-center">
                                    <!-- Gambar -->
                                    <div class="col-md-5 d-flex justify-content-center align-items-center bg-light">
                                        <img src="{{ asset('images/carousel/image 1.png') }}" alt="Gambar Artikel"
                                            class="img-fluid rounded-start w-100" style="max-height: 250px; object-fit: cover;"
                                            loading="lazy" decoding="async" draggable="false" />
                                    </div>
                                    <!-- Teks Artikel -->
                                    <div class="col-md-7">
                                        <div class="card-body">
                                            <h2 class="card-title h4 mb-2 text-primary fw-bold">Judul Artikel</h2>
                                            <p class="card-subtitle mb-1 text-muted fw-semibold fs-6">Nama Penulis</p>
                                            <p class="card-text text-secondary mb-0 fs-6" style="text-align: justify;">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed rutrum eu nulla, quis
                                                lacinia lacus tristique eu.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        <!-- Artikel 2-->
        <div class="col-24 col-md-20 col-lg-16">
            <a href="#" class="text-decoration-none">
                <div class="card h-100 shadow-lg border-0 hover-shadow transition-all duration-300">
                    <div class="row g-0 align-items-center">
                        <!-- Gambar -->
                        <div class="col-md-5 d-flex justify-content-center align-items-center bg-light">
                            <img src="{{ asset('images/asset/image.png') }}" alt="Gambar Artikel"
                                class="img-fluid rounded-start w-100" style="max-height: 250px; object-fit: cover;"
                                loading="lazy" decoding="async" draggable="false" />
                        </div>
                        <!-- Teks Artikel -->
                        <div class="col-md-7">
                            <div class="card-body">
                                <h2 class="card-title h4 mb-2 text-primary fw-bold">Judul Artikel</h2>
                                <p class="card-subtitle mb-1 text-muted fw-semibold fs-6">Nama Penulis</p>
                                <p class="card-text text-secondary mb-0 fs-6" style="text-align: justify;">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed rutrum eu nulla, quis
                                    lacinia lacus tristique eu.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        </div>
        </div>

                </div>
                <style>
                    .hover-shadow:hover {
                        box-shadow: 0 8px 24px rgba(0,0,0,0.15) !important;
                        transform: translateY(-4px) scale(1.02);
                    }
                </style>



                                    <!-- Footer-->


                                    <!-- Bootstrap core JS-->
@endsection