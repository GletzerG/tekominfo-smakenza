<style>
    #mainNav {
        position: sticky;
        top: 0;
        z-index: 1030;
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

        <div class="collapse navbar-collapse" id="navbarResponsive">
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

                <li class="nav-item">
                    <a class="btn btn-dark btn-login ms-lg-3 mt-lg-2 mt-2" href="#">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>