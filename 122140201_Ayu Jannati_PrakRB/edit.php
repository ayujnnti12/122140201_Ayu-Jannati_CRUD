<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM posyandu WHERE id = $id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama_posyandu'];
    $alamat = $_POST['alamat'];
    $jumlah_penduduk = $_POST['jumlah_penduduk'];

    $query = "UPDATE posyandu SET nama_posyandu = '$nama', alamat = '$alamat', jumlah_penduduk = '$jumlah_penduduk' WHERE id = $id";
    mysqli_query($conn, $query);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Posyandu</title>
    <link rel="stylesheet" href="css/desain.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Edit Data Posyandu</h1>
        <form action="" method="post">
            <label>Nama Posyandu:</label>
            <input type="text" name="nama_posyandu" value="<?= $data['nama_posyandu']; ?>" required>
            <label>Alamat:</label>
            <input type="text" name="alamat" value="<?= $data['alamat']; ?>" required>
            <label>Jumlah Penduduk (Satu Desa):</label>
            <input type="number" name="jumlah_penduduk" value="<?= $data['jumlah_penduduk']; ?>" required>
            <button type="submit" class="btn">Update</button>
        </form>
    </div>
</body>
</html>