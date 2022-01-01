<?php
session_start();
include "../connection.php";

$username = $_POST['login-username'];
$password = $_POST['login-password'];

$login = mysqli_query($connection, "select * from user where username='$username' and password='$password'");
$check = mysqli_num_rows($login);

if($check>0){
    $data = mysqli_fetch_assoc($login);
    if($data['level'] == "super-admin"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "super-admin";
        $_SESSION['name'] = $data['nama_user'];
        $_SESSION['id'] = $data['id_user'];
        $_SESSION['status'] = "login";
        header("location:index.php");
    }
    else if($data['level'] == "admin"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        $_SESSION['name'] = $data['nama_user'];
        $_SESSION['id'] = $data['id_user'];
        $_SESSION['status'] = "login";
        header("location:index.php");
    }
    else {
        header("location:login.php/?pesan=gagal");
    }
}
else {
    header("location:login.php/?pesan=gagal");
}
?>