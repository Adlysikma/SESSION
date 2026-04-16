<?php
session_start();
$koneksi = mysqli_connect("localhost","root","","session");
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];


$user = mysqli_query($koneksi, "SELECT * FROM `user` WHERE `nama` = '$nama' AND `password` = '$password' ");
$usercek = mysqli_num_rows($user);

if ($usercek == 0) {
    header ("location: login.php");
}
else{

$_SESSION['nama'] = $nama;
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;

header("location: dashboard.php");
}