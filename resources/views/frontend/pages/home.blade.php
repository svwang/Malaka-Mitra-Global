@extends('frontend.layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section Full Screen dengan Parallax Effect -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Background Image dengan Overlay Gelap -->
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                alt="Background" 
                class="w-full h-full object-cover transform scale-105 animate-slow-zoom">
            <!-- Overlay lebih gelap -->
            <div class="absolute inset-0 bg-black/70"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
        </div>
        
        <!-- Content - Posisi Tengah Vertikal -->
        <div class="relative z-10 max-w-7xl mx-auto px-4">
            <div class="text-center">
                <!-- Title Utama -->
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-4 animate-fade-in-up">
                    Solusi Tenaga Kerja
                </h1>
                
                <!-- Title Secondary dengan Warna -->
                <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-[#02d5b2] mb-8 animate-fade-in-up animation-delay-200">
                    Profesional & Terpercaya
                </h2>
                
                <!-- Garis Dekoratif -->
                <div class="flex justify-center items-center gap-3 mb-8 animate-fade-in-up animation-delay-400">
                    <div class="w-12 h-0.5 bg-white/30"></div>
                    <div class="w-3 h-3 bg-[#02d5b2] rounded-full"></div>
                    <div class="w-12 h-0.5 bg-white/30"></div>
                </div>
                
                <!-- Subtitle -->
                <p class="text-white/60 text-base sm:text-lg max-w-md mx-auto animate-fade-in-up animation-delay-400">
                    Penyedia jasa outsourcing terpercaya
                </p>
            </div>
        </div>
        
        <!-- Scroll to Explore Indicator - Posisi Fixed di Bawah -->
        <div class="absolute bottom-24 left-0 right-0 z-10 animate-bounce">
            <div class="flex flex-col items-center justify-center cursor-pointer group" onclick="window.scrollTo({top: window.innerHeight, behavior: 'smooth'})">
                <span class="text-white/70 text-xs sm:text-sm mb-2 group-hover:text-white transition tracking-wider">Scroll to explore</span>
                <!-- Icon Panah Bawah -->
                <svg class="w-5 h-5 text-white/60 group-hover:text-white transition group-hover:translate-y-1 duration-300" 
                    fill="none" 
                    stroke="currentColor" 
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </div>
        </div>
        
        <!-- Floating Elements Decoration -->
        <div class="absolute top-20 left-10 w-20 h-20 bg-[#02d5b2]/5 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-32 h-32 bg-[#02d5b2]/5 rounded-full blur-3xl animate-pulse animation-delay-1000"></div>
    </section>

    <!-- Statistik Perusahaan -->
    <section class="bg-gradient-to-b from-[#02d5b2] to-[#019b7f] py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Description -->
            <div class="text-center mb-10">
                <p class="text-base sm:text-lg md:text-xl text-white/90 max-w-3xl mx-auto leading-relaxed">
                    Penyedia jasa outsourcing terpercaya untuk kebutuhan Cleaning Service dan Security 
                    dengan tenaga kerja berkualitas dan terlatih.
                </p>
            </div>
            
            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-5 justify-center items-center mb-16">
                <a href="{{ url('/contact') }}" 
                class="group relative inline-flex items-center justify-center px-8 py-3 overflow-hidden font-semibold text-[#02d5b2] bg-white rounded-lg shadow-lg hover:shadow-xl transition-all duration-300">
                    <span class="relative z-10 flex items-center">
                        Konsultasi Gratis
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </span>
                </a>
                
                <a href="{{ url('/services') }}" 
                class="group inline-flex items-center justify-center px-8 py-3 font-semibold text-white border-2 border-white/40 rounded-lg hover:bg-white/10 hover:border-white/60 transition-all duration-300">
                    <svg class="w-5 h-5 mr-2 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.66 0 3-4 3-9s-1.34-9-3-9m0 18c-1.66 0-3-4-3-9s1.34-9 3-9"></path>
                    </svg>
                    Lihat Layanan
                </a>
            </div>
            
            <!-- Stats -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 md:gap-8">
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-1">10+</div>
                    <div class="text-xs sm:text-sm text-white/70">Tahun Pengalaman</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-1">150+</div>
                    <div class="text-xs sm:text-sm text-white/70">Klien Aktif</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-1">500+</div>
                    <div class="text-xs sm:text-sm text-white/70">Tenaga Kerja</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-1">98%</div>
                    <div class="text-xs sm:text-sm text-white/70">Kepuasan Klien</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Layanan Kami -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <span class="text-green-600 font-semibold uppercase tracking-wide">Layanan Kami</span>
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Solusi Lengkap untuk Bisnis Anda</h2>
                <div class="w-20 h-1 primary-green mx-auto"></div>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Tenaga kerja profesional dan terlatih yang siap mendukung operasional bisnis Anda</p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Cleaning Service -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 group">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Cleaning Service" 
                             class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <div class="primary-green w-12 h-12 rounded-full flex items-center justify-center">
                                <span class="text-white text-2xl">🧹</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">Cleaning Service</h3>
                        <p class="text-gray-600 mb-4">Layanan kebersihan profesional untuk kantor, gedung, rumah sakit, mall, dan fasilitas umum lainnya dengan standar kebersihan tinggi.</p>
                        <div class="grid grid-cols-2 gap-3 mb-4">
                            <div class="flex items-center text-gray-600 text-sm">
                                <span class="primary-green-text mr-2">✓</span> Dusting (MENGELAP)
                            </div>
                            <div class="flex items-center text-gray-600 text-sm">
                                <span class="primary-green-text mr-2">✓</span> Sweeping (MENYAPU)
                            </div>
                            <div class="flex items-center text-gray-600 text-sm">
                                <span class="primary-green-text mr-2">✓</span> Mooping (MENGEPEL)
                            </div>
                        </div>
                        <a href="#" class="text-green-600 font-semibold hover:text-green-700 inline-flex items-center">
                            Selengkapnya 
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Security -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 group">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1557597774-9d273605dfa9?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Security Services" 
                             class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <div class="primary-green w-12 h-12 rounded-full flex items-center justify-center">
                                <span class="text-white text-2xl">🛡️</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">Security</h3>
                        <p class="text-gray-600 mb-4">Tenaga keamanan terlatih dengan sertifikasi profesional untuk melindungi aset, karyawan, dan lingkungan bisnis Anda 24/7.</p>
                        <div class="grid grid-cols-2 gap-3 mb-4">
                            <div class="flex items-center text-gray-600 text-sm">
                                <span class="primary-green-text mr-2">✓</span> Pelindung Aset dan Manusia
                            </div>
                            <div class="flex items-center text-gray-600 text-sm">
                                <span class="primary-green-text mr-2">✓</span> Pengawas Lingkungan
                            </div>
                            <div class="flex items-center text-gray-600 text-sm">
                                <span class="primary-green-text mr-2">✓</span> Pelayan publik
                            </div>
                            <div class="flex items-center text-gray-600 text-sm">
                                <span class="primary-green-text mr-2">✓</span> Mitra manajemen
                            </div>
                        </div>
                        <a href="#" class="text-green-600 font-semibold hover:text-green-700 inline-flex items-center">
                            Selengkapnya 
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang Kami Singkat -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                        alt="Kantor PT. MALAKA MITRA GLOBAL" 
                        class="rounded-lg shadow-xl">
                </div>
                <div>
                    <span class="text-green-600 font-semibold uppercase tracking-wide">Tentang Kami</span>
                    <h2 class="text-3xl font-bold text-gray-800 mb-4 mt-2">PT. MALAKA MITRA GLOBAL</h2>
                    <p class="text-gray-600 mb-4">
                        Didirikan pada tahun <span class="font-semibold text-green-600">2023</span>, PT. MALAKA MITRA GLOBAL adalah perusahaan swasta yang bergerak di bidang ketenagakerjaan dan jasa penunjang usaha lainnya.
                    </p>
                    <p class="text-gray-600 mb-4">
                        Berkantor pusat di <span class="font-semibold">Kota Makassar, Sulawesi Selatan</span>, kami hadir sebagai solusi terpercaya untuk memenuhi kebutuhan tenaga kerja profesional bagi perusahaan Anda.
                    </p>
                    <p class="text-gray-600 mb-6">
                        Kami menyadari bahwa Sumber Daya Manusia sangat berperan penting dalam menjalankan organisasi perusahaan. Oleh karena itu, kami memberikan tenaga kerja yang profesional, terlatih, disiplin, dan bertanggung jawab dalam setiap tugasnya.
                    </p>
                    <div class="space-y-3">
                        <div class="flex items-start">
                            <div class="primary-green rounded-full p-1 mr-3 mt-1">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Tenaga Kerja Profesional & Terlatih</h4>
                                <p class="text-gray-600">Tenaga kerja yang telah mengikuti berbagai macam pelatihan dan memiliki pengalaman</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="primary-green rounded-full p-1 mr-3 mt-1">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Prioritas Kualitas & Kuantitas</h4>
                                <p class="text-gray-600">Terus meningkatkan kualitas dan kuantitas untuk bersaing di era globalisasi</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="primary-green rounded-full p-1 mr-3 mt-1">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Layanan Fleksibel</h4>
                                <p class="text-gray-600">Pelanggan dapat mengganti SDM bila kurang sesuai dengan ekspektasi</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Tombol Selengkapnya -->
                    <div class="mt-8">
                        <a href="{{ url('/about') }}" class="inline-flex items-center primary-green text-white px-6 py-3 rounded-lg hover:primary-green-dark transition">
                            Selengkapnya Tentang Kami
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Keunggulan Kami -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <span class="text-green-600 font-semibold uppercase tracking-wide">Keunggulan</span>
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Mengapa Memilih Kami?</h2>
                <div class="w-20 h-1 primary-green mx-auto"></div>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Kami memberikan layanan terbaik dengan standar kualitas tertinggi</p>
            </div>
            
            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center group">
                    <div class="primary-green w-24 h-24 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition duration-300">
                        <span class="text-white text-3xl">⭐</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Berpengalaman</h3>
                    <p class="text-gray-600">3+ tahun melayani berbagai perusahaan</p>
                </div>
                <div class="text-center group">
                    <div class="primary-green w-24 h-24 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition duration-300">
                        <span class="text-white text-3xl">👥</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Tenaga Terlatih</h3>
                    <p class="text-gray-600">Pelatihan rutin dan sertifikasi kompetensi</p>
                </div>
                <div class="text-center group">
                    <div class="primary-green w-24 h-24 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition duration-300">
                        <span class="text-white text-3xl">🛡️</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Terpercaya</h3>
                    <p class="text-gray-600">12+ klien puas dengan layanan kami</p>
                </div>
                <div class="text-center group">
                    <div class="primary-green w-24 h-24 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition duration-300">
                        <span class="text-white text-3xl">💰</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Harga Kompetitif</h3>
                    <p class="text-gray-600">Solusi cost-effective untuk bisnis Anda</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoni -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <span class="text-green-600 font-semibold uppercase tracking-wide">Testimoni</span>
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Apa Kata Klien Kami?</h2>
                <div class="w-20 h-1 primary-green mx-auto"></div>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 flex">
                            ★★★★★
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">"Pelayanan sangat profesional, tenaga cleaning service yang dikirim sangat teliti dan bertanggung jawab. Sangat direkomendasikan!"</p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Client" class="w-12 h-12 rounded-full mr-3">
                        <div>
                            <h4 class="font-bold text-gray-800">Budi Santoso</h4>
                            <p class="text-gray-500 text-sm">Direktur PT Maju Jaya</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 flex">
                            ★★★★★
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">"Security yang diberikan sangat profesional dan tanggap. Keamanan kantor kami menjadi lebih terjamin 24 jam."</p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/women/2.jpg" alt="Client" class="w-12 h-12 rounded-full mr-3">
                        <div>
                            <h4 class="font-bold text-gray-800">Siti Rahayu</h4>
                            <p class="text-gray-500 text-sm">HRD Mega Mall</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 flex">
                            ★★★★★
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">"Respon cepat dan solusi yang tepat untuk kebutuhan tenaga kerja kami. Sangat puas dengan pelayanannya!"</p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/men/3.jpg" alt="Client" class="w-12 h-12 rounded-full mr-3">
                        <div>
                            <h4 class="font-bold text-gray-800">Andi Wijaya</h4>
                            <p class="text-gray-500 text-sm">Operation Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Klien Kami -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Dipercaya Oleh</h2>
                <div class="w-20 h-1 primary-green mx-auto"></div>
                <p class="text-gray-600 mt-4">Perusahaan-perusahaan terpercaya telah menggunakan layanan kami</p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-5 gap-8 items-center">
                <div class="bg-white p-4 rounded-lg shadow">
                    <img src="https://via.placeholder.com/150x80?text=Logo+1" alt="Client Logo" class="w-full h-auto opacity-70 hover:opacity-100 transition">
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <img src="https://via.placeholder.com/150x80?text=Logo+2" alt="Client Logo" class="w-full h-auto opacity-70 hover:opacity-100 transition">
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <img src="https://via.placeholder.com/150x80?text=Logo+3" alt="Client Logo" class="w-full h-auto opacity-70 hover:opacity-100 transition">
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <img src="https://via.placeholder.com/150x80?text=Logo+4" alt="Client Logo" class="w-full h-auto opacity-70 hover:opacity-100 transition">
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <img src="https://via.placeholder.com/150x80?text=Logo+5" alt="Client Logo" class="w-full h-auto opacity-70 hover:opacity-100 transition">
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="primary-green py-16 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <img src="https://images.unsplash.com/photo-1556741533-6e6a62bd8b49?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Background" class="w-full h-full object-cover">
        </div>
        <div class="max-w-4xl mx-auto text-center px-4 relative z-10">
            <h2 class="text-3xl font-bold text-white mb-4">Siap Bekerja Sama dengan Kami?</h2>
            <p class="text-green-100 mb-8 text-lg">Dapatkan tenaga kerja profesional untuk kebutuhan bisnis Anda sekarang juga!</p>
            <div class="flex justify-center space-x-4">
                <a href="{{ url('/contact') }}" class="bg-white primary-green-text px-8 py-3 rounded-lg hover:bg-gray-100 transition inline-block font-semibold">
                    Hubungi Kami
                </a>
                <a href="#" class="border-2 border-white text-white px-8 py-3 rounded-lg hover:bg-white hover:text-green-600 transition inline-block font-semibold">
                    Konsultasi Gratis
                </a>
            </div>
        </div>
    </section>
@endsection