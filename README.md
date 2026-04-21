🚀 Panduan Setup Project Laravel

Ikuti langkah-langkah berikut setelah clone project dari GitHub agar aplikasi bisa berjalan dengan baik di local environment.

📥 1. Clone Repository
git clone <link-repository>
cd <nama-folder-project>
📦 2. Install Dependency Backend (PHP)
composer install
⚙️ 3. Setup File Environment

Copy file .env.example menjadi .env:

cp .env.example .env
🔑 4. Generate Application Key
php artisan key:generate
🗄️ 5. Konfigurasi Database

Buka file .env, lalu sesuaikan:

DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
🧱 6. Jalankan Migration (Jika Ada)
php artisan migrate
📁 7. Setup Storage Link (Jika Menggunakan Upload File)
php artisan storage:link
🎨 8. Install Dependency Frontend
npm install
⚡ 9. Jalankan Frontend (Development)
npm run dev

Atau untuk build production:

npm run build
▶️ 10. Jalankan Server Laravel
php artisan serve

Buka di browser:

http://127.0.0.1:8000
⚠️ Catatan Penting
File .env tidak tersedia di repository, wajib dibuat manual dari .env.example
Folder vendor/ dan node_modules/ akan dibuat setelah install dependency
Jika ada error, pastikan:
PHP & Composer sudah terinstall
Node.js & NPM sudah terinstall
Database sudah dibuat