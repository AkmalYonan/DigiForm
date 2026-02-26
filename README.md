<p align="center">
  <img src="https://raw.githubusercontent.com/bakaroti/resource/refs/heads/main/logo_110.png" />
</p>

# 🚀 DigiForm - Digital Invitation Management System

DigiForm adalah platform berbasis Laravel yang dirancang untuk pengelolaan layanan undangan digital secara profesional. Proyek ini mencakup sistem autentikasi, panel admin, serta fitur CRUD lengkap untuk manajemen data pesanan, pengelolaan gambar, dan landing page dinamis.

## ✨ Fitur Utama

- **Sistem Autentikasi**: Login dan registrasi multi-user.
- **Admin Panel**: Dashboard intuitif untuk mengelola seluruh ekosistem aplikasi.
- **Sistem CRUD Lengkap**: Pengelolaan data penjualan, paket fitur, dan testimoni.
- **Media Management**: Sistem upload gambar untuk Galeri, Banner, dan Foto Mempelai.
- **Responsive Landing Page**: Tampilan depan yang modern, cepat, dan adaptif di semua perangkat.

---

## 🛠️ Panduan Instalasi & Setup

Ikuti langkah-langkah di bawah ini untuk menjalankan project di lingkungan lokal Anda.

### 1. Cloning Repositori

Langkah pertama, unduh project dari repositori resmi:

```bash
git clone [https://github.com/AkmalYonan/DigiForm.git](https://github.com/AkmalYonan/DigiForm.git)
cd DigiForm
```

### 2. Konfigurasi Environment

Salin file `.env.example` menjadi `.env` dan lengkapi kredensial yang diperlukan:

```bash
cp .env.example .env
```

**Pengaturan Database:**
Pastikan konfigurasi database di file `.env` sudah benar:

```bash
# Untuk MySQL :
DB_CONNECTION=mysql
DB_HOST=[IP_ADDRESS]
DB_PORT=3306
DB_DATABASE=pkl_OTPEMAIL
DB_USERNAME=root
DB_PASSWORD=

#Untuk PostgreSQL :
DB_CONNECTION=pgsql
DB_SCHEMA=[Project URL Schema]
DATABASE_URL=[Project URL Database]
```

**Pengaturan Email (SMTP):**
Konfigurasi server email untuk notifikasi (opsional):

```env
MAIL_MAILER=smtp
MAIL_HOST=[IP_ADDRESS]
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
```

### 3. Instalasi Dependensi

Instalasi dependensi PHP (Composer) dan Node.js (NPM):

```bash
# Install dependencies PHP
composer install

# Generate Laravel APP_KEY
php artisan key:generate

# Storage Symlink dengan Public
php artisan storage:link

# Install dependencies Node.js
npm install

# Compile assets (CSS/JS)
npm run dev or npm run build
```

### 4. Migrasi Database

Jalankan perintah migrasi untuk membuat tabel-tabel yang diperlukan:

```bash
Terdapat file supabase_chema.sql = Untuk PostgreSQL Schema
dan untuk pkl_OTPEMAIL.sql = Untuk MySQL, Silahkan Import ke SQL anda
```

### 5. Menjalankan Aplikasi

Start server development Laravel:

```bash
php artisan serve
```

Akses aplikasi melalui browser pada alamat: `http://localhost:8000`

---

## 🔐 Akun Default

Setelah migrasi berhasil, Anda dapat login menggunakan akun berikut:

**Admin:**

- **Email**: [admin@gmail.com]
- **Password**: `password`

**User:**

- **Email**: [admin@gmail.com]
- **Password**: `password`

---

## 📂 Struktur Proyek

- `app/Http/Controllers`: Controller aplikasi.
- `app/Models`: Model Eloquent.
- `resources/views`: View Blade dan aset frontend.
- `database/migrations`: Skema database.
- `routes/web.php`: Definisi rute aplikasi.

---

## 🤝 Kontribusi

Kontribusi sangat diterima! Jika Anda ingin berkontribusi pada proyek ini, silakan ikuti langkah-langkah berikut:

1. **Fork** repositori.
2. Buat **Branch** baru (`git checkout -b feature/AmazingFeature`).
3. **Commit** perubahan (`git commit -m 'Add some AmazingFeature'`).
4. **Push** ke branch (`git push origin feature/AmazingFeature`).
5. Buka **Pull Request**.

---

## 📄 Lisensi

Proyek ini dilisensikan di bawah Lisensi MIT.

---

## 📞 Dukungan & Bantuan

Jika Anda mengalami kendala saat instalasi atau penggunaan, silakan periksa kembali konfigurasi `.env` atau hubungi tim support.

**Selamat menggunakan DigiForm!** 🚀
