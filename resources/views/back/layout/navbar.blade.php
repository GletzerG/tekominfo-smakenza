<style>
    #mainNav {
        position: sticky;
        top: 0;
        z-index: 1030;
        padding-left: 1.5rem;
        padding-right: 1.5rem;
        max-width: 100%;
    }

    
        .navbar-nav {
        display: flex;
        align-items: center; /* Ini akan memastikan semua item sejajar vertikal */
    }

    .btn-login {
        border-radius: .25rem;
        padding: 0.5rem 1rem;
        line-height: 1.5;
    }

    /* Animasi dropdown */
    .dropdown-menu {
        animation: dropdownFade 0.3s ease-in-out;
        border-radius: 0.5rem;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        border: none;
    }

    @keyframes dropdownFade {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Gaya item dropdown */
    .dropdown-item {
        padding: 0.75rem 1.25rem;
        font-weight: 500;
        color: #343a40;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        transition: background-color 0.2s, color 0.2s;
    }

    .dropdown-item:hover {
        background-color: #f8f9fa;
        color: #212529;
    }

    /* Ikon dalam dropdown */
    .dropdown-item i {
        font-size: 1rem;
        color: #6c757d;
    }

    /* Responsive hover (desktop only) */
    @media (min-width: 992px) {
        .dropdown:hover .dropdown-menu {
            display: block;
        }
    }
</style>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="/">Tekominfo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item">
                    <a class="nav-link px-lg-3 py-3 py-lg-4" href="/">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle px-lg-3 py-3 py-lg-4" href="#" id="aboutDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        About
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                        <li>
                            <a class="dropdown-item" href="{{ url('/visi-misi') }}">
                                <i class="fas fa-bullseye"></i> Visi & Misi
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/teacher-profile">
                                <i class="fas fa-chalkboard-teacher"></i> Teacher Profile
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle px-lg-3 py-3 py-lg-4" href="#" id="konsentrasiDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Konsentrasi Keahlian
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="konsentrasiDropdown">
                        <li>
                            <a class="dropdown-item" href="{{ url('/pplg') }}">
                                Pengembangan Perangkat Lunak dan Gim
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/tjkt">
                                Teknik Jaringan Komputer dan Telekomunikasi
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- User dropdown PISAH di luar dropdown lain -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle d-flex align-items-center px-lg-3 py-3 py-lg-4" href="#" id="userDropdown"
                        role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="img-profile rounded-circle me-1" style="vertical-align: middle;" src="{{ url('/images/asset/orang.jpg') }}" width="30" height="30">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>