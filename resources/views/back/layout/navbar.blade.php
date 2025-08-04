<style>
    #mainNav {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1030;
        padding: 0;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    #mainNav.scrolled {
        background: rgba(255, 255, 255, 0.98);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    }

    .navbar-brand {
        display: flex;
        align-items: center;
        font-weight: 700;
        font-size: 1.5rem;
        color: #ffffff !important;
        text-decoration: none;
        padding: 0.75rem 0;
        transition: all 0.3s ease;
    }

    .navbar-brand:hover {
        transform: translateY(-2px);
        color: rgb(0, 255, 119) !important;
    }

    .navbar-brand img {
        height: 45px;
        margin-right: 12px;
        border-radius: 8px;
        transition: transform 0.3s ease;
    }

    .navbar-brand:hover img {
        transform: rotate(5deg) scale(1.05);
    }

    .navbar-toggler {
        border: none;
        padding: 0.5rem;
        background: linear-gradient(45deg, rgb(5, 230, 24), rgb(19,45,31));
        border-radius: 8px;
        color: white;
        transition: all 0.3s ease;
    }

    .navbar-toggler:hover {
        transform: scale(1.1);
        box-shadow: 0 4px 15px rgba(19,45,31);
    }

    .navbar-toggler:focus {
        box-shadow: none;
    }

    .navbar-nav {
        gap: 0.5rem;
    }

    .nav-link {
        color: #2c3e50 !important;
        font-weight: 600;
        padding: 0.75rem 1.25rem !important;
        border-radius: 12px;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .nav-link::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(45deg, #05e618, #29b93c);
        transition: left 0.3s ease;
        z-index: -1;
        border-radius: 12px;
    }

    .nav-link:hover::before {
        left: 0;
    }

    .nav-link:hover {
        color: white !important;
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(19,45,31);
    }

    .dropdown-toggle::after {
        display: none;
    }

    .rotate-arrow {
        margin-left: 8px;
        transition: transform 0.3s ease;
        font-size: 0.8rem;
    }

    .dropdown:hover .rotate-arrow {
        transform: rotate(180deg);
    }

    .dropdown-menu {
        background: rgba(255, 255, 255, 0.98);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: none;
        border-radius: 16px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        padding: 1rem 0;
        margin-top: 0.5rem;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-20px) scale(0.95);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        min-width: 280px;
    }

    .dropdown:hover .dropdown-menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0) scale(1);
    }

    .dropdown-item {
        padding: 0.875rem 1.5rem;
        font-weight: 500;
        color: #2c3e50;
        display: flex;
        align-items: center;
        gap: 12px;
        transition: all 0.3s ease;
        border-radius: 0;
        position: relative;
        overflow: hidden;
    }

    .dropdown-item::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 4px;
        height: 100%;
        background: linear-gradient(45deg, #05e618, #29b93c);
        transform: scaleY(0);
        transition: transform 0.3s ease;
    }

    .dropdown-item:hover::before {
        transform: scaleY(1);
    }

    .dropdown-item:hover {
        background: linear-gradient(45deg, rgba(52, 152, 219, 0.1), rgba(41, 128, 185, 0.1));
        color: rgb(28, 131, 76);
        transform: translateX(8px);
    }

    .dropdown-item i {
        font-size: 1.1rem;
        color: rgb(19,45,31);
        transition: all 0.3s ease;
        width: 20px;
        text-align: center;
    }

    .dropdown-item:hover i {
        color: rgb(19,45,31);
        transform: scale(1.2);
    }

    .user-dropdown .nav-link {
        background: linear-gradient(45deg, #05e618, #29b93c);
        color: white !important;
        border-radius: 50px;
        padding: 0.5rem 1.25rem !important;
        box-shadow: 0 4px 15px rgba(19,45,31);
    }

    .user-dropdown .nav-link:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 8px 25px rgba(19,45,31);
    }

    .user-dropdown .nav-link::before {
        background: linear-gradient(45deg, #05e618, #29b93c);
    }

    .user-avatar {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 8px;
    }

    .dropdown-divider {
        margin: 0.75rem 1.5rem;
        border-top: 1px solid rgba(52, 152, 219, 0.2);
    }

.rotate-arrow {
    transition: transform 0.3s ease;
}

.show > a > .rotate-arrow {
    transform: rotate(180deg);
}


    /* Responsive */
    @media (max-width: 991.98px) {
        .navbar-collapse {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(20px);
            margin-top: 1rem;
            border-radius: 16px;
            padding: 1rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .dropdown-menu {
            position: static;
            float: none;
            width: auto;
            margin-top: 0;
            background: transparent;
            border: none;
            border-radius: 0;
            box-shadow: none;
            opacity: 1;
            visibility: visible;
            transform: none;
            backdrop-filter: none;
            padding: 0;
        }

        .dropdown-item {
            padding-left: 2rem;
        }
    }

    /* Scroll indicator */
    .scroll-indicator {
        position: fixed;
        top: 0;
        left: 0;
        height: 3px;
        background: linear-gradient(45deg, #05e618, #29b93c);
        z-index: 9999;
        transition: width 0.3s ease;
    }

    .rotate-arrow {
    transition: transform 0.3s ease;
}

.show > a > .rotate-arrow {
    transform: rotate(180deg);
}

</style>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('images/asset/logo.png') }}" alt="Tekominfo Logo" style="height: 40px;">
            Tekominfo
        </a>

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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle px-lg-3 py-3 py-lg-4" href="#" id="aboutDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        About <i class="fas fa-chevron-down ms-1"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                        <li>
                            <a class="dropdown-item" href="{{ url('/visi-misi') }}">
                                <i class="fas fa-bullseye me-2"></i> Visi & Misi
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/teacher-profile">
                                <i class="fas fa-chalkboard-teacher me-2"></i> Teacher Profile
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- KONSENTRASI -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle px-lg-3 py-3 py-lg-4" href="#" id="konsentrasiDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Konsentrasi Keahlian <i class="fas fa-chevron-down ms-1"></i>
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
                    <a class="nav-link dropdown-toggle d-flex align-items-center px-lg-3 py-3 py-lg-4" href="#"
                        id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user fa-lg text-white me-2"></i>
                        <span class="text-white">NAMA SAYA</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="userDropdown">
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>
                                Profile
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('/login') }}">
                                <i class="bi bi-box-arrow-in-right fa-sm fa-fw me-2 text-gray-400"></i>
                                Sign-in
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('/register') }}">
                                <i class="bi bi-box-arrow-in-right fa-sm fa-fw me-2 text-gray-400"></i>
                                Sign-up
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="logoutModalLabel">Ready to Leave?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Select "Logout" below if you are ready to end your current session.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="{{ url('/logout') }}">Logout</a>
      </div>
    </div>
  </div>
</div>
