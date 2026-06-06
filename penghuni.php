<?php
include 'koneksi.php';

$data = mysqli_query($koneksi, "SELECT * FROM penghuni");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Penghuni</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Data Penghuni</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Nama Penghuni</th>
        <th>Jenis Kelamin</th>
        <th>No HP</th>
    </tr>

    <?php while($d = mysqli_fetch_array($data)){ ?>
    <tr>
        <td><?php echo $d['id_penghuni']; ?></td>
        <td><?php echo $d['nama_penghuni']; ?></td>
        <td><?php echo $d['jenis_kelamin']; ?></td>
        <td><?php echo $d['no_hp']; ?></td>
    </tr>
    <?php } ?>

</table>

<div class="kembali">
    <a href="index.php">Kembali ke Menu</a>
</div>

</body>
</html>