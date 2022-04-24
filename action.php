<?php 
include "koneksi.php";

$nama = $_POST['nama'];
$umur = $_POST['umur'];
$alamat = $_POST['alamat'];
$tglmasuk = $_POST['tglmasuk'];

$sql = "INSERT INTO rekap VALUES (null, '$nama', '$umur', '$alamat', '$tglmasuk')";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil) {
    echo "Eksekusi tambah menu gagal";
} else {
    echo "Eksekusi tambah menu berhasil <br>";
    echo "<a href='home.php'>Show data</a>";
}
?>