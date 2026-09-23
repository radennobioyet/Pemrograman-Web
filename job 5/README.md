# Kesimpulan Jobsheet 5: JavaScript DOM & Event

Pada Jobsheet 5, fokus pembelajaran berpusat pada penambahan lapisan perilaku dan interaktivitas pada halaman web menggunakan JavaScript murni sisi klien (client-side):

1. **Pengenalan JavaScript & DOM**:
   Mengenal konsep pemisahan struktur (HTML), tampilan (CSS), dan perilaku (JavaScript), serta memanfaatkan Document Object Model (DOM) untuk memilih elemen menggunakan getElementById, querySelector, dan querySelectorAll.

2. **Menu Hamburger Berbasis JavaScrip**:
   Menggantikan metode lama (checkbox hack) dengan tombol interaktif asli yang memanfaatkan classList.toggle("nav-open") dan guard clause guna memastikan keamanan serta mencegah error pada halaman yang tidak memiliki elemen tersebut.

3. **Konfirmasi Hapus Data di Tampilan**:
   Memasang event listener pada tombol hapus menggunakan metode forEach dan fungsi closest("tr") untuk mendeteksi baris tabel terkait, menampilkan dialog konfirmasi bawaan browser (confirm), serta menghapus elemen dari tampilan sementara lewat row.remove().

4. **Pencarian / Filter Tabel Real-Time**:
   Memanfaatkan event keyup pada kotak input pencarian untuk membaca nilai secara langsung, membandingkannya dengan teks baris tabel melalui properti textContent dan metode includes(), serta menyembunyikan atau menampilkan baris menggunakan style.display tanpa reload halaman.

5. **Validasi Form Sisi Klien**:
   Menangani event submit dengan mencegah aksi bawaan menggunakan e.preventDefault(), serta membuat elemen pesan error secara dinamis (document.createElement) yang diletakkan secara rapi menggunakan insertAdjacentElement.
