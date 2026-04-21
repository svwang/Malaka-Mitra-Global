@extends('frontend.layouts.app')

@section('title', 'Contact Us')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-green-50 to-white py-16">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Hubungi <span class="primary-green-text">Kami</span></h1>
        <div class="w-20 h-1 primary-green mx-auto mb-4"></div>
        <p class="text-gray-600 max-w-2xl mx-auto text-lg">
            Konsultasikan kebutuhan tenaga kerja Anda dengan tim profesional kami
        </p>
    </div>
</section>

<!-- Contact Section -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12">
            
            <!-- Contact Information -->
            <div>
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Informasi Kontak</h2>
                <p class="text-gray-600 mb-8">
                    Kami siap membantu Anda. Hubungi kami melalui kontak di bawah ini atau isi form untuk mendapatkan informasi lebih lanjut.
                </p>
                
                <div class="space-y-6">
                    <!-- Alamat -->
                    <div class="flex items-start">
                        <div class="primary-green w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="font-semibold text-gray-800 mb-1">Alamat Kantor</h3>
                            <p class="text-gray-600">
                                Jl. Perumnas Sudiang Raya, No. 150<br>
                                Kec. Biring Kanaya, Kel. Laikang<br>
                                Makassar, Sulawesi Selatan 90242
                            </p>
                        </div>
                    </div>
                    
                    <!-- Telepon -->
                    <div class="flex items-start">
                        <div class="primary-green w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="font-semibold text-gray-800 mb-1">Nomor Telepon</h3>
                            <p class="text-gray-600">
                                <a href="tel:+6282199440822" class="hover:text-green-600 transition">+62 821-9944-0822</a><br>
                                <a href="tel:+6282195440822" class="hover:text-green-600 transition">+62 821-9544-0822</a>
                            </p>
                        </div>
                    </div>
                    
                    <!-- Email -->
                    <div class="flex items-start">
                        <div class="primary-green w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="font-semibold text-gray-800 mb-1">Email</h3>
                            <p class="text-gray-600">
                                <a href="mailto:info@malakamitraglobal.com" class="hover:text-green-600 transition">info@malakamitraglobal.com</a>
                            </p>
                        </div>
                    </div>
                    
                    <!-- Jam Kerja -->
                    <div class="flex items-start">
                        <div class="primary-green w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="font-semibold text-gray-800 mb-1">Jam Kerja</h3>
                            <p class="text-gray-600">
                                Senin - Jumat: 08.00 - 17.00 WITA<br>
                                Sabtu: 08.00 - 12.00 WITA<br>
                                Minggu & Hari Libur: Tutup
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Social Media -->
                <div class="mt-8 pt-6 border-t border-gray-200">
                    <h3 class="font-semibold text-gray-800 mb-4">Ikuti Kami</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="primary-green w-10 h-10 rounded-full flex items-center justify-center hover:bg-green-700 transition">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
                            </svg>
                        </a>
                        <a href="#" class="primary-green w-10 h-10 rounded-full flex items-center justify-center hover:bg-green-700 transition">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 0021.45-4.568c.29-.648.513-1.32.667-2.007z"/>
                            </svg>
                        </a>
                        <a href="#" class="primary-green w-10 h-10 rounded-full flex items-center justify-center hover:bg-green-700 transition">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zM12 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div>
                <div class="bg-white rounded-2xl shadow-lg p-6 md:p-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Kirim Pesan</h2>
                    
                    <form action="{{ url('/contact/send') }}" method="POST" class="space-y-5">
                        @csrf
                        
                        <!-- Nama Lengkap -->
                        <div>
                            <label for="name" class="block text-gray-700 font-semibold mb-2">Nama Lengkap <span class="text-red-500">*</span></label>
                            <input type="text" 
                                   id="name" 
                                   name="name" 
                                   required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition"
                                   placeholder="Masukkan nama lengkap Anda">
                        </div>
                        
                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-gray-700 font-semibold mb-2">Email <span class="text-red-500">*</span></label>
                            <input type="email" 
                                   id="email" 
                                   name="email" 
                                   required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition"
                                   placeholder="contoh@email.com">
                        </div>
                        
                        <!-- Nomor Telepon -->
                        <div>
                            <label for="phone" class="block text-gray-700 font-semibold mb-2">Nomor Telepon</label>
                            <input type="tel" 
                                   id="phone" 
                                   name="phone" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition"
                                   placeholder="08xx-xxxx-xxxx">
                        </div>
                        
                        <!-- Perusahaan -->
                        <div>
                            <label for="company" class="block text-gray-700 font-semibold mb-2">Nama Perusahaan</label>
                            <input type="text" 
                                   id="company" 
                                   name="company" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition"
                                   placeholder="Nama perusahaan Anda">
                        </div>
                        
                        <!-- Layanan yang Diminati -->
                        <div>
                            <label for="service" class="block text-gray-700 font-semibold mb-2">Layanan yang Diminati</label>
                            <select id="service" 
                                    name="service" 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition">
                                <option value="">Pilih Layanan</option>
                                <option value="cleaning">Cleaning Service</option>
                                <option value="security">Security</option>
                                <option value="both">Cleaning Service & Security</option>
                                <option value="other">Lainnya</option>
                            </select>
                        </div>
                        
                        <!-- Pesan -->
                        <div>
                            <label for="message" class="block text-gray-700 font-semibold mb-2">Pesan <span class="text-red-500">*</span></label>
                            <textarea id="message" 
                                      name="message" 
                                      rows="5" 
                                      required
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition resize-none"
                                      placeholder="Tulis pesan atau pertanyaan Anda..."></textarea>
                        </div>
                        
                        <!-- Submit Button -->
                        <button type="submit" 
                                class="w-full primary-green text-white py-3 rounded-lg hover:bg-green-700 transition font-semibold text-lg">
                            Kirim Pesan
                        </button>
                        
                        <p class="text-xs text-gray-500 text-center mt-4">
                            * Data Anda akan kami jaga kerahasiaannya
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Google Maps Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Lokasi Kantor</h2>
            <div class="w-20 h-1 primary-green mx-auto"></div>
            <p class="text-gray-600 mt-4">Temukan lokasi kantor kami</p>
        </div>
        
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <!-- Google Maps Embed (ganti dengan maps embed sesuai alamat) -->        
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6137.144127977249!2d119.5275005401469!3d-5.103817429564219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefb74c7338c83%3A0x6be54664eb07f31!2sJl.%20Poros%20Perumnas%20Sudiang%20No.150%2C%20Sudiang%20Raya%2C%20Kec.%20Biringkanaya%2C%20Kota%20Makassar%2C%20Sulawesi%20Selatan%2090552!5e0!3m2!1sid!2sid!4v1776755669139!5m2!1sid!2sid" 
                width="100%" 
                height="400" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        
        <!-- Petunjuk Arah -->
        <div class="mt-6 bg-green-50 rounded-xl p-6">
            <div class="flex items-start">
                <div class="primary-green w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <h3 class="font-semibold text-gray-800 mb-2">Petunjuk Lokasi</h3>
                    <p class="text-gray-600 text-sm">
                        Kantor kami berada di Jl. Perumnas Sudiang Raya No. 150, tepatnya di Kecamatan Biring Kanaya, Kelurahan Laikang. 
                        Lokasi strategis dan mudah diakses dari pusat kota Makassar.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16">
    <div class="max-w-4xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Pertanyaan Umum</h2>
            <div class="w-20 h-1 primary-green mx-auto"></div>
        </div>
        
        <div class="space-y-4">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="font-semibold text-gray-800 mb-2">Bagaimana cara memesan layanan?</h3>
                <p class="text-gray-600">Anda dapat menghubungi kami melalui telepon, email, atau mengisi form kontak di atas. Tim kami akan segera merespon dan membantu Anda.</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="font-semibold text-gray-800 mb-2">Apakah tenaga kerja sudah terlatih?</h3>
                <p class="text-gray-600">Ya, semua tenaga kerja kami telah melalui proses seleksi ketat dan pelatihan profesional sebelum ditempatkan.</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="font-semibold text-gray-800 mb-2">Berapa lama proses pengadaan tenaga kerja?</h3>
                <p class="text-gray-600">Proses pengadaan tenaga kerja biasanya memakan waktu 3-7 hari kerja tergantung kebutuhan dan ketersediaan tenaga kerja.</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="font-semibold text-gray-800 mb-2">Apakah ada garansi untuk tenaga kerja?</h3>
                <p class="text-gray-600">Ya, kami memberikan masa garansi dan Anda dapat mengajukan penggantian tenaga kerja jika tidak sesuai dengan ekspektasi.</p>
            </div>
        </div>
    </div>
</section>
@endsection