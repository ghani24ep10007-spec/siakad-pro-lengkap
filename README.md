# Sistem Informasi UNUGHA

Landing page Sistem Informasi Universitas Nahdlatul Ulama Al Ghazali Cilacap untuk tugas mata kuliah Pemrograman Web. Halaman menampilkan navigasi, logo kampus, dan tiga kategori informasi: layanan akademik, katalog kampus, serta informasi dan pengumuman.

## Prasyarat

- PHP 8.2 atau lebih baru
- Composer 2
- Node.js dan npm
- Ekstensi PHP yang dibutuhkan Laravel 11

## Menjalankan proyek

1. Clone repositori dan masuk ke folder proyek:

~~~bash
git clone https://github.com/ghani24ep10007-spec/siakad-pro-lengkap.git
cd siakad-pro-lengkap
~~~

2. Pasang dependensi PHP dan siapkan konfigurasi lokal:

~~~bash
composer install
cp .env.example .env
php artisan key:generate
~~~

Di Windows Command Prompt, gunakan perintah copy .env.example .env sebagai pengganti cp.

3. Pasang dependensi frontend dan buat aset Tailwind/Vite:

~~~bash
npm install
npm run build
~~~

4. Jalankan server Laravel:

~~~bash
php artisan serve
~~~

5. Buka alamat yang ditampilkan oleh Artisan (biasanya http://127.0.0.1:8000).

Untuk mengubah halaman, edit resources/views/welcome.blade.php; kelas utilitas Tailwind dipindai dan dibangun melalui Vite. Tombol Login pada tugas ini hanya menampilkan pemberitahuan demo dan tidak meminta atau menyimpan kredensial.

## Teknologi

- Laravel 11
- Blade
- Tailwind CSS
- Vite
