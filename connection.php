<?php
// Koneksi Database
$connection = mysqli_connect("localhost","hmepolba_kpp","ucihanamikaze","hmepolba_kpp"); 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>