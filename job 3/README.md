# Kesimpulan Jobsheet 3: Responsive Web Design

Pada Jobsheet 3, fokus pembelajaran adalah mentransformasi halaman web statis menjadi adaptif di berbagai ukuran perangkat (desktop, tablet, dan mobile) menggunakan pendekatan **Desktop-First**:

1. **Pondasi Viewport (`<meta name="viewport">`)**:
   Menambahkan `<meta name="viewport" content="width=device-width, initial-scale=1">` pada seluruh file HTML merupakan syarat wajib responsive web design. Tanpa tag ini, browser perangkat bergerak (*mobile*) akan merender halaman pada lebar default 980px dan melakukan *zoom out*, yang membuat teks serta tata letak sulit dibaca.

2. **Menu Hamburger Murni CSS (*Checkbox Hack*)**:
   Navigasi responsif dapat dibangun tanpa JavaScript dengan memanfaatkan elemen `<input type="checkbox">` tersembunyi, `<label for="...">`, pseudo-class `:checked`, serta *general sibling combinator* (`~`). Saat label diklik, status centang checkbox berubah dan secara otomatis menampilkan menu navigasi vertikal di layar sempit.

3. **Konten Tabel Fleksibel (`.table-responsive`)**:
   Membungkus elemen `<table>` ke dalam `<div class="table-responsive">` dengan aturan CSS `overflow-x: auto` mencegah kolom tabel terkompresi secara ekstrem pada layar HP. Tabel tetap mempertahankan ukuran sel aslinya dan dapat digeser (*scroll*) secara horizontal tanpa merusak layout utama.

4. **Breakpoint & Media Query (Desktop-First)**:
   Menggunakan `@media (max-width: 768px)` untuk tablet dan `@media (max-width: 480px)` untuk mobile, tata letak grid kartu ringkasan diubah bertahap dari 3 kolom, menjadi 2 kolom, hingga 1 kolom penuh vertikal. Selain itu, input form disesuaikan menjadi `max-width: 100%`. Blok media query sengaja diletakkan di bagian paling bawah file CSS agar aturan turunan menimpa gaya dasar secara tepat berdasarkan prinsip *cascading*.