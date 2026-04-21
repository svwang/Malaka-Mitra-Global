<nav class="bg-white shadow-lg fixed w-full z-50 top-0">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <div class="flex items-center logo">
                <a href="{{ url('/') }}" class="flex items-center gap-2">
                    @php
                        $logoPath = storage_path('app/public/images/logo.png');
                        $logoUrl = asset('storage/images/logo.png');

                        if (!file_exists($logoPath)) {
                            $logoPath = storage_path('app/public/images/logo.jpg');
                            $logoUrl = asset('storage/images/logo.jpg');
                        }
                        if (!file_exists($logoPath)) {
                            $logoPath = storage_path('app/public/images/logo.webp');
                            $logoUrl = asset('storage/images/logo.webp');
                        }
                        if (!file_exists($logoPath)) {
                            $logoPath = storage_path('app/public/images/logo.jpeg');
                            $logoUrl = asset('storage/images/logo.jpeg');
                        }
                    @endphp
                    
                    @if(file_exists($logoPath))
                        <img src="{{ $logoUrl }}" 
                            alt="{{ $settings['company_name'] ?? 'PT. MALAKA MITRA GLOBAL' }}" 
                            class="logo-img transition-all duration-300">

                        <!-- Tambahan tulisan -->
                        <span class="text-lg md:text-lg font-semibold primary-green-text">
                            Outsourcing
                        </span>
                    @else
                        <div class="flex flex-col">
                            <h1 class="text-xl sm:text-2xl font-bold primary-green-text">
                                {{ $settings['company_name'] ?? 'PT. MALAKA MITRA GLOBAL' }}
                            </h1>
                            <span class="text-sm text-gray-600">
                                Outsourcing
                            </span>
                        </div>
                    @endif
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8">
                <a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                    Home
                </a>
                <a href="{{ url('/about') }}" class="nav-link {{ request()->is('about') ? 'active' : '' }}">
                    About Us
                </a>
                <a href="{{ url('/services') }}" class="nav-link {{ request()->is('services') ? 'active' : '' }}">
                    Services
                </a>
                <a href="{{ url('/contact') }}" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">
                    Contact
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button" class="mobile-menu-button text-gray-700 hover:text-green-600 focus:outline-none focus:ring-2 focus:ring-green-600 rounded-lg p-2 transition">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu" class="mobile-menu hidden md:hidden pb-4 transition-all duration-300 ease-in-out">
            <div class="flex flex-col space-y-3">
                <a href="{{ url('/') }}" class="text-gray-700 hover:text-green-600 hover:bg-green-50 px-3 py-2 rounded-lg transition font-medium {{ request()->is('/') ? 'text-green-600 bg-green-50' : '' }}">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        Home
                    </div>
                </a>
                
                <a href="{{ url('/about') }}" class="text-gray-700 hover:text-green-600 hover:bg-green-50 px-3 py-2 rounded-lg transition font-medium {{ request()->is('about') ? 'text-green-600 bg-green-50' : '' }}">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        About Us
                    </div>
                </a>
                
                <a href="{{ url('/services') }}" class="text-gray-700 hover:text-green-600 hover:bg-green-50 px-3 py-2 rounded-lg transition font-medium {{ request()->is('services') ? 'text-green-600 bg-green-50' : '' }}">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Services
                    </div>
                </a>
                
                <a href="{{ url('/contact') }}" class="text-gray-700 hover:text-green-600 hover:bg-green-50 px-3 py-2 rounded-lg transition font-medium {{ request()->is('contact') ? 'text-green-600 bg-green-50' : '' }}">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Contact
                    </div>
                </a>

                <!-- Contact Info in Mobile Menu -->
                <div class="border-t border-gray-200 pt-4 mt-2">
                    <div class="px-3 py-2">
                        <p class="text-sm text-gray-500 mb-2">Hubungi Kami:</p>
                        <div class="flex items-center space-x-4">
                            <a href="tel:{{ $settings['phone'] ?? '' }}" class="text-gray-600 hover:text-green-600 transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </a>
                            <a href="mailto:{{ $settings['email'] ?? '' }}" class="text-gray-600 hover:text-green-600 transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>