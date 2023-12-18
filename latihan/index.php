<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Index</title>

<?php
require 'connection.php';
$mahasiswa = mysqli_query($conn,"select * from mhs2");
?>

</head>
<body>
<center>
<h1>Data Mahasiswa</h1>
<table style="text-align:left ;border:1px solid;border-collapse: collapse;">
        <tr>
            <th style="border:1px solid; padding:10px; text-align:center">Nim</th>
            <th style="border:1px solid; padding:10px; text-align:center">Nama</th>
            <th style="border:1px solid; padding:10px; text-align:center">Jenis Kelamin</th>
            <th style="border:1px solid; padding:10px; text-align:center">Prodi</th>
            <th style="border:1px solid; padding:10px; text-align:center">Alamat</th>
            <th style="border:1px solid; padding:10px; text-align:center">Opsi</th>
        </tr>
<?php
    foreach ($mahasiswa as $mhs) {
?>
      <tr>
        <td style="border:1px solid; padding:10px; text-align:center"><?= $mhs['nim'] ?></td>
        <td style="border:1px solid; padding:10px; text-align:center"><?= $mhs['nama'] ?></td>
        <td style="border:1px solid; padding:10px; text-align:center"><?= $mhs['jk'] ?></td>
        <td style="border:1px solid; padding:10px; text-align:center"><?= $mhs['prodi'] ?></td>
        <td style="border:1px solid; padding:10px; text-align:center"><?= $mhs['alamat'] ?></td>
        <td style="border:1px solid; padding:10px; text-align:center"> 
        <a href="ubah.php?nim=<?= $mhs['nim']; ?>">Ubah</a> ||
        <a href="hapus.php?nim=<?= $mhs['nim']; ?>" onclick="return confirm('Yakin?');">Hapus</a>
        </td>
      </tr>
    <?php }?>
</tabel>
    click <a href="tambah.php">Tambah</a> jika ingin menambah data!</br>
</center>
</body>
</html>