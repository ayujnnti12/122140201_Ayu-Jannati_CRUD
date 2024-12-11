<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama_posyandu'];
    $alamat = $_POST['alamat'];
    $jumlah_penduduk = $_POST['jumlah_penduduk'];

    $query = "INSERT INTO posyandu (nama_posyandu, alamat, jumlah_penduduk) VALUES ('$nama', '$alamat', '$jumlah_penduduk')";
    mysqli_query($conn, $query);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Posyandu</title>
    <link rel="stylesheet" href="css/desain.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Tambah Data Posyandu</h1>
        <form action="" method="post">
            <label>Nama Posyandu:</label>
            <input type="text" name="nama_posyandu" placeholder="Masukkan nama posyandu" required>
            <label>Alamat:</label>
            <input type="text" name="alamat" placeholder="Masukkan alamat" required>
            <label>Jumlah Penduduk (Satu Desa):</label>
            <input type="number" name="jumlah_penduduk" placeholder="Masukkan jumlah penduduk" required>
            <button type="submit" class="btn">Simpan</button>
        </form>
    </div>
</body>
</html>