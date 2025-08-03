@extends('back.layout.navtemplate')

@section('title', 'Profil Jurusan TJKT')

@section('content')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            line-height: 1.6;
            color: #2c3e50;
            background-color: #fafbfc;
        }

        /* Hero Section - Enhanced but subtle */
        .hero-section {
            height: 70vh;
            background: linear-gradient(135deg, rgba(52, 73, 94, 0.85), rgba(44, 62, 80, 0.9)), url('{{ asset('images/banner-tjkt.jpg') }}') center/cover no-repeat;
            display: flex;
            align-items: center;
            position: static;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background:
                radial-gradient(circle at 20% 80%, rgba(120, 119, 198, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(74, 144, 226, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(72, 198, 239, 0.2) 0%, transparent 50%);
            opacity: 0.7;
        }

        .hero-section::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background: linear-gradient(transparent, rgba(250, 251, 252, 0.3));
        }

        .hero-content {
            max-width: 700px;
            padding: 0 30px;
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: 3rem;
            font-weight: 200;
            color: white;
            margin-bottom: 25px;
            line-height: 1.1;
            text-shadow: 0 4px 8px rgba(0,0,0,0.3);
            letter-spacing: -0.5px;
        }

        .hero-title strong {
            font-weight: 700;
            background: linear-gradient(135deg, #fff, #e8f4fd);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            color: rgba(255,255,255,0.95);
            margin-bottom: 35px;
            line-height: 1.7;
            text-shadow: 0 2px 4px rgba(0,0,0,0.2);
            font-weight: 300;
        }

        .cta-button {
            background: rgba(255,255,255,0.15);
            color: white;
            padding: 15px 35px;
            border: 2px solid rgba(255,255,255,0.25);
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 500;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            transition: all 0.4s ease;
            backdrop-filter: blur(15px);
            position: relative;
            overflow: hidden;
        }

        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.6s ease;
        }

        .cta-button:hover {
            background: rgba(255,255,255,0.25);
            border-color: rgba(255,255,255,0.4);
            transform: translateY(-3px);
            color: white;
            text-decoration: none;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
        }

        .cta-button:hover::before {
            left: 100%;
        }

        /* Main Content */
        .main-content {
            padding: 80px 0;
            background: white;
        }

        .section {
            margin-bottom: 80px;
        }

        .section-title {
            font-size: 2rem;
            font-weight: 300;
            color: #2c3e50;
            margin-bottom: 40px;
            display: flex;
            align-items: center;
            position: relative;
        }

        .section-title i {
            color: #4a90e2;
            margin-right: 15px;
            font-size: 1.8rem;
        }

        .section-title::after {
            content: '';
            flex: 1;
            height: 2px;
            background: linear-gradient(to right, rgba(74, 144, 226, 0.3), transparent);
            margin-left: 25px;
            border-radius: 1px;
        }

        /* Description Card - Larger image */
        .description-card {
            background: linear-gradient(135deg, #f8f9fa, #ffffff);
            border-radius: 20px;
            padding: 50px;
            border: 1px solid #e9ecef;
            transition: all 0.4s ease;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        .description-card:hover {
            background: white;
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.1);
            transform: translateY(-5px);
        }

        .description-content {
            display: flex;
            align-items: center;
            gap: 50px;
        }

        .description-image {
            flex: 0 0 300px;
            height: 240px;
            background: url('{{ asset('images/konsentrasi-keahlian/tjkt.png') }}') center/contain no-repeat;
            background-color: #f8f9fa;
            border-radius: 20px;
            border: 4px solid white;
            box-shadow: 0 8px 30px rgba(0,0,0,0.12);
            position: relative;
            overflow: hidden;
            transition: all 0.4s ease;
        }

        .description-image:hover {
            transform: scale(1.05);
            box-shadow: 0 12px 40px rgba(0,0,0,0.18);
        }

        .description-image::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(74, 144, 226, 0.05), transparent);
            border-radius: 16px;
        }

        .description-text {
            flex: 1;
        }

        .description-text p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #495057;
            margin: 0;
            font-weight: 400;
        }

        /* Competency Section */
        .competency-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 35px;
            margin-top: 30px;
        }

        .competency-card {
            background: linear-gradient(135deg, #ffffff, #f8f9fa);
            border: 1px solid #e9ecef;
            border-radius: 18px;
            padding: 40px;
            transition: all 0.4s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        .competency-card:hover {
            border-color: rgba(74, 144, 226, 0.3);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
            transform: translateY(-3px);
            background: white;
        }

        .competency-card ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .competency-card li {
            padding: 12px 0;
            position: relative;
            padding-left: 30px;
            color: #495057;
            font-weight: 500;
            border-bottom: 1px solid rgba(233, 236, 239, 0.5);
            transition: all 0.3s ease;
        }

        .competency-card li:last-child {
            border-bottom: none;
        }

        .competency-card li::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 8px;
            height: 8px;
            background: linear-gradient(135deg, #4a90e2, #48c6ef);
            border-radius: 50%;
            box-shadow: 0 2px 4px rgba(74, 144, 226, 0.3);
        }

        .competency-card:hover li {
            color: #2c3e50;
        }

        /* Job Prospects */
        .job-prospects {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 35px;
            margin-top: 30px;
        }

        .job-card {
            background: linear-gradient(135deg, #ffffff, #f8f9fa);
            border: 1px solid #e9ecef;
            border-radius: 18px;
            padding: 40px;
            text-align: center;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        .job-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(135deg, #4a90e2, #48c6ef);
            transform: scaleX(0);
            transition: transform 0.4s ease;
        }

        .job-card:hover::before {
            transform: scaleX(1);
        }

        .job-card:hover {
            border-color: rgba(74, 144, 226, 0.3);
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.1);
            transform: translateY(-5px);
            background: white;
        }

        .job-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            border: 3px solid rgba(74, 144, 226, 0.1);
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            color: #4a90e2;
            font-size: 2rem;
            transition: all 0.4s ease;
        }

        .job-card:hover .job-icon {
            background: linear-gradient(135deg, #4a90e2, #48c6ef);
            border-color: #4a90e2;
            color: white;
            transform: rotate(5deg) scale(1.1);
        }

        .job-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 18px;
        }

        .job-description {
            color: #6c757d;
            font-size: 1rem;
            line-height: 1.7;
            font-weight: 400;
        }

        /* Partnership Section */
        .partnership-card {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            border-radius: 18px;
            padding: 50px;
            border: 1px solid #dee2e6;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            text-decoration: none;
        }

        .partnership-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 25px;
            text-decoration: none;
        }

        .partnership-item {
            background: linear-gradient(135deg, #ffffff, #f8f9fa);
            padding: 15px 30px;
            border-radius: 30px;
            border: 2px solid rgba(74, 144, 226, 0.1);
            color: #495057;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.4s ease;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            text-decoration: none;
        }

        .partnership-item:hover {
            background: linear-gradient(135deg, #4a90e2, #48c6ef);
            color: white;
            border-color: #4a90e2;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(74, 144, 226, 0.3);
            text-decoration: none;
        }

        /* Quote Section */
        .quote-card {
            background: linear-gradient(135deg, #ffffff, #f8f9fa);
            border: 1px solid #e9ecef;
            border-left: 6px solid #4a90e2;
            border-radius: 18px;
            padding: 50px;
            text-align: center;
            position: relative;
            font-style: italic;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06);
        }

        .quote-card::before {
            content: '"';
            position: absolute;
            top: 15px;
            left: 25px;
            font-size: 4rem;
            color: rgba(74, 144, 226, 0.2);
            font-family: serif;
            line-height: 1;
        }

        .quote-text {
            font-size: 1.4rem;
            color: #495057;
            font-weight: 300;
            line-height: 1.7;
            margin: 0;
            letter-spacing: 0.3px;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.2rem;
            }

            .hero-section {
                height: 60vh;
            }

            .hero-content {
                padding: 0 20px;
            }

            .description-content {
                flex-direction: column;
                text-align: center;
                gap: 30px;
            }

            .description-image {
                flex: none;
                width: 100%;
                max-width: 280px;
                height: 200px;
                margin: 0 auto;
            }

            .section-title {
                font-size: 1.6rem;
            }

            .section-title::after {
                display: none;
            }

            .competency-grid {
                grid-template-columns: 1fr;
            }

            .job-prospects {
                grid-template-columns: 1fr;
            }

            .main-content {
                padding: 60px 0;
            }

            .section {
                margin-bottom: 60px;
            }

            .description-card,
            .partnership-card,
            .quote-card {
                padding: 30px;
            }

            .competency-card,
            .job-card {
                padding: 30px;
            }
        }

        /* Enhanced animations */
        html {
            scroll-behavior: smooth;
        }

        /* Animasi yang lebih ringan */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .description-image {
            animation: float 6s ease-in-out infinite;
        }
    </style>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">
                    <strong>Teknik Jaringan</strong><br>
                    Komputer & Telekomunikasi
                </h1>
                <p class="hero-subtitle">
                    Jurusan masa depan untuk generasi digital. Bangun karirmu di dunia jaringan dan teknologi informasi dengan kurikulum terdepan dan fasilitas modern.
                </p>
                <a href="#deskripsi" class="cta-button">
                    <i class="bi bi-arrow-down me-2"></i>
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <!-- Description Section -->
            <div class="section fade-in" id="deskripsi">
                <h4 class="section-title">
                    <i class="bi bi-info-circle"></i>
                    Deskripsi Jurusan
                </h4>
                <div class="description-card">
                    <div class="description-content">
                        <div class="description-image">
                            <i class="bi bi-cpu"></i>
                        </div>
                        <div class="description-text">
                            <p>
                                Teknik Jaringan Komputer dan Telekomunikasi (TJKT) adalah program keahlian yang mempelajari Teknologi Jaringan dan Komputer.
                                Lulusan TJKT dibutuhkan industri sebagai teknisi jaringan komputer karena kebutuhan teknologi informasi sangat tinggi.
                                Program ini mempersiapkan siswa untuk menjadi profesional di bidang teknologi informasi dan komunikasi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Competency Section -->
            <div class="section fade-in">
                <h4 class="section-title">
                    <i class="bi bi-list-check"></i>
                    Kompetensi yang Dipelajari
                </h4>
                <div class="competency-grid">
                    <div class="competency-card">
                        <ul>
                            <li>Pemrograman Dasar</li>
                            <li>Internet of Things (IoT)</li>
                            <li>TCP / IP</li>
                            <li>Administrasi Infrastruktur Jaringan</li>
                        </ul>
                    </div>
                    <div class="competency-card">
                        <ul>
                            <li>Administrasi Sistem Jaringan</li>
                            <li>Teknologi Layanan Jaringan</li>
                            <li>Produk Kreatif & Kewirausahaan</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Job Prospects Section -->
            <div class="section fade-in">
                <h4 class="section-title">
                    <i class="bi bi-briefcase"></i>
                    Prospek Pekerjaan
                </h4>
                <div class="job-prospects">
                    <div class="job-card">
                        <div class="job-icon">
                            <i class="bi bi-code-slash"></i>
                        </div>
                        <h5 class="job-title">Hardware and Software Technicians</h5>
                        <p class="job-description">Membuat sistem Internet of Things yang terintegrasi dengan perangkat keras dan mengembangkan aplikasi pintar.</p>
                    </div>
                    <div class="job-card">
                        <div class="job-icon">
                            <i class="bi bi-diagram-3"></i>
                        </div>
                        <h5 class="job-title">Junior Network Engineer</h5>
                        <p class="job-description">Merancang dan mengelola sistem jaringan di perusahaan serta memastikan konektivitas yang stabil.</p>
                    </div>
                    <div class="job-card">
                        <div class="job-icon">
                            <i class="bi bi-tools"></i>
                        </div>
                        <h5 class="job-title">IOT Programmer</h5>
                        <p class="job-description">Membuat sistem Internet of Things yang terintegrasi dengan perangkat keras dan mengembangkan aplikasi pintar.</p>
                    </div>
                </div>
            </div>

            <!-- Partnership Section -->
            <div class="section fade-in">
                <h4 class="section-title">
                    <i class="bi bi-building"></i>
                    Kerjasama Industri
                </h4>
                <div class="partnership-card">
                    <div class="partnership-list">
                        <a href="https://www.pins.co.id" target="_blank" class="partnership-item">PT. PINS Indonesia</a>
                        <a href="https://www.instagram.com/mahkotatechonology/" target="_blank" class="partnership-item">Putra Mahkota Technology</a>
                    </div>
                </div>
            </div>

            <!-- Quote Section -->
            <div class="section fade-in">
                <div class="quote-card">
                    <p class="quote-text">
                        Masa depanmu dimulai dari jaringan yang kamu bangun hari ini.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Enhanced fade in animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -80px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });

        // Banner scroll normal - tanpa efek parallax yang berat
    </script>

@endsection
