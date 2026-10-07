<?php
session_start();

$nama = trim($_POST['nama'] ?? '');
$noAnggota = trim($_POST['no_anggota'] ?? '');
$alamat = trim($_POST['alamat'] ?? '');
$noHp = trim($_POST['no_hp'] ?? '');

$errors = [];
if ($nama === '') {
    $errors[] = "Nama wajib diisi.";
}
if ($noAnggota === '') {
    $errors[] = "No. Anggota wajib diisi.";
}

if (!empty($errors)) {
    $_SESSION['flash'] = ['type' => 'error', 'pesan' => implode(' ', $errors)];
    header('Location: tambah.php');
    exit;
}

if (!isset($_SESSION['anggota'])) {
    $_SESSION['anggota'] = [];
}

$_SESSION['anggota'][] = [
    'nama' => $nama,
    'no_anggota' => $noAnggota,
    'alamat' => $alamat,
    'no_hp' => $noHp,
];

// Validasi Alamat (Wajib Isi)
if ($alamat === '') {
    $errors[] = "Alamat wajib diisi.";
}

// Validasi Nomor HP (Opsional, Angka, Batas Digit)
if ($noHp !== '') {
    if (!is_numeric($noHp)) {
        $errors[] = "Nomor telepon hanya boleh berisi angka.";
    } elseif (strlen($noHp) < 10 || strlen($noHp) > 14) {
        $errors[] = "Nomor telepon harus memiliki panjang 10 hingga 14 digit.";
    }
}

$_SESSION['flash'] = ['type' => 'success', 'pesan' => 'Anggota berhasil ditambahkan.'];
header('Location: list.php');
exit;