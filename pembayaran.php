<?php
include 'koneksi.php';

$data = mysqli_query($koneksi,"
SELECT
p.id_pembayaran,
ph.nama_penghuni,
k.nomor_kamar,
a.nama_admin,
p.tanggal_bayar,
p.jumlah_bayar
FROM pembayaran p
JOIN penghuni ph
ON p.id_penghuni = ph.id_penghuni
JOIN kamar k
ON p.id_kamar = k.id_kamar
JOIN admin a
ON p.id_admin = a.id_admin
");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pembayaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Data Pembayaran</h2>

<table>
<tr>
    <th>ID</th>
    <th>Nama Penghuni</th>
    <th>Nomor Kamar</th>
    <th>Admin</th>
    <th>Tanggal Bayar</th>
    <th>Jumlah Bayar</th>
</tr>

<?php while($d = mysqli_fetch_array($data)){ ?>
<tr>
    <td><?php echo $d['id_pembayaran']; ?></td>
    <td><?php echo $d['nama_penghuni']; ?></td>
    <td><?php echo $d['nomor_kamar']; ?></td>
    <td><?php echo $d['nama_admin']; ?></td>
    <td><?php echo $d['tanggal_bayar']; ?></td>
    <td>Rp <?php echo number_format($d['jumlah_bayar']); ?></td>
</tr>
<?php } ?>

</table>

<div class="kembali">
    <a href="index.php">Kembali ke Menu</a>
</div>

</body>
</html>