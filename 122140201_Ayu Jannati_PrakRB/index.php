<?php
include 'koneksi.php';

$query = "SELECT * FROM posyandu";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Posyandu</title>
    <link rel="stylesheet" href="css/desain.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Data Posyandu</h1>
        <a href="tambah.php" class="btn">Tambah Data</a>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Posyandu</th>
                    <th>Alamat</th>
                    <th>Jumlah Penduduk</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['nama_posyandu']; ?></td>
                        <td><?= $row['alamat']; ?></td>
                        <td><?= $row['jumlah_penduduk']; ?></td>
                        <td>
                            <a href="edit.php?id=<?= $row['id']; ?>" class="btn-edit">Edit</a>
                            <a href="hapus.php?id=<?= $row['id']; ?>" class="btn-delete" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>