<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Siswa - SMKN 2 Karanganyar</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#34a853",
                        primaryDark: "#2d9249",
                        secondary: "#1e3a8a",
                        accent: "#f7fafc",
                        success: "#10b981",
                        warning: "#f59e0b",
                        sick: "#60a5fa",
                        danger: "#ef4444",
                        info: "#3b82f6",
                        dark: "#1f2937",
                        light: "#f9fafb",
                    },
                    fontFamily: {
                        sans: ["Inter", "sans-serif"],
                        display: ["Poppins", "sans-serif"],
                    },
                    boxShadow: {
                        custom: "0 4px 12px rgba(0, 0, 0, 0.1)",
                        tooltip: "0 2px 8px rgba(0, 0, 0, 0.15)",
                        glow: "0 0 20px rgba(52, 168, 83, 0.3)",
                        card: "0 6px 18px rgba(0, 0, 0, 0.08)",
                        button: "0 4px 14px rgba(52, 168, 83, 0.4)",
                    },
                    borderRadius: {
                        lg: "0.75rem",
                        xl: "1rem",
                    },
                    animation: {
                        fadeIn: "fadeIn 0.5s ease-in-out",
                        scaleUp: "scaleUp 0.3s ease-in-out",
                        pulseGlow: "pulseGlow 2s infinite",
                        bounce: "bounce 1s infinite",
                    },
                    keyframes: {
                        fadeIn: {
                            "0%": {
                                opacity: "0",
                                transform: "translateY(10px)"
                            },
                            "100%": {
                                opacity: "1",
                                transform: "translateY(0)"
                            },
                        },
                        scaleUp: {
                            "0%": {
                                transform: "scale(1)"
                            },
                            "100%": {
                                transform: "scale(1.05)"
                            },
                        },
                        pulseGlow: {
                            "0%, 100%": {
                                boxShadow: "0 0 10px rgba(52, 168, 83, 0.2)"
                            },
                            "50%": {
                                boxShadow: "0 0 20px rgba(52, 168, 83, 0.4)"
                            },
                        },
                        bounce: {
                            "0%, 100%": {
                                transform: "translateY(-5%)",
                                animationTimingFunction: "cubic-bezier(0.8,0,1,1)"
                            },
                            "50%": {
                                transform: "translateY(0)",
                                animationTimingFunction: "cubic-bezier(0,0,0.2,1)"
                            },
                        },
                    },
                },
            },
        };

    </script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@500;600;700&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <style>
         #mobileSidebar.active {
            display: block;
        }

        .animate-pulse {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: .5;
            }
        }

        .progress-ring {
            transform: rotate(-90deg);
        }

        .progress-ring-circle {
            transition: stroke-dashoffset 0.5s;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #34a853 0%, #1e3a8a 100%);
        }

        .notification-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background-color: #ef4444;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.6rem;
            font-weight: bold;
        }

        .sidebar-item {
            position: relative;
            overflow: hidden;
        }

        .sidebar-item::after {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 4px;
            background-color: #34a853;
            transform: scaleY(0);
            transform-origin: top;
            transition: transform 0.3s ease;
        }

        .sidebar-item:hover::after {
            transform: scaleY(1);
        }

        .sidebar-item.active::after {
            transform: scaleY(1);
        }

        .floating-btn {
            box-shadow: 0 6px 20px rgba(52, 168, 83, 0.3);
            transition: all 0.3s ease;
        }

        .floating-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(52, 168, 83, 0.4);
        }

        .subject-card {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.9) 0%, rgba(249, 250, 251, 0.9) 100%);
            backdrop-filter: blur(5px);
        }

        .wave-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M54.627 0c.745.657 1.03 1.531.627 2.373-.402.842-1.415 1.211-2.373.627-.958-.584-1.552-1.864-.874-2.627.678-.763 2.053-.763 2.62.627zM7.373 60c-.745-.657-1.03-1.531-.627-2.373.402-.842 1.415-1.211 2.373-.627.958.584 1.552 1.864.874 2.627-.678.763-2.053.763-2.62-.627z' fill='%2334a853' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");
        }
    </style>
    @stack('styles')
</head>

<body class="bg-accent font-sans flex flex-col lg:flex-row min-h-screen">
    <x-navbar></x-navbar>
    <x-sidebar></x-sidebar>

    <main class="flex-1 lg:ml-64 container mx-auto px-4 sm:px-6 py-6 pt-20 lg:pr-4">
        <div class="flex flex-col lg:flex-row gap-4">
            {{ $slot }}
        </div>
    </main>

    @stack("extra")

    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script>
        document.getElementById('mobileMenuToggle').addEventListener('click', function () {
            document.getElementById('mobileSidebar').classList.add('active');
        });

        document.getElementById('closeMobileSidebar').addEventListener('click', function () {
            document.getElementById('mobileSidebar').classList.remove('active');
        });
    </script>
    @stack('scripts')
</body>
</html>
