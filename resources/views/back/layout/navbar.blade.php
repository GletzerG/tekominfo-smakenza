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
        align-items: center;
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
    .navbar .dropdown-toggle::after {
    display: none;
}

    .dropdown-item i {
        font-size: 1rem;
        color: #6c757d;
    }

    /* Panah default dan saat hover */
    .rotate-arrow {
        margin-left: 5px;
        transition: transform 0.3s ease;
    }

    @media (min-width: 992px) {
        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown:hover .rotate-arrow {
            transform: rotate(180deg);
        }
    }
</style>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('images/asset/logo.png') }}" alt="Tekominfo Logo" style="height: 40px;">
            Tekominfo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item">
                    <a class="nav-link px-lg-3 py-3 py-lg-4" href="/">Home</a>
                </li>

                <!-- ABOUT -->
                <li class="nav-item dropdown" data-bs-auto-close="true">
                    <a class="nav-link dropdown-toggle px-lg-3 py-3 py-lg-4" href="#" id="aboutDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        About <i class="fas fa-chevron-down rotate-arrow"></i>
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

                <!-- KONSENTRASI -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle px-lg-3 py-3 py-lg-4" href="#" id="konsentrasiDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Konsentrasi Keahlian <i class="fas fa-chevron-down rotate-arrow"></i>
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

                <!-- USER -->
        
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown">
                            <i class="fas fa-user fa-lg text-white mr-2"></i>
                            <span class="text-white">NAMA SAYA</span>
                        </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <a class="dropdown-item" href="{{ url('/login') }}">
                            <i class="bi bi-box-arrow-in-right fa-sm fa-fw mr-2 text-gray-400"></i>
                            Sign-in
                        </a>
                        <a class="dropdown-item" href="{{ url('/register') }}">
                            <i class="bi bi-box-arrow-in-right fa-sm fa-fw mr-2 text-gray-400"></i>
                            Sign-up
                        </a>
                        <div class="dropdown-divider"></div>
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
