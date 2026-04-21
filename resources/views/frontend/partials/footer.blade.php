<footer class="bg-gray-900 text-white py-8">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-center text-center md:text-left">
            <!-- Copyright -->
            <div class="mb-4 md:mb-0">
                <p class="text-gray-400 text-sm">
                    &copy; {{ date('Y') }} {{ $settings['company_name'] ?? 'PT. MALAKA MITRA GLOBAL' }}. 
                    All rights reserved.
                </p>
            </div>
            
            <!-- Social Media / Kontak Cepat -->
            <div class="flex space-x-6">
                <a href="tel:{{ $settings['phone'] ?? '+6282199440822' }}" 
                   class="text-gray-400 hover:text-[#02d5b2] transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                </a>
                <a href="mailto:{{ $settings['email'] ?? 'info@malakamitraglobal.com' }}" 
                   class="text-gray-400 hover:text-[#02d5b2] transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-[#02d5b2] transition">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-[#02d5b2] transition">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 0021.45-4.568c.29-.648.513-1.32.667-2.007z"/>
                    </svg>
                </a>
            </div>
        </div>
        
        <!-- Divider -->
        <div class="border-t border-gray-800 my-4"></div>
        
        <!-- Bottom Text -->
        <div class="text-center text-gray-500 text-xs">
            <p>{{ $settings['address'] ?? 'Jl. Perumnas Sudiang Raya, No. 150, Makassar' }}</p>
        </div>
    </div>
</footer>