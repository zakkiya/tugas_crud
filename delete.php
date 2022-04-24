<?php 
include "koneksi.php";

$id = $_GET['id'];
$sql = "DELETE FROM rekap WHERE nopengunjung=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil) {
    echo "Delete Data Gagal";
}else {
    echo "Data Menu Berhasil Dihapus <br>";
    echo "<a href='home.php'>Show Data</a>";
}
?>