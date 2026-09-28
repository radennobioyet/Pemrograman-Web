# Kesimpulan Jobsheet 7: PHP Dasar & Form Handling

## Pada Jobsheet 7, fokus pembelajaran bergeser dari aplikasi web statis yang berjalan di browser (client-side) menjadi aplikasi yang memiliki server sungguhan di baliknya menggunakan bahasa pemrograman PHP untuk mengolah data, memvalidasi form, dan merender halaman secara dinamis di sisi server:

1. **Konsep Dasar PHP & Eksekusi Server-Side**:
   Mempelajari perbedaan mendasar antara eksekusi server-side (PHP) dan client-side (HTML/JS), penggunaan tag <?php ?>, variabel yang diawali tanda dolar ($), perintah echo, variabel superglobal ($\_SESSION, $\_POST), operator null coalescing (??), serta menjalankan server lokal menggunakan perintah php -S

2. **Modularisasi Kode dengan Include & Path Relatif Otomatis**:
   Menerapkan includes/header.php dan includes/footer.php untuk menghindari duplikasi struktur HTML, serta menghitung path relatif secara otomatis ($base) menggunakan dirname() dan $\_SERVER['SCRIPT_FILENAME'] agar file tetap dapat diakses dengan benar dari kedalaman folder yang berbeda.

3. **Manajemen Session & Alur Data Antar Halaman**:
   Memahami protokol HTTP yang bersifat stateless serta pemanfaatan session_start() dan variabel $\_SESSION sebagai "keranjang" penyimpanan data sementara untuk buku, anggota, dan pesan status antar permintaan halaman.

4. **Form Handling & Validasi Sisi Server**:
   Memproses pengiriman data form menggunakan metode POST, membaca input via $\_POST, melakukan validasi data di server menggunakan fungsi seperti is_numeric() dan pengecekan rentang nilai, menerapkan type casting (int), serta menggunakan header('Location: ...') disertai exit untuk redirect yang aman.

5. **Rendering Server-Side & Flash Message**:
   Menggantikan pendekatan fetch/JSON sisi klien dengan perenderan tabel secara langsung di server menggunakan perulangan foreach PHP pada data $\_SESSION, serta mengelola pesan sukses/gagal (flash message) agar hanya tampil sekali dan langsung dihapus menggunakan fungsi unset().
