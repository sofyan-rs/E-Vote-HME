<?php
include '../connection.php';

// menghapus data dari database
mysqli_query($connection, "delete from data_voting");

header("location:data-voting.php");
?>