# Panduan Deployment Vercel & Supabase

Selamat! Repository Anda sekarang sudah siap untuk dideploy ke Vercel dengan database Supabase. Berikut adalah langkah-langkah akhir yang harus Anda lakukan di Vercel:

## 1. Push Code ke GitHub

Pastikan Anda sudah meng-commit dan mem-push semua perubahan terbaru ke repository GitHub Anda, termasuk file `api/index.php` dan `vercel.json` yang baru saja saya buat.

## 2. Import Project di Vercel

1. Buka dashboard Vercel (https://vercel.com/dashboard).
2. Klik tombol **Add New** -> **Project**.
3. Pilih repository GitHub project `DigiForm` Anda dan klik **Import**.

## 3. Konfigurasi Project Vercel

Pada halaman "Configure Project", biarkan pengaturan framework default (Vite/Other) karena kita menggunakan `vercel.json` untuk pengaturannya.

Buka bagian **Environment Variables** dan tambahkan variabel-variabel berikut:

### Database (Supabase)

Ambil URL ini dari dashboard Supabase Anda (Settings -> Database -> Connection string -> URI):

- `DB_CONNECTION`: `pgsql`
- `DATABASE_URL`: `postgresql://postgres.[PROJECT-REF]:[PASSWORD]@[REGION].pooler.supabase.com:6543/postgres`
  _(⚠️ Ganti [PASSWORD] dengan password database Supabase Anda)_

### Laravel App Secrets

- `APP_ENV`: `production`
- `APP_DEBUG`: `false`
- `APP_URL`: `https://[NAMA-DOMAIN-VERCEL-ANDA].vercel.app` _(Contoh: https://digiform.vercel.app)_
- `APP_KEY`: _(Buka terminal lokal Anda, jalankan `php artisan key:generate --show`, lalu copy hasilnya ke sini)_
- `ASSET_URL`: `https://[NAMA-DOMAIN-VERCEL-ANDA].vercel.app` _(Penting agar file CSS/JS Vite bisa dimuat di production)_
- `FORCE_HTTPS`: `true`

### Konfigurasi Cache/Session

- `BROADCAST_DRIVER`: `log`
- `CACHE_DRIVER`: `array`
- `SESSION_DRIVER`: `cookie`
- `QUEUE_CONNECTION`: `sync`

## 4. Deploy!

Klik tombol **Deploy**. Vercel akan secara otomatis menginstal NPM dependencies, menjalankan `npm run build` (membentuk folder `public/build`), dan mengatur fungsi serverless PHP untuk Laravel.

Setelah selesai, Anda bisa mengunjungi URL yang diberikan Vercel. Database juga sudah terhubung ke Supabase dengan tabel-tabel dan data awal yang Anda minta sebelumnya!
