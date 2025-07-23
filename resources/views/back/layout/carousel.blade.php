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
            <img class="d-block w-100" src="{{ asset('uploads/mobil.png') }}" alt="First slide">
            <a href="https://youtu.be/F38EuG2dAyM?si=KgyVny90rYeEqtKQ" class="stretched-link"></a>
            <div class="carousel-caption d-none d-md-block">
                <h5>Lorem Ipsum</h5>
                <p>Dolor sit amet consetrour</p>
            </div>
        </div>

        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('uploads/gambar2.png') }}" alt="Second slide">
            <a href="https://contoh-link-2.com" class="stretched-link"></a>
            <div class="carousel-caption d-none d-md-block">
                <h5>Lorem Ipsum</h5>
                <p>Dolor sit amet consetrour</p>
            </div>
        </div>

        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('uploads/image.png') }}" alt="Third slide">
            <a href="https://contoh-link-3.com" class="stretched-link"></a>
            <div class="carousel-caption d-none d-md-block">
                <h5>Lorem Ipsum</h5>
                <p>Dolor sit amet consetrour</p>
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