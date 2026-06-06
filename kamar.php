<?php
include 'koneksi.php';

$data = mysqli_query($koneksi, "SELECT * FROM kamar");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Kamar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Data Kamar</h2>

<table>
    <tr>
        <th>ID Kamar</th>
        <th>Nomor Kamar</th>
        <th>Harga Sewa</th>
        <th>Status Kamar</th>
    </tr>

    <?php while($d = mysqli_fetch_array($data)){ ?>
    <tr>
        <td><?php echo $d['id_kamar']; ?></td>
        <td><?php echo $d['nomor_kamar']; ?></td>
        <td><?php echo $d['harga_sewa']; ?></td>
        <td><?php echo $d['status_kamar']; ?></td>
    </tr>
    <?php } ?>

</table>

<div class="kembali">
    <a href="index.php">Kembali ke Menu</a>
</div>

</body>
</html>