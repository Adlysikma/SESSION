<?php
session_start();
$koneksi = mysqli_connect("localhost","root","","session");
$nama = $_POST['nama'];
$username = $_POST['username'];

$user = mysqli_query($koneksi, "SELECT * FROM user WHERE nama='$nama'");
$cek = mysqli_num_rows($user);

if ($cek == 0) {
    header ("location: login.php");
}
else{
session_start();
$_SESSION['nama'] = $nama;
$_SESSION['username'] = $username;

header("location: dashboard.php");
}