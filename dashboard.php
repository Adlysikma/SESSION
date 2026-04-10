<?php
session_start();
if (isset($_SESSION['nama'])) {
    # code...
}
else {
    header("Location: login.php");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Selamat datang <?php 
    echo $_SESSION['nama'];
    ?><br>
    <a href="logout.php">logout</a>
</body>
</html>