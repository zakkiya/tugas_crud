<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>login</title>
 <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
            echo"<div class='alert'> Username dan Password tidak sesuai!</div>";
        }
    }
?>
    <div class="desktop1"></div>
    <p class="copy">Copyright © 2022pespustakaandesapadangan.com. All Rights Reserved</p>
    <p class="fotoperpus">
        <img src="fotoperpus.jpg"></p>
    <p class="bgmenu"></p>
    <p class="tmenulogin">MENU LOGIN PESPUSTAKAAN DESA PADANGAN KABUPATEN BOJONEGORO</p>
    <p class="tuser">username :</p>
    <form action="cek_login.php" method="post">
    <input type="text" name="username" style="position: absolute; width: 188px; height: 27px; left: 984px; top: 560px; 
    background: #F7F8FB;" placeholder="Username .." required="required">
    <input typ="text" name="password" style="position: absolute; width: 188px; height: 27px; left: 984px; top: 645px; 
    background: #F7EDED;" placeholder="Password .." required="required">
    <p class="tpws">password :</p>
    <input type="submit" class="tlog" value="SUBMIT"></p>

</body>
</html>