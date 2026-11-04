# MyStore - UTS Pemrograman Web 2

## Deskripsi
MyStore adalah aplikasi manajemen toko sederhana berbasis PHP Native dengan pola arsitektur Model-View-Controller (MVC) dan database MySQL.

## identitas mahasiswa
*Nama :* Tamauli Gultom
*Nim :* 25210011
*Prodi :* Komputerisasi Akuntansi
*Dosen :* prima sitompul 
## Fitur
- Login dan logout admin menggunakan session.
- Dashboard admin.
- Menampilkan jumlah dan daftar produk.
- Create, Read, Update, Delete (CRUD) produk.
- Data produk terhubung dengan kategori.
- 25 data dummy produk.

## Teknologi
- PHP 8+
- MySQL / MariaDB
- PDO
- HTML, CSS, JavaScript
- XAMPP

## Struktur Folder
- `app/controllers/` : pengatur alur aplikasi.
- `app/models/` : komunikasi data/database.
- `app/middleware/` : pemeriksaan session login.
- `config/` : konfigurasi koneksi database.
- `views/` : tampilan halaman.
- `public/` : entry point, CSS, dan JavaScript.
- `screenshoot/` : dokumentasi screenshot hasil pengerjaan.

## Cara Menjalankan
1. Salin folder project ke `C:\xampp\htdocs\pw-mvc-neww-main`.
2. Jalankan Apache dan MySQL dari XAMPP.
3. Buka `http://localhost/phpmyadmin`.
4. Import file `mvc_mystore.sql` melalui tab Import. File SQL akan membuat database `mvc_mystore`.
5. Pastikan konfigurasi `config/database.php` sesuai dengan MySQL lokal (default XAMPP: user `root`, password kosong).
6. Buka `http://localhost/pw-mvc-neww-main/public/`.

## Akun Admin Demo
- Username: `admin`
- Password: `Admin123!`

## URL Fitur
- Login: `/login`
- Dashboard: `/admin`
- Tambah produk: `/admin/create`
- Edit produk: `/admin/edit?id=1`

## Dokumentasi Screenshot
Simpan screenshot hasil aplikasi ke folder `screenshoot/` dengan nama:
- `01-login-admin.png`
- `02-dashboard-admin.png`
- `03-tambah-produk.png`
- `04-edit-produk.png`
- `05-daftar-produk.png`

Catatan: screenshot perlu diambil setelah aplikasi dijalankan di browser pada komputer lokal.

## Repository GitHub UTS
Nama repository mengikuti format soal: `uts-<prodi>-<namakamu>`. Sesuaikan bagian `<prodi>` dengan nama prodi resmi sebelum membuat repository.
