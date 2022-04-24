<?php
include "koneksi.php";

$id = $_POST['nopengunjung'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$alamat = $_POST['alamat'];
$tglmasuk = $_POST['tglmasuk'];

$sql = "UPDATE rekap SET nama='$nama', umur='$umur', alamat='$alamat',  tglmasuk='$tglmasuk' WHERE nopengunjung = $id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil) {
    echo "Eksekusi Update data menu gagal";
} else {
    echo "Eksekusi Update data menu berhasil <br>";
    echo "<a href='home.php'> Show data</a>";
}
?>