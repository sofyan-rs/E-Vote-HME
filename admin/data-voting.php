<?php include 'header.php'; ?>
<main id="main-container">
<div class="bg-body-light">
<div class="content content-full">
<div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
<h1 class="flex-sm-fill h3 my-2">Data Voting</h1>
<nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
<ol class="breadcrumb breadcrumb-alt">
<li class="breadcrumb-item">Dashboard</li>
<li class="breadcrumb-item" aria-current="page">
<a class="link-fx" href="">Data Voting</a>
</li>
</ol>
</nav>
</div>
</div>
</div>
<div class="content">
<a class="btn btn-info mb-3" data-toggle="click-ripple" href="export-data-voting.php"><i class="fa fa-arrow-alt-circle-down"></i> Export Excel</a>
<a class="btn btn-danger mb-3" data-toggle="click-ripple" href="hapus-semua-voting.php"><i class="fa fa-fw fa-trash-alt"></i> Hapus Data Voting</a>
<div class="block">
<div class="block-content">
<div class="table-responsive">
<table class="table table-hover table-vcenter dataTable">
<thead>
<tr>
<th style="width: 30px;">No.</th>
<th style="width: 30%;">Nama</th>
<th>Tanggal Voting</th>
<th>Nama Calon</th>
<th class="text-right">Action</th>
</tr>
</thead>
<tbody>
<?php 
include "../connection.php";
$query = mysqli_query($connection, "select * from data_voting inner join data_pemilih on data_pemilih.id_pemilih=data_voting.id_pemilih inner join data_calon on data_calon.id_calon=data_voting.id_calon");
$nomor = 1;
if(mysqli_num_rows($query) > 0 ){
while($data = mysqli_fetch_array($query)){
?>
<tr>
<td class="text-center"><?php echo $nomor++; ?>.</td>
<td class="font-w600 font-size-sm">
<span class="py-1"><?php echo $data['nama_pemilih']; ?></span>
</td>
<td class="font-w600 font-size-sm">
<span class="py-1"><?php echo $data['tgl_voting']; ?></span>
</td>
<td class="font-w600 font-size-sm">
<span class="py-1"><?php echo $data['nama_calon']; ?></span>
</td>
<td class="text-right">
<a class="btn btn-sm btn-danger mr-1" href="hapus-voting.php?id=<?php echo $data['id_voting']; ?>&id_pemilih=<?php echo $data['id_pemilih']; ?>"><i class="fa fa-fw fa-trash-alt"></i></a>
</td>
</tr>
<?php } } else { ?>
<tr>
<td></td>
<td>Belum ada data</td>
<td></td>
<td></td>
<td></td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</main>
<script type="text/javascript">
	$(document).ready(function(){
		$('.dataTable').DataTable();
	});
</script>
<style>
.dataTables_wrapper {
    padding: 5px;
    margin-bottom:15px;
}
</style>
<?php include 'footer.php'; ?>