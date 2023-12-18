<?php 
require 'connection.php';
$nim = $_GET["nim"];
$sql = "DELETE FROM mhs2 WHERE nim = '".$nim."'";
$query = mysqli_query ($conn, $sql);
if($query) {
    ?>
    <script type="text/javascript">
        alert("Anda Berhasil Menghapus data!");
        window.location.href="index.php";
    </script>
<?php
} else {
    echo" Anda Gagal Mendaftar!";
}
?>