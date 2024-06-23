<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $nim = $_POST['nim'];
    $department = $_POST['department'];
    $address = $_POST['address'];
    $birthDate = $_POST['birthDate'];

    // Konfigurasi email
    $to = 'zirmanvictoy@gmail.com'; // Ganti dengan alamat email Anda
    $subject = 'Pendaftaran Asrama Putra';
    $message = "Nama: $name\nNIM: $nim\nJurusan: $department\nAlamat: $address\nTanggal Lahir: $birthDate";
    $headers = "From: zirmanvictory@gmail.com"; // Ganti dengan alamat email Anda atau sesuaikan sesuai kebutuhan

    // Kirim email
    $sent = mail($to, $subject, $message, $headers);

    if ($sent) {
        echo 'Data pendaftaran berhasil dikirim.';
    } else {
        echo 'Terjadi kesalahan saat mengirim data pendaftaran.';
    }
} else {
    echo 'Metode permintaan tidak valid.';
}
?>