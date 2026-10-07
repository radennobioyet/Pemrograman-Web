# Rangkuman Jobsheet 8: SIMPUS-Mini - Koneksi PostgreSQL

_Mata Kuliah Pemrograman Web - Politeknik Negeri Malang (2026)_[cite: 2]

---

## 1. Pendahuluan

- Jobsheet 8 melanjutkan materi dari jobsheet-07 dengan mengganti penyimpanan sementara berbasis `$_SESSION` menjadi database relasional PostgreSQL sungguhan agar data tersimpan secara permanen[cite: 4].
- Perubahan utama meliputi skema SQL (`01_buku_anggota.sql`), koneksi PDO (`koneksi.php`), penggunaan _prepared statement_ untuk `INSERT`, query `SELECT` pada halaman daftar, serta statistik `COUNT(*)` pada beranda[cite: 4].

## 2. Konsep Dasar Database & SQL

- **Kebutuhan Database**: Menyelesaikan masalah data hilang saat sesi browser berakhir seperti pada `$_SESSION` di jobsheet-07[cite: 6].
- **Database Relasional**: Menyimpan data dalam bentuk tabel (baris dan kolom) yang tersimpan di disk secara permanen dengan aturan tipe data yang ketat[cite: 6].
- **SQL**: Bahasa deklaratif untuk berinteraksi dengan database melalui perintah seperti `CREATE TABLE`, `INSERT`, dan `SELECT`[cite: 5, 6].
- **PDO (PHP Data Objects)**: Lapisan abstraksi bawaan PHP untuk menghubungkan aplikasi ke berbagai jenis database secara seragam[cite: 7].

## 3. Skema Database (`01_buku_anggota.sql`)

- **Tabel `buku`**: Berisi kolom `id` (SERIAL, PRIMARY KEY), `judul` (VARCHAR(255) NOT NULL), `pengarang` (VARCHAR(255) NOT NULL), `tahun` (INTEGER NOT NULL), `isbn` (VARCHAR(50)), `stok` (INTEGER NOT NULL DEFAULT 0), dan `kategori` (VARCHAR(50))[cite: 8, 9].
- **Tabel `anggota`**: Berisi kolom `id` (SERIAL, PRIMARY KEY), `nama` (VARCHAR(255) NOT NULL), `no_anggota` (VARCHAR(50) NOT NULL UNIQUE), `alamat` (VARCHAR(255)), dan `no_hp` (VARCHAR(30))[cite: 8].
- **Batasan Kolom**: Menggunakan `PRIMARY KEY` untuk identifikasi unik, `NOT NULL` untuk field wajib, dan `UNIQUE` untuk mencegah duplikasi data (seperti pada nomor anggota)[cite: 9].

## 4. Persiapan Database Sebelum Menjalankan

- **Ekstensi PHP**: Memastikan ekstensi `pdo_pgsql` aktif di file konfigurasi `php.ini`[cite: 10].
- **Pembuatan Database**: Membuat wadah database kosong melalui perintah terminal `createdb simpus_mini`[cite: 10].
- **Eksekusi Skema**: Menjalankan file skema SQL menggunakan perintah `psql -d simpus_mini -f sql/01_buku_anggota.sql`[cite: 10].

## 5. Koneksi PHP ke Database (`includes/koneksi.php`)

- Menginisialisasi koneksi menggunakan objek `new PDO("pgsql:host=$host;port=$port;dbname=$db", $user, $pass)`[cite: 13].
- Menerapkan blok `try/catch` dengan `PDOException` serta fungsi `die()` untuk menangani kegagalan koneksi secara aman[cite: 14].
- Mengaktifkan mode _error exception_ menggunakan `$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)`[cite: 14].
- Menggunakan `require` alih-alih `include` karena file koneksi bersifat wajib agar aplikasi dapat berfungsi[cite: 14].

## 6. Operasi Data (INSERT & SELECT)

- **Menyimpan Data (`INSERT`)**: Menggunakan _prepared statement_ (`$pdo->prepare(...)` dan `$stmt->execute([...])`) dengan placeholder bertitik dua (`:judul`, dll.) untuk mencegah kerentanan _SQL injection_, serta klausa `RETURNING id`[cite: 15, 16].
- **Membaca Data (`SELECT`)**: Menggunakan `$pdo->query(...)` untuk query statis tanpa input luar, dikombinasikan dengan `fetchAll(PDO::FETCH_ASSOC)` untuk mengubah hasil query menjadi array asosiatif[cite: 18].
- **Agregasi Data**: Menggunakan `SELECT COUNT(*) FROM ...` bersama `fetchColumn()` untuk menghitung total buku dan anggota secara efisien langsung di sisi database[cite: 19].

## 7. Instalasi PostgreSQL di Laragon (Khusus Windows)

- **Quick Add**: Menambahkan PostgreSQL ke dalam lingkungan Laragon melalui menu `Tools -> Quick Add`[cite: 22].
- **Konfigurasi & Terminal**: Memastikan service berjalan (indikator hijau di port `5432`), mengaktifkan ekstensi `pdo_pgsql`, serta menyesuaikan kredensial user `postgres`[cite: 23, 24].
- **Penanganan Masalah**: Mengatasi potensi bentrok port `5432` dengan instance PostgreSQL lain menggunakan manajemen service Windows (`netstat`, `Stop-Service`)[cite: 25, 26].
