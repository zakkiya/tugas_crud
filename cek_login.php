<?php
session_start(); //mengaktifkan session pada php
include 'koneksi.php'; //menghubungkan php denga koneksi
$username=$_POST['username']; //menangkap data yang dikirim dari from login
$password=$_POST['password'];
$login=mysqli_query($koneksi,"select*from user where username='$username' and password='$password'");
$cek=mysqli_num_rows($login);
if($cek>0){
    $data=mysqli_fetch_assoc($login);
    if($data['level']=="admin"){
        $_SESSION['username']=$username;
        $_SESSION['level']="admin";
        header("location:home.php");

    }else if($data['level']=="user"){
        $_SESSION['username']=$username;
        $_SESSION['level']="user";
        header("location:sejarah.php");
}else{
    header("location:home.php?pesan=gagal");
}
}else{
    header("location:home.php?pesan=gagal");
}
?>