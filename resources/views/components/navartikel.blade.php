@props(['title' => 'Judul Default'])

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap');

        :root {
            --primary: #021a7b;
            --secondary: #37d4ba;
            --accent: #2F4F4F;
            --dark: #0A0A0A;
            --darker: #050505;
            --light: #E5E5E5;
        }

        html {
            scroll-behavior: smooth;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            overflow-x: hidden;
            font-family: 'Inter', sans-serif;
            background-color: var(--dark);
            color: var(--light);
            scroll-behavior: smooth;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Cinzel', serif;
        }

        /* Navbar Styles */
        nav#navbar {
            position: fixed;
            width: 100%;
            background-color: rgba(10, 10, 10, 0.9);
            backdrop-filter: blur(10px);
            z-index: 50;
            transition: all 0.5s;
            border-bottom: 1px solid #2a2a2a;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.75rem 0;
        }

        .nav-brand {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .logo {
            width: 3rem;
            height: 3rem;
            background: linear-gradient(135deg, #8B0000, #A52A2A);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: pulse-glow 2s infinite;
        }

        .logo i {
            color: #FFD700;
            font-size: 1.125rem;
        }

        .brand-text {
            display: flex;
            flex-direction: column;
        }

        .brand-title {
            font-size: 1.25rem;
            font-weight: bold;
            color: white;
        }

        .brand-subtitle {
            font-size: 0.75rem;
            color: #9CA3AF;
        }

        .back-button {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            background: rgba(55, 212, 186, 0.1);
            color: #37d4ba;
            border: 1px solid rgba(55, 212, 186, 0.3);
            border-radius: 0.375rem;
            font-weight: 500;
            transition: all 0.3s;
            cursor: pointer;
            text-decoration: none;
        }

        .back-button:hover {
            background: rgba(55, 212, 186, 0.2);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(55, 212, 186, 0.2);
        }

        .back-button i {
            transition: transform 0.3s;
        }

        .back-button:hover i {
            transform: translateX(-3px);
        }

        /* Animations */
        @keyframes pulse-glow {
            0% {
                box-shadow: 0 0 5px rgba(212, 175, 55, 0.4);
            }
            50% {
                box-shadow: 0 0 20px rgba(212, 175, 55, 0.8);
            }
            100% {
                box-shadow: 0 0 5px rgba(212, 175, 55, 0.4);
            }
        }

        /* Content Styles */
        .content {
            padding-top: 80px;
            min-height: 100vh;
            background: linear-gradient(rgba(10, 10, 10, 0.85), rgba(5, 5, 5, 0.9));
            display: flex;
            flex-direction: column;
            padding: 80px 2rem 2rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-content {
                padding: 0.5rem 0;
            }
            
            .brand-title {
                font-size: 1.125rem;
            }
            
            .content h1 {
                font-size: 2rem;
            }
        }
    </style>

    @stack("styles")
</head>
<body>
    <nav id="navbar">
        <div class="container">
            <div class="nav-content">
                <div class="nav-brand">
                    <div class="logo">
                        <i class="fas fa-medal"></i>
                    </div>
                    <div class="brand-text">
                        <span class="brand-title">Puputan Margarana</span>
                        <p class="brand-subtitle">Sejarah Perjuangan Bali</p>
                    </div>
                </div>
                
                <a href="javascript:history.back()" class="back-button">
                    <i class="fas fa-arrow-left"></i>
                    <span>Kembali</span>
                </a>
            </div>
        </div>
    </nav>

    <div class="content">
        {{ $slot }}
    </div>

    <script>
        // Script untuk efek scroll pada navbar
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.style.backgroundColor = 'rgba(10, 10, 10, 0.95)';
            } else {
                navbar.style.backgroundColor = 'rgba(10, 10, 10, 0.9)';
            }
        });
    </script>
    @stack("scripts")
</body>
</html>