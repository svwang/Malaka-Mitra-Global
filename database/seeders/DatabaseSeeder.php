<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Settings
        DB::table('settings')->insert([
            ['key' => 'company_name', 'value' => 'PT Malaka Mitra Global', 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'site_title', 'value' => 'MMG - Penyedia Tenaga Kerja Profesional', 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'company_description', 'value' => 'Penyedia tenaga kerja outsourcing profesional untuk cleaning service dan security', 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'address', 'value' => 'Jl. Contoh No. 123, Jakarta', 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'phone', 'value' => '(021) 1234567', 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'email', 'value' => 'info@mmg.com', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Services
        DB::table('services')->insert([
            [
                'name' => 'Cleaning Service',
                'description' => 'Layanan kebersihan profesional untuk kantor, gedung, dan fasilitas umum',
                'icon' => '🧹',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Security',
                'description' => 'Tenaga keamanan terlatih dengan sertifikasi profesional',
                'icon' => '🛡️',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}