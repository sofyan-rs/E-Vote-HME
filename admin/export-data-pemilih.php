<!DOCTYPE html>
<html>
<head>
<title>Export Data Pemilih E-Vote HME</title>
</head>
<body>
<style type="text/css">
body{
	font-family: sans-serif;
}
table{
	margin: 20px auto;
	border-collapse: collapse;
}
table th,
table td{
	border: 1px solid #3c3c3c;
	padding: 3px 8px;
}
a{
	background: blue;
	color: #fff;
	padding: 8px 10px;
	text-decoration: none;
	border-radius: 2px;
}
</style>
<?php
$date = date("d-m-Y");
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data-Pemilih_".$date.".xls");
?>
<center><h2>Data Pemilih E-Vote HME</h2></center>
<table border="1">
	<tr>
		<th>No.</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Kelas</th>
		<th>Angkatan</th>
		<th>Token</th>
	</tr>
	<?php 
	include '../connection.php';
	$data = mysqli_query($connection, "select * from data_pemilih ORDER BY nim");
	$no = 0;
	while($d = mysqli_fetch_array($data)){ ?>
	<tr>
		<td><?php echo ++$no; ?>.</td>
		<td><?php echo $d['nim']; ?></td>
		<td><?php echo $d['nama_pemilih']; ?></td>
		<td><?php echo $d['kelas']; ?></td>
		<td><?php echo $d['angkatan']; ?></td>
		<td><?php echo $d['token']; ?></td>
	</tr>
	<?php }	?>
</table>
</body>
</html>