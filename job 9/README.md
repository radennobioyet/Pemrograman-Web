# Kesimpulan Jobsheet 9: CRUD Penuh, Keamanan HTTP, dan Pagination

## Pada Jobsheet 9, fokus pembelajaran melengkapi siklus manipulasi basis data relasional PostgreSQL secara menyeluruh (CRUD) pada SIMPUS-Mini, memperketat keamanan metode HTTP, menangani konfirmasi berbasis event form, serta mengoptimalkan pembacaan data melalui pagination dan pencarian sisi server:

1. **Implementasi Operasi Update (edit.php & proses_edit.php)**:
   Mempelajari mekanisme pengubahan data yang diawali dengan menangkap parameter id melalui superglobal `$_GET['id']`, mengambil data baris tunggal menggunakan klausa `WHERE id = :id` dengan method `$stmt->fetch(PDO::FETCH_ASSOC)`, menampilkan data lama ke atribut `value` input form dan opsi `<select>` berkondisi `selected`, serta menyisipkan `<input type="hidden" name="id">` agar proses eksekusi perintah SQL `UPDATE ... SET ... WHERE id = :id` via `$_POST` tepat sasaran.

2. **Operasi Destruktif Delete & Keamanan Metode HTTP (hapus.php)**:
   Memahami risiko manipulasi data melalui permintaan GET (seperti web crawler atau tautan tak sengaja) dan membatasi operasi penghapusan data agar hanya dapat dipicu via metode `POST` melalui validasi superglobal `$_SERVER['REQUEST_METHOD'] !== 'POST'`. Eksekusi penghapusan data di basis data menggunakan query `DELETE FROM ... WHERE id = :id` yang selalu wajib menyertakan klausa `WHERE` guna mencegah terhapusnya seluruh baris data.

3. **Intersepsi Event Form & Konfirmasi Hapus Sisi Klien (app.js)**:
   Mengubah tombol aksi hapus menjadi elemen `<form class="form-hapus" method="post">` mandiri dan memperbarui event handler JavaScript dari pendengar `click` menjadi pendengar event `submit` melalui teknik _event delegation_ pada `document`. Pembatalan penghapusan kini dilakukan dengan memanggil `e.preventDefault()` ketika dialog `confirm()` bernilai _false_, mencegah pengiriman form ke server sebelum data telanjur terhapus.

4. **Pagination Sisi Server Menggunakan LIMIT dan OFFSET**:
   Menghindari pemuatan data dalam jumlah besar sekaligus dengan memecah tampilan tabel menjadi beberapa halaman ($perPage = 5). Logika pagination dibangun dengan menghitung nomor halaman aktif via `$\_GET['page']`, menghitung nilai `$offset = ($page - 1) \* $perPage`, menentukan total halaman dengan fungsi `ceil()`, serta menerapkan klausa SQL `LIMIT :limit OFFSET :offset`yang diikat secara eksplisit menggunakan method`bindValue()`bertipe data`PDO::PARAM_INT` demi kepatuhan tipe PostgreSQL.

5. **Pencarian Sisi Server (ILIKE) & Integrasi Antarmuka**:
   Menerapkan fitur pencarian menyeluruh lintas halaman menggunakan form ber-`method="get"` dan query `SELECT ... WHERE judul ILIKE :kw` dengan wildcard `%` untuk pencarian _case-insensitive_. Parameter pencarian dipertahankan di URL menggunakan `urlencode()` saat navigasi halaman berpindah, serta disempurnakan tampilannya di CSS menggunakan `display: inline` pada form hapus sel tabel dan Flexbox untuk perataan navigasi.
