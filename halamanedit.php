<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>edit</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="edit.css">
</head>
<body>
<div class="w-50 mx-auto mt-5">
<?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM rekap WHERE nopengunjung = $id ";
    $hasil = mysqli_query($koneksi, $sql);

    if (!$hasil) {
        echo "query salah";
    }
    ?>

    <div class="desktop3"> 
        <div class="bgedit"> 
            <p class="tfromedit">FROM EDIT REKAP PENGUNJUNGPERPUSTAKAAN DESA PADANGAN KABUPATEN BOJONEGORO</p>
            <p class="t"></p>
        
    <?php
    while ($row = mysqli_fetch_array($hasil)) 
    {
    ?>
    <p class="posisi">
    <form  method="post" action="update.php" class=" border p-3 mt-3">
            <input type="hidden" name="nopengunjung" value="<?php echo $row['nopengunjung'] ?>">
            <label>Nama:</label>
            <input type="text" name="nama" value="<?php echo $row['nama'] ?>"class="form-control"><br>
            <label>Umur:</label>
            <input type="text" name="umur" value="<?php echo $row['umur'] ?>"class="form-control"><br>
            <label>Alamat:</label>
            <input type="text" name="alamat" value="<?php echo $row['alamat'] ?>"class="form-control"><br>
            <label>Tglmasuk:</label>
            <input type="text" name="tglmasuk" value="<?php echo $row['tglmasuk'] ?>"class="form-control"><br>
            <button type="submit" class="btn btn-info">Update</button>
   
    </form></p></div>

 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->-

<?php }

?>
</body>
</html>