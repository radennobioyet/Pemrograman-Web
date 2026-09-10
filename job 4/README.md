# Kesimpulan Jobsheet 4: UI/UX Design

Pada Jobsheet 4, fokus pembelajaran berpusat pada perancangan antarmuka dan pengalaman pengguna (*UI/UX Design*) sebelum melangkah ke implementasi kode program untuk modul transaksi dan autentikasi:

1. **Pemisahan Konsep UI dan UX**:
   Memahami bahwa antarmuka (*User Interface*) berfokus pada elemen visual, tata letak, dan komponen form, sedangkan pengalaman pengguna (*User Experience*) berfokus pada kenyamanan, kemudahan alur, dan logika interaksi pengguna dalam menyelesaikan suatu tugas di dalam aplikasi.

2. **Perancangan Tata Letak dengan Wireframe**:
   Pemanfaatan wireframe berbasis teks (ASCII art) pada `wireframe.md` memudahkan visualisasi struktur halaman baru (Login, Dashboard Petugas, Form Transaksi) tanpa terdistraksi detail estetika visual. Hal ini mempercepat iterasi perancangan sebelum masuk ke tahap penulisan kode HTML/CSS.

3. **Pemetaan Alur Operasional Melalui User Flow**:
   User flow pada modul peminjaman dan pengembalian buku mendokumentasikan langkah demi langkah interaksi pengguna sekaligus menetapkan aturan bisnis (*business rules*) sejak awal—seperti validasi stok buku (`stok > 0`), pengurangan stok otomatis saat peminjaman, dan penambahan stok saat buku dikembalikan.

4. **Identifikasi Aktor & Kebutuhan Otorisasi**:
   Sistem membedakan peran antara dua aktor utama, yaitu **Tamu** (hanya melihat katalog umum tanpa login) dan **Petugas** (memerlukan autentikasi untuk mengelola data CRUD dan transaksi). Identifikasi ini menjadi acuan batas otorisasi halaman sebelum logika backend diimplementasikan.

5. **Konsistensi & Penggunaan Ulang Komponen (*Reusability*)**:
   Rancangan fitur baru tetap memanfaatkan fondasi styling dari `style.css` yang telah dibangun sebelumnya (palet warna `#1d5b8a`, kartu statistik CSS Grid, Flexbox navbar, dan form control), sehingga pengembangan modul lanjutan tidak memerlukan pembuatan aturan CSS baru dari nol.