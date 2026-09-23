# Kesimpulan Jobsheet 6: Fetch API & JSON

Pada Jobsheet 6, fokus pembelajaran bergeser ke komunikasi data asinkron dan penggunaan format data terstruktur untuk mengisi tabel secara dinamis:

1. **Konsep Komunikasi Asinkron & JSON**:
   Mempelajari dasar AJAX, format penyimpanan data terstruktur JSON (objek dan array dengan aturan ketat tanda kutip dua), serta pemanfaatan fetch(), Promise, dan fungsi async/await.

2. **Rendering Data Tabel Secara Dinamis**:
   Mengosongkan elemen <tbody> statis pada file HTML dan mengisinya secara otomatis melalui perulangan data JSON (buku.json dan anggota.json) yang diterjemahkan menjadi objek JavaScript menggunakan .json().

3. **Indikator Muat (Loading Indicator) & Penanganan Error**:
   Menerapkan blok try...catch...finally untuk menangani potensi kegagalan jaringan atau kesalahan file, sekaligus mengelola visibilitas teks "Memuat data..." secara konsisten agar pengguna mendapatkan umpan balik visual yang jelas.

4. **Penerapan Event Delegation**:
   Mengatasi kendala elemen dinamis (seperti tombol hapus yang baru dimuat setelah proses fetch selesai) dengan memindahkan titik tangkap event klik dari tombol spesifik ke tingkat dokumen induk yang stabil menggunakan e.target.closest().

5. **Server Lokal & Kebijakan CORS**:
   Memahami batasan keamanan browser terhadap protokol file:// saat melakukan permintaan fetch(), sehingga aplikasi wajib dijalankan melalui server lokal (seperti Live Server, perintah PHP, atau Laragon) menggunakan protokol http://.
