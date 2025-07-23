<style>
    #mainNav {
        position: sticky;
        top: 0;
        z-index: 1030;
    }

    /* Tambahan biar tombol Login rapi */
    .btn-login {
        border-radius: .25rem;
        /* Siku tumpul sedikit */
        padding: 0.5rem 1rem;
        /* Biar tinggi mirip link nav */
        line-height: 1.5;
        /* Tinggi teks pas */
    }

    /* Biar di tengah vertikal */
    .navbar-nav .nav-item {
        display: flex;
        align-items: center;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="http://127.0.0.1:8000/">Tekominfo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item">
                    <a class="nav-link px-lg-3 py-3 py-lg-4" href="http://127.0.0.1:8000">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-lg-3 py-3 py-lg-4" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-dark btn-login ms-lg-3" href="#">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>