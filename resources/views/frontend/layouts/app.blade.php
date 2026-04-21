<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $settings['site_title'] ?? 'Company Profile' }} - @yield('title')</title>
    
    <link rel="icon" href="{{ asset('favicon.png') }}?v=2" type="image/png">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Animasi smooth untuk mobile menu */
        .mobile-menu {
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out, opacity 0.3s ease-out;
        }
        
        .mobile-menu:not(.hidden) {
            max-height: 500px;
            opacity: 1;
            transition: max-height 0.3s ease-in, opacity 0.3s ease-in;
        }
        
        /* Active link styling */
        .mobile-menu a.active {
            background-color: #f0fdf4;
            color: #02d5b2;
        }
        
        /* Hover effect untuk menu items */
        .mobile-menu a:hover {
            transform: translateX(5px);
            transition: transform 0.2s ease;
        }
        
        /* Responsive adjustments */
        @media (max-width: 640px) {
            .logo .logo-img {
                height: 40px !important;
            }
            .mobile-menu a {
                font-size: 0.95rem;
            }
        }

        /* Animations */
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
        
        @keyframes slowZoom {
            from {
                transform: scale(1);
            }
            to {
                transform: scale(1.1);
            }
        }
        
        @keyframes scrollDown {
            0% {
                opacity: 1;
                transform: translateY(0);
            }
            100% {
                opacity: 0;
                transform: translateY(8px);
            }
        }
        
        @keyframes bounce {
            0%, 100% {
                transform: translateX(-50%) translateY(0);
            }
            50% {
                transform: translateX(-50%) translateY(-8px);
            }
        }
        
        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
            opacity: 0;
        }
        
        .animate-slow-zoom {
            animation: slowZoom 20s ease-out infinite alternate;
        }
        
        .animate-scroll-down {
            animation: scrollDown 1.5s ease-in-out infinite;
        }
        
        .animate-bounce {
            animation: bounce 2s infinite;
        }
        
        /* Animation Delays */
        .animation-delay-200 {
            animation-delay: 0.2s;
        }
        
        .animation-delay-400 {
            animation-delay: 0.4s;
        }
        
        .animation-delay-600 {
            animation-delay: 0.6s;
        }
        
        .animation-delay-1000 {
            animation-delay: 1s;
        }
        
        /* Smooth scroll behavior */
        html {
            scroll-behavior: smooth;
        }

        .primary-green {
            background-color: #02d5b2;
        }
        .primary-green-text {
            color: #02d5b2;
        }
        .primary-green-border {
            border-color: #02d5b2;
        }
        .hover\:primary-green-dark:hover {
            background-color: #07a58b;
        }

        .logo .logo-img {
            height: 60px;
        }

        .nav-link {
            @apply text-gray-700 transition font-medium;
        }
        
        .nav-link:hover {
            color: #18947f;
        }
        
        .nav-link.active {
            color: #02d5b2;
            border-bottom: 2px solid #02d5b2;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    @include('frontend.partials.navbar')

    <!-- Content -->
    <main class="mt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('frontend.partials.footer')

    <!-- JavaScript untuk Mobile Menu -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            
            if (mobileMenuButton && mobileMenu) {
                // Toggle menu saat tombol diklik
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                    
                    // Animasi hamburger menu (opsional)
                    const svg = this.querySelector('svg');
                    if (!mobileMenu.classList.contains('hidden')) {
                        // Ubah icon menjadi X saat menu terbuka
                        svg.innerHTML = `
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        `;
                    } else {
                        // Kembalikan ke icon hamburger
                        svg.innerHTML = `
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        `;
                    }
                });
                
                // Tutup menu saat klik di luar (opsional)
                document.addEventListener('click', function(event) {
                    const isClickInside = mobileMenuButton.contains(event.target) || mobileMenu.contains(event.target);
                    if (!isClickInside && !mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                        // Reset icon hamburger
                        const svg = mobileMenuButton.querySelector('svg');
                        svg.innerHTML = `
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        `;
                    }
                });
                
                // Tutup menu saat window di-resize ke desktop
                window.addEventListener('resize', function() {
                    if (window.innerWidth >= 768) { // md breakpoint
                        mobileMenu.classList.add('hidden');
                        // Reset icon
                        const svg = mobileMenuButton.querySelector('svg');
                        svg.innerHTML = `
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        `;
                    }
                });

                window.addEventListener('scroll', function() {
                    const scrolled = window.pageYOffset;
                    const hero = document.querySelector('section');
                    if (hero) {
                        hero.style.backgroundPositionY = scrolled * 0.5 + 'px';
                    }
                });
            }
        });
    </script>
</body>
</html>