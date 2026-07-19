<div align="center">
  <h1>🕌 Sistem Informasi & Manajemen Musholla At-Taqwa</h1>
  <p>Aplikasi berbasis web untuk mengelola informasi publik, jadwal kegiatan, dan transparansi keuangan Musholla At-Taqwa. Dibangun dengan pendekatan <em>Mobile-First</em> untuk memastikan kenyamanan akses jamaah melalui <em>smartphone</em>, serta dilengkapi dengan dasbor Admin yang komprehensif.</p>
</div>

---

## 📸 Cuplikan Layar (Screenshots)

### 1. Tampilan Jamaah (Landing Page - Desktop)
> **<img width="1908" height="7756" alt="screencapture-unbuckled-shrimp-corrode-ngrok-free-dev-2026-07-20-00_21_09" src="https://github.com/user-attachments/assets/8235a5fc-52cd-49d8-8c34-b025fbafb053" />
**

### 2. Tampilan Jamaah (Landing Page - Mobile)
<div align="center">
  
> **<img width="591" height="1280" alt="WhatsApp Image 2026-07-20 at 00 24 52" src="https://github.com/user-attachments/assets/80bf4315-6cd9-40c2-9322-cf5c8ab67d8a" />
**
  
</div>

### 3. Tampilan Pengurus (Admin Panel)
> **<img width="1908" height="968" alt="screencapture-unbuckled-shrimp-corrode-ngrok-free-dev-admin-2026-07-20-00_23_23" src="https://github.com/user-attachments/assets/207bd808-b0ad-4b6b-9851-f763149cc3a0" />
**

---

## ✨ Fitur Utama

### 📱 Publik (Landing Page)
- **Tampilan Responsif & Modern:** Desain antarmuka (UI) yang rapi di semua ukuran layar (Mobile, Tablet, Desktop) dilengkapi dengan fitur *Dark Mode*.
- **Informasi Ibadah:** Jadwal sholat harian dan informasi kajian/tausiyah nasional secara *real-time*.
- **Transparansi Keuangan:** Publikasi laporan mutasi kas (pemasukan dan pengeluaran) infaq/sodaqoh jamaah yang tersistemasi.
- **Pusat Informasi:** Papan pengumuman kegiatan, berita liputan musholla, dan galeri dokumentasi acara.
- **Donasi Digital:** Dukungan infaq mudah menggunakan integrasi *scan* kode QRIS.

### ⚙️ Pengurus (Admin Panel)
- **Manajemen Konten:** Kemudahan dalam menambah, mengedit, dan menghapus artikel berita, agenda, serta galeri foto.
- **Manajemen Kas (Buku Besar):** Pencatatan sirkulasi keuangan musholla dengan kalkulasi saldo akhir otomatis.
- **Manajemen Kepengurusan:** Pembaruan struktur organisasi dan profil kepengurusan musholla.

---

## 🛠️ Teknologi yang Digunakan

- **Framework Utama:** [Laravel 11](https://laravel.com/)
- **Admin Panel:** [Filament v3](https://filamentphp.com/)
- **Desain & UI:** [Tailwind CSS](https://tailwindcss.com/) & [Alpine.js](https://alpinejs.dev/)
- **Pemrosesan Aset:** Vite

---

## 🚀 Panduan Instalasi Lokal

Jika Anda ingin menjalankan proyek ini di komputer lokal untuk pengembangan atau pengujian, ikuti langkah-langkah berikut:

1. **Kloning Repositori**
   ```bash
   git clone [https://github.com/Gondesanajay/Web-Musholla-At-Taqwa.git](https://github.com/Gondesanajay/Web-Musholla-At-Taqwa.git)
   cd Web-Musholla-At-Taqwa

```

2. **Instalasi Dependensi PHP & Node.js**
```bash
composer install
npm install

```


3. **Kompilasi Aset Desain (Vite)**
```bash
npm run build

```


4. **Pengaturan Environment**
Salin file `.env.example` menjadi `.env`, lalu buat *App Key*.
```bash
cp .env.example .env
php artisan key:generate

```


*Penting: Atur koneksi database (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`) di dalam file `.env` Anda sesuai dengan pengaturan lokal (misal: MySQL/MariaDB XAMPP).*
5. **Migrasi Database & Seeder**
Bangun struktur tabel ke dalam database:
```bash
php artisan migrate

```


*Untuk membuat akun Admin baru, jalankan perintah:* `php artisan make:filament-user`
6. **Tautkan Folder Penyimpanan (Storage)**
Langkah ini wajib dilakukan agar gambar galeri, profil, dan berita dapat ditampilkan ke publik:
```bash
php artisan storage:link

```


7. **Jalankan Server Lokal**
```bash
php artisan serve

```


Sistem siap digunakan! Akses *landing page* melalui `http://localhost:8000` dan dasbor admin di `http://localhost:8000/admin`.

---

## 👨‍💻 Pengembang

Dikembangkan oleh **Ikmalrizal** (Mahasiswa STT-NF) sebagai bagian dari proyek sistem informasi dan manajemen operasional sarana ibadah.

```

```
