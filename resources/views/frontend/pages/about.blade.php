@extends('frontend.layouts.app')

@section('title', 'About Us')

@section('content')
<!-- Hero Section About -->
<section class="relative bg-gradient-to-r from-green-50 to-white py-16">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Tentang <span class="primary-green-text">Kami</span></h1>
            <div class="w-20 h-1 primary-green mx-auto"></div>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Mengenal lebih dekat PT. MALAKA MITRA GLOBAL</p>
        </div>
    </div>
</section>

<!-- Company Profile Section -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12 items-start">
            <div>
                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                     alt="Kantor PT. MALAKA MITRA GLOBAL" 
                     class="rounded-lg shadow-xl w-full">
            </div>
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Company Profile</h2>
                <div class="w-16 h-1 primary-green mb-6"></div>
                
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="primary-green rounded-full p-1 mr-3 mt-1">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-700"><span class="font-semibold">PT. MALAKA MITRA GLOBAL</span> adalah salah satu perusahaan swasta yang berdiri pada tahun 2023 dan bergerak dibidang ketenagakerjaan dan jasa penunjang usaha lainnya.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="primary-green rounded-full p-1 mr-3 mt-1">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-700"><span class="font-semibold">Kantor Pusat:</span> PT. MALAKA MITRA GLOBAL berkedudukan dan berkantor pusat di Provinsi Sulawesi Selatan, Kota Makassar, Kecamatan Biring Kanaya, Kelurahan Laikang tepatnya berada di Jalan Perumnas Raya Nomor 150.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="primary-green rounded-full p-1 mr-3 mt-1">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-700"><span class="font-semibold">Kontak:</span> +62 821-9944-0822</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Goals & Strength Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Goals -->
            <div class="bg-white rounded-lg shadow-lg p-8">
                <div class="primary-green w-16 h-16 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Goals</h3>
                <div class="w-16 h-1 primary-green mb-4"></div>
                <p class="text-gray-700 leading-relaxed">
                    PT. MALAKA MITRA GLOBAL sendiri mempunyai tujuan untuk menjadi perusahaan yang bergerak dibidang ketenagakerjaan dengan terus memprioritaskan kualitas dengan kuantitas yang kemudian dapat bersaing di era globalisasi.
                </p>
            </div>
            
            <!-- Strength -->
            <div class="bg-white rounded-lg shadow-lg p-8">
                <div class="primary-green w-16 h-16 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Strength</h3>
                <div class="w-16 h-1 primary-green mb-4"></div>
                <p class="text-gray-700 leading-relaxed">
                    Kekuatan pada PT. MALAKA MITRA GLOBAL terletak pada pelayanan, kualitas dan kuantitas yang diberikan kepada karyawannya dan terus meningkatkan kekuatan dan skill antar karyawan.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CEO Statement Section -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4">
        <div class="bg-gradient-to-r from-green-50 to-white rounded-2xl shadow-xl overflow-hidden">
            <div class="grid md:grid-cols-3 gap-0">
                <div class="md:col-span-1">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" 
                         alt="Ahmad Rukmana - Direktur Utama" 
                         class="w-full h-full object-cover">
                </div>
                <div class="md:col-span-2 p-8 md:p-12">
                    <div class="mb-4">
                        <svg class="w-12 h-12 text-green-600 opacity-50" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">CEO Statement</h3>
                    <p class="text-green-600 font-semibold mb-4">Ahmad Rukmana - Direktur Utama PT. MALAKA MITRA GLOBAL</p>
                    <p class="text-gray-700 leading-relaxed mb-6">
                        "Kami menyadari bahwa Sumber Daya Manusia sangat berperan penting dalam menjalankan sebuah organisasi dalam perusahaan. Karenanya, kami hadir sebagai perusahaan penyedia jasa tenaga kerja untuk memenuhi keperluan perusahaan. Dengan pelatihan terbaik, kami memberikan tenaga kerja yang profesional, terlatih, disiplin dan memiliki tanggung jawab dalam setiap tugasnya."
                    </p>
                    <div class="flex items-center">
                        <div class="primary-green w-12 h-1 rounded-full"></div>
                        <div class="primary-green w-6 h-1 rounded-full ml-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Vision & Mission</h2>
            <div class="w-20 h-1 primary-green mx-auto"></div>
            <p class="text-gray-600 mt-4">Komitmen kami untuk terus berkembang dan memberikan yang terbaik</p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Vision -->
            <div class="bg-white rounded-lg shadow-lg p-8">
                <div class="flex items-center mb-6">
                    <div class="primary-green w-12 h-12 rounded-full flex items-center justify-center mr-4">
                        <span class="text-white text-xl">🎯</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">Visi</h3>
                </div>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="primary-green-text mr-3">✓</span>
                        <span class="text-gray-700">Menyeleksi dan mendayagunakan tenaga kerja</span>
                    </li>
                    <li class="flex items-start">
                        <span class="primary-green-text mr-3">✓</span>
                        <span class="text-gray-700">Mewujudkan pemerataan kesempatan kerja dan penyediaan tenaga kerja</span>
                    </li>
                    <li class="flex items-start">
                        <span class="primary-green-text mr-3">✓</span>
                        <span class="text-gray-700">Meningkatkan kesejahteraan tenaga kerja dan keluarganya</span>
                    </li>
                    <li class="flex items-start">
                        <span class="primary-green-text mr-3">✓</span>
                        <span class="text-gray-700">Melindungi keselamatan perorangan dan harta milik dan mengawasi sistem tanda peringatan bahaya</span>
                    </li>
                    <li class="flex items-start">
                        <span class="primary-green-text mr-3">✓</span>
                        <span class="text-gray-700">Menyediakan gabungan jasa penunjang lainnya</span>
                    </li>
                </ul>
            </div>
            
            <!-- Mission -->
            <div class="bg-white rounded-lg shadow-lg p-8">
                <div class="flex items-center mb-6">
                    <div class="primary-green w-12 h-12 rounded-full flex items-center justify-center mr-4">
                        <span class="text-white text-xl">🚀</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">Misi</h3>
                </div>
                <div class="bg-green-50 rounded-lg p-6">
                    <p class="text-gray-700 leading-relaxed text-center font-medium">
                        "Keterbukaan dan kerja sama team merupakan keunggulan kompetitif bagi kami."
                    </p>
                </div>
                <div class="mt-6">
                    <h4 class="font-semibold text-gray-800 mb-3">Nilai-nilai Kami:</h4>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">Integritas</span>
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">Profesionalisme</span>
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">Kerja Sama Tim</span>
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">Keterbukaan</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How We Do It Section -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">How We Do It</h2>
            <div class="w-20 h-1 primary-green mx-auto"></div>
            <p class="text-gray-600 mt-4">Proses dan metode kerja kami untuk memberikan layanan terbaik</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8 mb-12">
            <div class="text-center group">
                <div class="primary-green w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                    <span class="text-white text-2xl">🎯</span>
                </div>
                <h3 class="text-xl font-bold mb-2">Pelayanan Terbaik</h3>
                <p class="text-gray-600">Memberikan pelayanan terbaik dalam bidang alih daya/ketenagakerjaan dan jasa penunjang usaha lainnya, yang mengutamakan kepuasan customer.</p>
            </div>
            
            <div class="text-center group">
                <div class="primary-green w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                    <span class="text-white text-2xl">📚</span>
                </div>
                <h3 class="text-xl font-bold mb-2">Tenaga Terlatih</h3>
                <p class="text-gray-600">Tenaga kerja yang kami persiapkan telah mengikuti berbagai macam pelatihan dan memiliki pengalaman.</p>
            </div>
            
            <div class="text-center group">
                <div class="primary-green w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                    <span class="text-white text-2xl">🔄</span>
                </div>
                <h3 class="text-xl font-bold mb-2">Fleksibilitas</h3>
                <p class="text-gray-600">Memiliki fleksibilitas untuk mempersilahkan pelanggan mengganti sumber daya manusia bila kurang sesuai.</p>
            </div>
        </div>
        
        <div class="bg-gradient-to-r from-green-600 to-green-700 rounded-xl p-8 text-white">
            <div class="text-center">
                <p class="text-xl leading-relaxed">
                    "Sumber daya manusia yang kami persiapkan adalah mereka yang merupakan tenaga kerja yang handal, profesional dan berintegritas."
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Kind of Service Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Kind of Service</h2>
            <div class="w-20 h-1 primary-green mx-auto"></div>
            <p class="text-gray-600 mt-4">Layanan yang kami sediakan untuk memenuhi kebutuhan Anda</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                <div class="primary-green w-12 h-12 rounded-full flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Aktivitas Penyedia Gabungan Jasa Administrasi Kantor</h3>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                <div class="primary-green w-12 h-12 rounded-full flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Aktivitas Penyedia Gabungan Jasa Penunjang Fasilitas</h3>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                <div class="primary-green w-12 h-12 rounded-full flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Penyedia Sumber Daya Manusia dan Manajemen Fungsi SDM</h3>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                <div class="primary-green w-12 h-12 rounded-full flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Aktivitas Kebersihan Umum Bangunan</h3>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                <div class="primary-green w-12 h-12 rounded-full flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Aktivitas Penyeleksian dan Penempatan Tenaga Kerja Dalam Negeri</h3>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                <div class="primary-green w-12 h-12 rounded-full flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Aktivitas Kebersihan Bangunan dan Industri Lainnya</h3>
            </div>
        </div>
    </div>
