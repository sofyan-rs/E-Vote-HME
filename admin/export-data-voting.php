<!DOCTYPE html>
<html>
<head>
<title>Export Data Hasil Pemilihan E-Vote HME</title>
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
<center><h2>Data Hasil Pemilihan E-Vote HME</h2></center>
<table border="1">
	<tr>
		<th>No.</th>
		<th>Nama</th>
		<th>Tanggal Voting</th>
		<th>Nama Calon</th>
	</tr>
	<?php 
	include '../connection.php';
	$data = mysqli_query($connection, "select * from data_voting inner join data_pemilih on data_pemilih.id_pemilih=data_voting.id_pemilih inner join data_calon on data_calon.id_calon=data_voting.id_calon");
	$no = 0;
	while($d = mysqli_fetch_array($data)){ ?>
	<tr>
		<td><?php echo ++$no; ?>.</td>
		<td><?php echo $d['nama_pemilih']; ?></td>
		<td><?php echo $d['tgl_voting']; ?></td>
		<td><?php echo $d['nama_calon']; ?></td>
	</tr>
	<?php }	?>
</table>
</body>
</html>