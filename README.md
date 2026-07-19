# 🕌 Sistem Informasi & Manajemen Musholla At-Taqwa

Aplikasi berbasis web untuk mengelola informasi publik, jadwal kegiatan, dan transparansi keuangan Musholla At-Taqwa. Dibangun dengan pendekatan *Mobile-First* untuk memastikan kenyamanan akses jamaah melalui *smartphone*, serta dilengkapi dengan dasbor Admin yang kuat.

## 📸 Cuplikan Layar (Screenshots)

<!-- GANTI LINK GAMBAR DI BAWAH INI NANTI -->
### Tampilan Jamaah (Landing Page)
![Tampilan Landing Page Desktop](https://via.placeholder.com/800x400?text=Masukkan+Gambar+Tampilan+Desktop+Di+Sini)

![Tampilan Landing Page Mobile](https://via.placeholder.com/300x600?text=Masukkan+Gambar+Tampilan+Mobile+Di+Sini)

### Tampilan Pengurus (Admin Panel)
![Tampilan Dasbor Admin](https://via.placeholder.com/800x400?text=Masukkan+Gambar+Admin+Panel+Di+Sini)

---

## ✨ Fitur Utama

### 📱 Publik (Landing Page)
- **Tampilan Responsif & Modern:** Desain antarmuka (UI) yang rapi di semua ukuran layar (Mobile, Tablet, Desktop) dilengkapi dengan fitur *Dark Mode*.
- **Informasi Ibadah:** Jadwal sholat harian dan informasi kajian/tausiyah.
- **Transparansi Keuangan:** Publikasi laporan mutasi kas (pemasukan dan pengeluaran) infaq/sodaqoh jamaah secara *real-time*.
- **Pusat Informasi:** Papan pengumuman kegiatan, berita liputan musholla, dan galeri dokumentasi.
- **Donasi Digital:** Dukungan infaq mudah menggunakan *scan* kode QRIS.

### ⚙️ Pengurus (Admin Panel)
- **Manajemen Konten:** Kemudahan dalam menambah, mengedit, dan menghapus artikel berita, agenda, serta galeri foto.
- **Manajemen Kas (Buku Besar):** Pencatatan sirkulasi keuangan musholla dengan perhitungan saldo otomatis.
- **Manajemen Kepengurusan:** Pembaruan struktur organisasi dan profil pengurus musholla.

---

## 🛠️ Teknologi yang Digunakan

- **Framework Utama:** [Laravel](https://laravel.com/)
- **Admin Panel:** [Filament v3](https://filamentphp.com/)
- **Desain & UI:** [Tailwind CSS](https://tailwindcss.com/) & [Alpine.js](https://alpinejs.dev/)
- **Pemrosesan Aset:** Vite

---

## 🚀 Panduan Instalasi Lokal

Jika Anda ingin menjalankan proyek ini di komputer lokal untuk pengembangan, ikuti langkah-langkah berikut:

1. **Kloning Repositori**
   ```bash
   git clone [https://github.com/Gondesanajay/Web-Musholla-At-Taqwa.git](https://github.com/Gondesanajay/Web-Musholla-At-Taqwa.git)
   cd Web-Musholla-At-Taqwa

Instalasi Dependensi PHP & Node.js

Bash
composer install
npm install
Kompilasi Aset Desain (Vite)

Bash
npm run build
Pengaturan Environment
Salin file .env.example menjadi .env, lalu buat App Key.

Bash
cp .env.example .env
php artisan key:generate
Jangan lupa atur koneksi database (DB_DATABASE, DB_USERNAME, dll) di dalam file .env Anda.

Migrasi Database & Seeder

Bash
php artisan migrate --seed
(Opsional: Tambahkan perintah untuk membuat user admin Filament jika diperlukan php artisan make:filament-user)

Tautkan Folder Penyimpanan (Storage)
Agar gambar galeri dan berita dapat diakses publik:

Bash
php artisan storage:link
Jalankan Server Lokal

Bash
php artisan serve
Akses website melalui http://localhost:8000 dan panel admin di http://localhost:8000/admin.

Dibuat untuk memudahkan tata kelola dan syiar Musholla At-Taqwa.
