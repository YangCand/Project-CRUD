<?php
require 'connection.php';
if(isset($_POST['tambah'])){
	$mhs1=mysqli_query($conn, ("INSERT INTO mhs2 VALUES 
	('".$_POST['nim']."',
	'".$_POST['nama']."',
	'".$_POST['jk']."',
	'".$_POST['prodi']."',
    '".$_POST['alamat']."')"));
	
	if($mhs1){
?>
		<script type="text/javascript">
			alert("Anda Berhasil Menambahkan data!");
			window.location.href="index.php";
		</script>
<?php
	}else{
		echo"Data Yang Anda Masukan Tidak Falid!";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman</title>
</head>
<body>
<center>
<form action="tambah.php" method="POST">
            <table>
                <tr>
                    <td><input type="text" name="nim" placeholder="NIM" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="nama" placeholder="Nama Lengkap" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="jk" placeholder="Jenis Kelamin" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="prodi" placeholder="Program Studi" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="alamat" placeholder="Alamat
                    " autocomplete="off" required></td>
                </tr>
                <tr>
                <td>
                    <input type="submit" name="tambah" value="tambah">
                    <input type="reset" name="hapus"></br></br>
                </td>
                </tr>
                <tr>
                <td>
                click <a href="index.php">kembali</a> jika batal!
                </td>
                </tr>
            </table>
</form>
</center>
</body>
</html>