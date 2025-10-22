<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading - Galeri Pahlawan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
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
            /* Ini adalah trik kuncinya! */
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

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Cinzel', serif;
        }

        .hero-bg {
            background: linear-gradient(rgba(10, 10, 10, 0.85), rgba(5, 5, 5, 0.9)), url('images/bg-main.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 3rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60%;
            height: 3px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
        }

        .card-hover {
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            background: linear-gradient(145deg, #1a1a1a, #0f0f0f);
            border: 1px solid #2a2a2a;
        }

        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(139, 0, 0, 0.2);
            border-color: var(--primary);
        }

        .timeline-item {
            position: relative;
            padding-left: 2.5rem;
            margin-bottom: 3rem;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 5px;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: var(--primary);
            box-shadow: 0 0 0 4px rgba(139, 0, 0, 0.2);
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            left: 7px;
            top: 21px;
            width: 2px;
            height: calc(100% + 1rem);
            background: linear-gradient(to bottom, var(--primary), transparent);
        }

        .timeline-item:last-child::after {
            display: none;
        }

        .fade-in {
            opacity: 0;
            transform: translateY(30px);
        }

        .bg-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%238B0000' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0% {
                transform: translate(0, 0px);
            }

            50% {
                transform: translate(0, -15px);
            }

            100% {
                transform: translate(0, 0px);
            }
        }

        .pulse-glow {
            animation: pulse-glow 2s infinite;
        }

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

        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .text-gold {
            color: var(--secondary);
        }

        .text-gradient {
            background: linear-gradient(90deg, var(--secondary), #FFD700);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .nav-link {
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--secondary);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .hero-title {
            text-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: bold;
            background: linear-gradient(90deg, var(--secondary), #FFD700);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .flame {
            display: inline-block;
            animation: flame 1.5s ease-in-out infinite alternate;
        }

        @keyframes flame {
            from {
                transform: scale(1);
            }

            to {
                transform: scale(1.1);
            }
        }

        .img-frame {
            border: 2px solid var(--secondary);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            position: relative;
            overflow: hidden;
        }

        .img-frame::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border: 1px solid rgba(212, 175, 55, 0.3);
            pointer-events: none;
        }

        .quote-mark {
            font-size: 5rem;
            color: var(--primary);
            opacity: 0.3;
            position: absolute;
            top: -20px;
            left: 10px;
            font-family: serif;
        }

        .scroll-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            width: 30px;
            height: 50px;
            border: 2px solid var(--secondary);
            border-radius: 15px;
            display: flex;
            justify-content: center;
        }

        .scroll-indicator::before {
            content: '';
            position: absolute;
            top: 10px;
            width: 4px;
            height: 10px;
            background: var(--secondary);
            border-radius: 2px;
            animation: scroll 2s infinite;
        }

        @keyframes scroll {
            0% {
                transform: translateY(0);
                opacity: 1;
            }

            100% {
                transform: translateY(15px);
                opacity: 0;
            }
        }

        .bg-dark-gradient {
            background: linear-gradient(135deg, #0A0A0A 0%, #1A1A1A 100%);
        }

        .loading-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #0c0c0c 0%, #1a1a2e 50%, #16213e 100%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            color: #f8f9fa;
            padding: 2rem;
        }

        .title {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 3rem;
            text-align: center;
            background: linear-gradient(to right, #e2e8f0, #cbd5e0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .slider-container {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 900px;
            width: 100%;
        }

        .pahlawan-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        .image-container {
            position: relative;
            margin-bottom: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .pahlawan-image {
            width: 220px;
            height: 220px;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
            border: 4px solid rgba(255, 255, 255, 0.1);
            transition: all 0.5s ease;
        }

        .pahlawan-image:hover {
            border-color: rgba(255, 215, 0, 0.3);
            box-shadow: 0 15px 35px rgba(255, 215, 0, 0.2);
        }

        .pahlawan-name {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            font-weight: 600;
            margin-top: 1rem;
            color: #e2e8f0;
            text-align: center;
        }

        .quote-container {
            max-width: 700px;
            text-align: center;
            margin: 2rem 0;
            padding: 1.5rem;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 16px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
        }

        .quote-text {
            font-size: 1.3rem;
            font-style: italic;
            color: #e2e8f0;
            line-height: 1.7;
            font-weight: 300;
            min-height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .nav-btn {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            margin: 0 1.5rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            z-index: 10;
        }

        .nav-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        .continue-text {
            color: rgba(255, 255, 255, 0.7);
            margin-top: 2rem;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            position: relative;
            overflow: hidden;
        }

        .continue-text:hover {
            color: rgba(255, 255, 255, 0.9);
            background: rgba(255, 255, 255, 0.05);
            transform: translateY(-2px);
        }

        .continue-text::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #e53e3e, #ed8936);
            transition: width 0.3s ease;
        }

        .continue-text:hover::after {
            width: 100%;
        }

        .pahlawan-counter {
            position: absolute;
            bottom: -30px;
            display: flex;
            gap: 0.5rem;
        }

        .counter-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }

        .counter-dot.active {
            background: #e53e3e;
            transform: scale(1.2);
        }

        .hidden {
            display: none;
        }

        .audio-indicator {
            position: absolute;
            top: 10px;
            right: 10px;
            display: flex;
            align-items: center;
            background: rgba(0, 0, 0, 0.5);
            padding: 5px 10px;
            border-radius: 20px;
            color: white;
            font-size: 0.8rem;
            backdrop-filter: blur(10px);
        }

        .audio-indicator .dot {
            width: 8px;
            height: 8px;
            background-color: #e53e3e;
            border-radius: 50%;
            margin-right: 5px;
            animation: pulse 1.5s infinite;
        }

        @keyframes pulse {
            0% {
                opacity: 0.5;
            }

            50% {
                opacity: 1;
            }

            100% {
                opacity: 0.5;
            }
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
        }

        @media (max-width: 768px) {
            .title {
                font-size: 2rem;
                margin-bottom: 2rem;
            }

            .pahlawan-image {
                width: 180px;
                height: 180px;
            }

            .quote-container {
                max-width: 90%;
                padding: 1rem;
            }

            .quote-text {
                font-size: 1.1rem;
            }

            .nav-btn {
                width: 45px;
                height: 45px;
                margin: 0 1rem;
            }

            select {
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
                background-position: right 0.5rem center;
                background-repeat: no-repeat;
                background-size: 1.5em 1.5em;
                padding-right: 2.5rem;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }

            /* Remove default arrow in IE */
            select::-ms-expand {
                display: none;
            }

            /* Smooth transitions untuk semua elemen */
            .category-filter {
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            }

            /* Hover effects */
            .category-filter:not(.active):hover {
                transform: translateY(-2px);
                box-shadow: 0 10px 25px -5px rgba(239, 68, 68, 0.1);
            }
        }

        .bg-dark-gradient {
            background: linear-gradient(135deg, #1a202c 0%, #2d3748 100%);
        }
        
        .bg-darker {
            background-color: #1a202c;
        }
        
        .text-gold {
            color: #d4af37;
        }
        
        .card-hover {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.5), 0 10px 10px -5px rgba(0, 0, 0, 0.4);
        }
        
        /* Animasi untuk artikel */
        .artikel-item {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }
        
        .artikel-item.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .artikel-item.hidden {
            display: none;
        }
        
        /* Animasi untuk fade-in */
        .fade-in {
            animation: fadeIn 0.6s ease forwards;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Animasi untuk filter tags */
        .filter-tag {
            animation: slideIn 0.3s ease forwards;
        }
        
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-10px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>
</head>

<body>
    {{ $slot }}
</body>
</html>