<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>home</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
    <?php
    session_start();
    if($_SESSION['level']==""){
        header("location:welcome.php?pesan=gagal");
    }
    ?>
    <div class="desktop2">
        <button type="submit" class="klogout"><a href="logout.php"><h5>LOGOUT</h5></button></a>
        </p>
        <p class="trekap" >REKAP PENGUNJUNG PERPUSTAKAAN DESA PADANGAN KABUPATEN BOJONEGORO</p>
        <button type="submit" class="ktambah"><a href="halamantambah.php"><h5>TAMBAH REKAP</h5></button></a>
        <br><br><br><br><br><br><br><br><br>
        <table class="table table-bordered border-primary">
        <!-- <table class="table" widht="80%" stlye="text-align:center;"> -->
        <tr style="text-align :center">
            <td><b>NO Pengunjung</b></td>
            <td><b>Nama Pengunjung</b></td>
            <td><b>Umur (tahun)</b></td>
            <td><b>Alamat</b></td>
            <td><b>Tgl masuk</b></td>
            <td><b>Aksi</b></td>
</tr>
</div>
<?php
include "koneksi.php";
$sql = "SELECT * FROM rekap";
$hasil = mysqli_query($koneksi, $sql);
while ($row = mysqli_fetch_array($hasil)) {
    ?>
     <tr style="text-align: center;">
                <td><?= $row['nopengunjung']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['umur']; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td><?= $row['tglmasuk']; ?></td>
                <td><button type="submit" class="btn btn-dark"><a href="halamanedit.php?id=<?= $row['nopengunjung'] ?>"> Edit </button></a>|| <button type="submit" class="btn btn-info"><a href="delete.php?id=<?= $row['nopengunjung'] ?>"> Delete</button></a></td>
            </tr>
        <?php }
        ?>
        <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


      
   

</table>
</body>
</html>