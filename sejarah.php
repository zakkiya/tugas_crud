<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>login</title>
 <link rel="stylesheet" type="text/css" href="sejarah.css">
</head>
<body>
   
<?php
session_start();
if($_SESSION['level']==""){
    header("location:welcome.php?pesan=gagal");

}
?>
<div class="bg">
    <br><br><br><br><br><br>
    <p><h4> sejarah awal perpustakaan Desa Padangan Kabupaten Bojonegoro adalah munculnya keinginan</h4></p>
    <p><h4> dari pemerintah desa dan remaja karang taruna untuk mengembangkan minta baca masyarakat Desa Padangan sendiri.</h4></p>
    <p><h4>selain itu untuk saling berbagi ilmu pengetahuan dan teknologi.</h4></p>
    <p class="tfoto">FOTO KEGIATAN-KEGIATAN DI PERPUSTAKAAN DESA PADANGAN
KABUPATAN BOJONEGORO</p>
    <p class="thal">>>Halaman User<<</p>
    <p class="k1">Kegiatan 1:</p>
    <p class="k2">Kegiatan 2:</p>
    <p class="k3">Kegiatan 3:</p>
    <button type="submit" class="tlogout"><a href="logout.php"><h1>LOGOUT</h1></button></a>
</body>