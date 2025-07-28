<style>
    .carousel-caption {
        background: rgba(0, 0, 0, 0.4);
        padding: 15px;
        border-radius: 10px;
        transition: background 0.3s ease, transform 0.3s ease;
    }

    .carousel-item:hover .carousel-caption {
        background: rgba(0, 0, 0, 0.7);
        transform: scale(1.05);
    }

    .carousel-caption h5,
    .carousel-caption p {
        transition: color 0.3s ease;
    }

    .carousel-item:hover .carousel-caption h5,
    .carousel-item:hover .carousel-caption p {
        color: #f8f9fa;
    }

    .carousel-item img {
        width: 100%;
        height: 500px;
        /* Tinggi fix, sesuaikan kebutuhan */
        object-fit: cover;
    }
</style>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('images/carousel/SMK-img.jpg') }}" alt="First slide">
            <a href="https://smkn1-bpn.sch.id/" class="stretched-link"></a>
            <div class="carousel-caption d-none d-md-block">
                <h5>SMK Negeri 1 Balikpapan</h5>
                <p>Profile SMK Negeri 1 Balikpapan</p>
            </div>
        </div>

        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('images/carousel/PPLG.jpg') }}" alt="Second slide">
            <a href="pplg" class="stretched-link"></a>
            <div class="carousel-caption d-none d-md-block">
                <h5>Pengembangan Perangkat Lunak dan Gim</h5>
                <p>Profile Pengembangan Perangkat Lunak dan Gim</p>
            </div>
        </div>

        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('images/carousel/tkj.jpg') }}" alt="Third slide">
            <a href="tjkt" class="stretched-link"></a>
            <div class="carousel-caption d-none d-md-block">
                <h5>Teknik Jaringan Komputer dan Telekomunikasi</h5>
                <p>Profil Teknik Jaringan Komputer dan Telekomunikasi</p>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>