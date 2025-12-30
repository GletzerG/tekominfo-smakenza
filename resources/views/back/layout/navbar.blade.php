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
        height: 85px;
    }

    #mainNav.scrolled {
        background: rgba(255, 255, 255, 0.98);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    }

    body {
        padding-top: 85px !important;
        margin: 0;
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
        background: linear-gradient(45deg, rgb(5, 230, 24), rgb(19, 45, 31));
        border-radius: 8px;
        color: white;
        transition: all 0.3s ease;
    }

    .navbar-toggler:hover {
        transform: scale(1.1);
        box-shadow: 0 4px 15px rgba(19, 45, 31, 0.5);
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
        box-shadow: 0 8px 25px rgba(19, 45, 31, 0.3);
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

    .show>a>.rotate-arrow {
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

    .dropdown:hover .dropdown-menu,
    .dropdown-menu.show {
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
        background: linear-gradient(45deg, rgba(5, 230, 24, 0.1), rgba(41, 185, 60, 0.1));
        color: rgb(28, 131, 76);
        transform: translateX(8px);
    }

    .dropdown-item i {
        font-size: 1.1rem;
        color: rgb(19, 45, 31);
        transition: all 0.3s ease;
        width: 20px;
        text-align: center;
    }

    .dropdown-item:hover i {
        color: rgb(19, 45, 31);
        transform: scale(1.2);
    }

    /* User Dropdown Styling - Updated */
    .user-dropdown .nav-link {
        background: linear-gradient(45deg, #05e618, #29b93c);
        color: white !important;
        border-radius: 50px;
        padding: 0.5rem 1.25rem !important;
        box-shadow: 0 4px 15px rgba(19, 45, 31, 0.3);
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .user-dropdown .nav-link:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 8px 25px rgba(19, 45, 31, 0.5);
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
        overflow: hidden;
        border: 2px solid rgba(255, 255, 255, 0.3);
        transition: all 0.3s ease;
    }

    .user-avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .user-avatar:hover {
        transform: scale(1.1);
        box-shadow: 0 4px 15px rgba(79, 195, 247, 0.4);
    }

    .dropdown-divider {
        margin: 0.75rem 1.5rem;
        border-top: 1px solid rgba(52, 152, 219, 0.2);
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

        .user-dropdown .nav-link {
            justify-content: center;
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

    /* Chat Badge Styles */
    .chat-badge {
        position: absolute;
        top: -5px;
        right: -5px;
        background: #ef4444;
        color: white;
        font-size: 0.65rem;
        font-weight: bold;
        min-width: 18px;
        height: 18px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0 4px;
        animation: pulse 2s infinite;
    }

    @keyframes pulse {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0.7;
        }
    }

    /* Floating Chat Button (Mobile) */
    .floating-chat-btn {
        position: fixed;
        bottom: 24px;
        right: 24px;
        z-index: 1000;
        width: 56px;
        height: 56px;
        background: linear-gradient(135deg, #3b82f6 0%, #6366f1 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4);
        transition: all 0.3s ease;
        color: white;
    }

    .floating-chat-btn:hover {
        transform: scale(1.1);
        box-shadow: 0 12px 35px rgba(59, 130, 246, 0.6);
    }

    @media (min-width: 768px) {
        .floating-chat-btn {
            display: none;
        }
    }
</style>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('images/asset/logo.png') }}" alt="Tekominfo Logo">
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
                                <i class="fas fa-laptop-code"></i> Rekayasa Perangkat Lunak
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/tjkt">
                                <i class="fas fa-network-wired"></i> Teknik Jaringan Komputer dan Telekomunikasi
                            </a>
                        </li>
                    </ul>
                </li>



                    <!-- USER DROPDOWN -->
                    <li class="nav-item dropdown user-dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center px-lg-3 py-3 py-lg-4" href="#" id="userDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    
                            <div class="user-avatar">
                                @if (Auth::check() && Auth::user()->avatar)
                                    <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="{{ Auth::user()->name }}"
                                        onerror="this.style.display='none'; this.parentElement.innerHTML='{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}';">
                                @elseif (Auth::check())
                                    <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&size=32&background=05e618&color=ffffff&font-size=0.6"
                                        alt="{{ Auth::user()->name }}"
                                        onerror="this.style.display='none'; this.parentElement.innerHTML='{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}';">
                                @else
                                    <img src="{{ asset('images/default-avatar.png') }}" alt="Guest">
                                @endif
                            </div>
                    
                            <span class="d-none d-lg-inline">{{ Auth::user()->name ?? 'Guest' }}</span>
                            <i class="fas fa-chevron-down rotate-arrow d-none d-lg-inline"></i>
                        </a>
                    
                        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="userDropdown">
                            @auth
                                <li>
                                    <a class="dropdown-item" href="{{ route('profile.index') }}">
                                        <i class="fas fa-user"></i> Profile
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="fas fa-sign-out-alt"></i> Logout
                                        </button>
                                    </form>
                                </li>
                            @endauth
                    
                            @guest
                                <li>
                                    <a class="dropdown-item" href="{{ url('/login') }}">
                                        <i class="bi bi-box-arrow-in-right"></i> Sign-in
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ url('/register') }}">
                                        <i class="bi bi-person-plus"></i> Sign-up
                                    </a>
                                </li>
                            @endguest
                        </ul>
                    </li>

            </ul>
        </div>
    </div>
</nav>


<!-- Logout Modal -->
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
                <form method="POST" action="{{ route('logout') }}" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-primary">Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Smooth scroll effect
    window.addEventListener('scroll', function () {
        const navbar = document.getElementById('mainNav');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });


        // Update count on page load
        document.addEventListener('DOMContentLoaded', function () {
            updateUnreadCount();
        });

        // Update count every 30 seconds
        setInterval(updateUnreadCount, 30000);

        // Update count when page becomes visible (user switches back to tab)
        document.addEventListener('visibilitychange', function () {
            if (!document.hidden) {
                updateUnreadCount();
            }
        });

        

    // Close dropdowns when clicking outside
    document.addEventListener('click', function (event) {
        const dropdowns = document.querySelectorAll('.dropdown');
        dropdowns.forEach(dropdown => {
            if (!dropdown.contains(event.target)) {
                const dropdownMenu = dropdown.querySelector('.dropdown-menu');
                if (dropdownMenu && dropdownMenu.classList.contains('show')) {
                    bootstrap.Dropdown.getInstance(dropdown.querySelector('[data-bs-toggle="dropdown"]'))?.hide();
                }
            }
        });
    });
</script>