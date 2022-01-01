<?php
include '../connection.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$level = 'admin';

mysqli_query($connection, "insert into user values('','$nama','$username','$password','$email','$level')");

header("location:daftar-user.php");
?> 