</section>

<!-- Three Pillars Section -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg p-6 border-t-4 border-green-500">
                <div class="text-center">
                    <div class="primary-green w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white text-2xl">🔄</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Fleksibel</h3>
                    <p class="text-gray-600">Kami berikan layanan prima dengan mengutamakan kepuasan customer yang dapat mengajukan penggantian SDM yang diinginkan apabila kurang/tidak memenuhi ekspektasi</p>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-lg p-6 border-t-4 border-green-500">
                <div class="text-center">
                    <div class="primary-green w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white text-2xl">📊</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">High Standard</h3>
                    <p class="text-gray-600">PT. MALAKA MITRA GLOBAL melakukan seleksi ketat untuk setiap sumber daya manusia dan menerapkan standar tinggi serta ketentuan yang lengkap dalam setiap aspek pekerjaan</p>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-lg p-6 border-t-4 border-green-500">
                <div class="text-center">
                    <div class="primary-green w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white text-2xl">🎓</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Training</h3>
                    <p class="text-gray-600">Memberikan pelatihan rutin yang lengkap dan terkini dalam mempersiapkan Sumber Daya Manusia (SDM)</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="max-w-5xl mx-auto px-4 text-center">
        
        <!-- Title -->
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Struktur Organisasi</h2>
        <div class="w-20 h-1 bg-green-500 mx-auto mb-4"></div>
        <p class="text-gray-600 mb-12">PT. MALAKA MITRA GLOBAL</p>
         
        <!-- Direktur Utama -->
        <div class="flex justify-center">
            <div>
                <img src="https://randomuser.me/api/portraits/men/32.jpg" 
                     class="w-32 h-32 rounded-full mx-auto border-4 border-green-500 object-cover">
                <h3 class="mt-4 font-bold text-lg">Ahmad Rukmana</h3>
                <p class="text-green-600 font-semibold">Direktur Utama</p>
            </div>
        </div>

        <!-- Line -->
        <div class="w-1 h-12 bg-green-500 mx-auto"></div>

        <!-- Direktur -->
        <div class="flex justify-center gap-12 flex-wrap">
            
            <div>
                <img src="https://randomuser.me/api/portraits/men/45.jpg" 
                     class="w-28 h-28 rounded-full mx-auto border-4 border-green-500 object-cover">
                <h3 class="mt-4 font-bold">Muhammad Syawal</h3>
                <p class="text-green-600">Direktur</p>
            </div>

            <!-- kalau nanti ada direktur lain tinggal tambah di sini -->
            
        </div>

        <!-- Line -->
        <div class="w-1 h-12 bg-green-500 mx-auto"></div>

        <!-- Komisaris -->
        <div class="flex justify-center">
            <div>
                <img src="https://randomuser.me/api/portraits/women/68.jpg" 
                     class="w-32 h-32 rounded-full mx-auto border-4 border-green-500 object-cover">
                <h3 class="mt-4 font-bold text-lg">Jumriyati</h3>
                <p class="text-green-600 font-semibold">Komisaris</p>
            </div>
        </div>    

    </div>
</section>
@endsection