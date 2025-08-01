<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Tutorial Videos</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

section-header {
        margin-bottom: 2rem;
    }

    .section-title {
        font-size: 2.5rem;
        color: #ddfd0d; /* Bootstrap primary */
    }

    .section-subtitle {
        color: #6c757d; /* Bootstrap muted */
        max-width: 600px;
        margin: 0 auto;
    }

        .video-section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .section-header {
            text-align: center;
            margin-bottom: 3rem;
            color: white;
        }

        .section-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .section-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            font-weight: 300;
        }

        .video-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .video-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            animation: fadeInUp 0.6s ease forwards;
        }

        .video-card:nth-child(2) {
            animation-delay: 0.2s;
        }

        .video-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .video-thumbnail {
            position: relative;
            width: 100%;
            aspect-ratio: 16/9;
            overflow: hidden;
            cursor: pointer;
        }

        .video-thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .video-card:hover .video-thumbnail img {
            transform: scale(1.1);
        }

        .play-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .video-card:hover .play-overlay {
            opacity: 1;
        }

        .play-button {
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.95);
            border: none;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .play-button:hover {
            background: white;
            transform: scale(1.1);
        }

        .play-button i {
            font-size: 24px;
            color: #e74c3c;
            margin-left: 4px;
        }

        .video-info {
            padding: 1.5rem;
        }

        .video-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 0.5rem;
            line-height: 1.4;
        }

        .video-link {
            color: inherit;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .video-link:hover {
            color: #e74c3c;
        }

        .video-description {
            color: #7f8c8d;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .video-meta {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 1rem;
            padding-top: 1rem;
            border-top: 1px solid #ecf0f1;
        }

        .video-duration {
            background: #e74c3c;
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .video-level {
            background: #3498db;
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .laravel-logo {
            position: absolute;
            top: 15px;
            left: 15px;
            width: 40px;
            height: 40px;
            background: #ff2d20;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10;
        }

        .laravel-logo svg {
            width: 24px;
            height: 24px;
            fill: white;
        }

        .youtube-button {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: #e74c3c;
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 25px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            margin-top: 2rem;
        }

        .youtube-button:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(231, 76, 60, 0.4);
        }

        .youtube-button i {
            font-size: 1.2rem;
        }

        .center-button {
            text-align: center;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .video-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .section-title {
                font-size: 2.5rem;
            }

            .video-card {
                border-radius: 15px;
            }

            .play-button {
                width: 60px;
                height: 60px;
            }

            .play-button i {
                font-size: 20px;
            }
        }
    </style>
</head>

<body>
    <script>
        document.querySelectorAll('iframe[data-video-id]').forEach(async iframe => {
            const API_KEY = 'AIzaSyDqrsIB3e0nB11HdIzIYrw4_VGhNT2T_kI'; // Ganti sama API KEY YouTube-mu
            const videoId = iframe.getAttribute('data-video-id');
            const apiUrl = `https://www.youtube.com/oembed?url=https://www.youtube.com/watch?v=${videoId}&format=json`;

            try {
                const response = await fetch(apiUrl);
                const data = await response.json();
                const title = data.title;

                const card = iframe.closest('.card-body');
                card.querySelector('.video-title').textContent = title;

            } catch (error) {
                console.error('Gagal ambil judul video:', error);
            }
        });
    </script>
</body>

</html>