# SIAKAD — Sistem Informasi Akademik

Aplikasi web sederhana berbasis **CodeIgniter 4** dan **MySQL** untuk mengelola data akademik. Dibuat untuk praktikum Pemrograman Web II (Pertemuan 12–13: Model, Database, dan CRUD).

## Isi aplikasi

- **Mahasiswa** — CRUD lengkap: tambah, lihat, ubah, hapus.
- **Dosen & Mata Kuliah** — halaman daftar contoh.
- **Tentang** — deskripsi aplikasi dan identitas pembuat.
- Layout bersama dengan navigasi, logo kampus, dan favicon.

## Struktur utama

`app/Models/MahasiswaModel.php` (data) · `app/Controllers/Mahasiswa.php` (logika CRUD) · `app/Views/mahasiswa/` (tampilan) · `app/Config/Routes.php` (route).

## Menjalankan

1. XAMPP: aktifkan Apache + MySQL, buat database `siakad_ci4` dengan tabel `mahasiswa` (`id`, `nim`, `nama`, `prodi`).
2. `composer install`, salin `env` menjadi `.env`, lalu atur `app.baseURL` dan `database.default.*`.
3. `php spark serve` → buka `http://localhost:8080/mahasiswa`.

Dibuat oleh **Angga Sanjaya** — 2024 57201 012 — Sistem Informasi, Semester 5.
