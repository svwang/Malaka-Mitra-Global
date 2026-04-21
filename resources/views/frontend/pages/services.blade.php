@extends('frontend.layouts.app')

@section('title', 'Services')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-green-50 to-white py-16">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Layanan <span class="text-[#02d5b2]">Kami</span></h1>
        <div class="w-20 h-1 bg-[#02d5b2] mx-auto mb-4"></div>
        <p class="text-gray-600 max-w-2xl mx-auto text-lg">
        Solusi lengkap tenaga kerja profesional untuk kebutuhan bisnis Anda
        </p>
    </div>
</section>

<!-- Services Grid -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4">
        <!-- Grid 3 kolom untuk desktop -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <!-- Service 1: Cleaning Service -->
            <div class="group bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Cleaning Service" 
                         class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    <div class="absolute bottom-3 left-3">
                        <div class="bg-[#02d5b2] w-10 h-10 rounded-full flex items-center justify-center shadow-lg">
                            <span class="text-white text-xl">🧹</span>
                        </div>
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Cleaning Service</h3>
                    <p class="text-gray-500 text-sm mb-3">Layanan kebersihan profesional untuk berbagai fasilitas</p>
                    <div class="flex flex-wrap gap-1 mb-3">
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">General Cleaning</span>
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">Deep Cleaning</span>
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">Window Cleaning</span>
                    </div>
                    <a href="{{ url('/services/cleaning-service') }}" 
                       class="inline-flex items-center text-[#02d5b2] text-sm font-semibold hover:text-[#019b7f] transition">
                        Detail Layanan →
                    </a>
                </div>
            </div>

            <!-- Service 2: Security -->
            <div class="group bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1557597774-9d273605dfa9?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Security Services" 
                         class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    <div class="absolute bottom-3 left-3">
                        <div class="bg-[#02d5b2] w-10 h-10 rounded-full flex items-center justify-center shadow-lg">
                            <span class="text-white text-xl">🛡️</span>
                        </div>
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Security</h3>
                    <p class="text-gray-500 text-sm mb-3">Tenaga keamanan terlatih bersertifikasi profesional</p>
                    <div class="flex flex-wrap gap-1 mb-3">
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">Satpam 24 Jam</span>
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">CCTV Monitoring</span>
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">Patroli Rutin</span>
                    </div>
                    <a href="{{ url('/services/security') }}" 
                       class="inline-flex items-center text-[#02d5b2] text-sm font-semibold hover:text-[#019b7f] transition">
                        Detail Layanan →
                    </a>
                </div>
            </div>

            <!-- Service 3: Jasa Administrasi Kantor -->
            <div class="group bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Jasa Administrasi" 
                         class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    <div class="absolute bottom-3 left-3">
                        <div class="bg-[#02d5b2] w-10 h-10 rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Jasa Administrasi Kantor</h3>
                    <p class="text-gray-500 text-sm mb-3">Penyedia gabungan jasa administrasi untuk kebutuhan kantor</p>
                    <div class="flex flex-wrap gap-1 mb-3">
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">Administrasi Umum</span>
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">Dokumentasi</span>
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">Data Entry</span>
                    </div>
                    <a href="#" class="inline-flex items-center text-[#02d5b2] text-sm font-semibold hover:text-[#019b7f] transition">
                        Detail Layanan →
                    </a>
                </div>
            </div>

            <!-- Service 4: Jasa Penunjang Fasilitas -->
            <div class="group bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Penunjang Fasilitas" 
                         class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    <div class="absolute bottom-3 left-3">
                        <div class="bg-[#02d5b2] w-10 h-10 rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Jasa Penunjang Fasilitas</h3>
                    <p class="text-gray-500 text-sm mb-3">Penyedia gabungan jasa penunjang untuk fasilitas perusahaan</p>
                    <div class="flex flex-wrap gap-1 mb-3">
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">Maintenance</span>
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">Perbaikan</span>
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">Logistik</span>
                    </div>
                    <a href="#" class="inline-flex items-center text-[#02d5b2] text-sm font-semibold hover:text-[#019b7f] transition">
                        Detail Layanan →
                    </a>
                </div>
            </div>

            <!-- Service 5: Manajemen SDM -->
            <div class="group bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Manajemen SDM" 
                         class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    <div class="absolute bottom-3 left-3">
                        <div class="bg-[#02d5b2] w-10 h-10 rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Manajemen & Fungsi SDM</h3>
                    <p class="text-gray-500 text-sm mb-3">Penyedia SDM dan manajemen fungsi sumber daya manusia</p>
                    <div class="flex flex-wrap gap-1 mb-3">
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">Rekrutmen</span>
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">Pelatihan</span>
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">Pengembangan</span>
                    </div>
                    <a href="#" class="inline-flex items-center text-[#02d5b2] text-sm font-semibold hover:text-[#019b7f] transition">
                        Detail Layanan →
                    </a>
                </div>
            </div>

            <!-- Service 6: Kebersihan Bangunan -->
            <div class="group bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Kebersihan Bangunan" 
                         class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    <div class="absolute bottom-3 left-3">
                        <div class="bg-[#02d5b2] w-10 h-10 rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Kebersihan Bangunan</h3>
                    <p class="text-gray-500 text-sm mb-3">Aktivitas kebersihan bangunan dan industri lainnya</p>
                    <div class="flex flex-wrap gap-1 mb-3">
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">Gedung</span>
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">Industri</span>
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">Pabrik</span>
                    </div>
                    <a href="#" class="inline-flex items-center text-[#02d5b2] text-sm font-semibold hover:text-[#019b7f] transition">
                        Detail Layanan →
                    </a>
                </div>
            </div>

            <!-- Service 7: Penempatan Tenaga Kerja -->
            <div class="group bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Penempatan Tenaga Kerja" 
                         class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    <div class="absolute bottom-3 left-3">
                        <div class="bg-[#02d5b2] w-10 h-10 rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Penempatan Tenaga Kerja</h3>
                    <p class="text-gray-500 text-sm mb-3">Aktivitas penyeleksian dan penempatan tenaga kerja dalam negeri</p>
                    <div class="flex flex-wrap gap-1 mb-3">
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">Seleksi</span>
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">Penempatan</span>
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">Monitoring</span>
                    </div>
                    <a href="#" class="inline-flex items-center text-[#02d5b2] text-sm font-semibold hover:text-[#019b7f] transition">
                        Detail Layanan →
                    </a>
                </div>
            </div>

            <!-- Service 8: Kebersihan Industri -->
            <div class="group bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Kebersihan Industri" 
                         class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    <div class="absolute bottom-3 left-3">
                        <div class="bg-[#02d5b2] w-10 h-10 rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Kebersihan Industri</h3>
                    <p class="text-gray-500 text-sm mb-3">Aktivitas kebersihan bangunan dan industri lainnya</p>
                    <div class="flex flex-wrap gap-1 mb-3">
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">Pabrik</span>
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">Gudang</span>
                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">Area Produksi</span>
                    </div>
                    <a href="#" class="inline-flex items-center text-[#02d5b2] text-sm font-semibold hover:text-[#019b7f] transition">
                        Detail Layanan →
                    </a>
                </div>
            </div>
        </div>

        <!-- Additional Info / CTA -->
        <div class="mt-12 text-center">
            <p class="text-gray-500 mb-4">Butuh layanan lainnya atau konsultasi?</p>
            <a href="{{ url('/contact') }}" class="inline-flex items-center bg-[#02d5b2] text-white px-6 py-3 rounded-lg hover:bg-[#019b7f] transition shadow-md hover:shadow-lg">
                Konsultasi dengan Kami
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
</section>
@endsection