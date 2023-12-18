<?php 
require 'connection.php';

if(isset($_GET['nim'])){
    $nim = $_GET["nim"];
    $query = mysqli_query($conn, "SELECT * FROM mhs2 WHERE nim='".$nim."'");
    $mhs2 = mysqli_fetch_array($query);
}

if(isset($_POST["ubah"])){
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $nim = $_POST['nim'];

    $query_update = "UPDATE mhs2 SET 
    nama = '$nama', 
    jk = '$jk', 
    prodi = '$prodi', 
    alamat = '$alamat' 
    WHERE nim = '$nim'";
    $result = mysqli_query($conn, $query_update);

    if($result){
?>
        <script type="text/javascript">
            alert("Data berhasil diubah!");
            window.location.href="index.php";
        </script>
<?php
    } else {
        echo "Gagal mengubah data!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Login</title>
</head>
<body>
    <center>
        <form action="" method="post">
            <table>
                <h3>Ubah Data Pengguna</h3>
                <tr>
                    <td><input type="text" name="nim" id="nim" value="<?php echo $mhs2["nim"] ?>" readonly></td>
                </tr>
                <tr>
                    <td><input type="text" name="nama" id="nama" value="<?php echo $mhs2["nama"] ?>" autocomplete="off"></td>
                </tr>
                <tr>
                    <td><input type="text" name="jk" id="jk" value="<?php echo $mhs2["jk"] ?>" autocomplete="off"></td>
                </tr>
                <tr>
                    <td><input type="text" name="prodi" id="prodi" value="<?php echo $mhs2["prodi"] ?>" autocomplete="off"></td>
                </tr>
                <tr>
                    <td><input type="text" name="alamat" id="alamat" value="<?php echo $mhs2["alamat"] ?>" autocomplete="off"></td>
                </tr>
            </table>

            <br><br>
            <input type="submit" value="Ubah" name="ubah">
            <input type="reset" id="input" name="reset">
        </form>
        <br>
        <a href="index.php">Kembali</a>
    </center>
</body>
</html>
