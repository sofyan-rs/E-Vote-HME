<?php include 'header.php'; ?>
<main id="main-container">
<div class="bg-body-light">
<div class="content content-full">
<div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
<h1 class="flex-sm-fill h3 my-2">Daftar Calon</h1>
<nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
<ol class="breadcrumb breadcrumb-alt">
<li class="breadcrumb-item">Dashboard</li>
<li class="breadcrumb-item" aria-current="page">
<a class="link-fx" href="">Daftar Calon</a>
</li>
</ol>
</nav>
</div>
</div>
</div>
<div class="content">
<a class="btn btn-primary mb-3" data-toggle="click-ripple" href="tambah-calon.php"><i class="fa fa-plus"></i> Tambah</a>
<a class="btn btn-danger mb-3" data-toggle="click-ripple" href="hapus-semua-calon.php"><i class="fa fa-fw fa-trash-alt"></i> Hapus Data Calon</a>
<div class="block">
<div class="block-content">
<div class="table-responsive">
<table class="table table-hover table-vcenter dataTable">
<thead>
<tr>
<th style="width: 30px;">No.</th>
<th>NIM</th>
<th style="width: 30%;">Nama</th>
<th>Kelas</th>
<th style="width: 40px;">Foto</th>
<th class="text-right">Action</th>
</tr>
</thead>
<tbody>
<?php 
include "../connection.php";
$query = mysqli_query($connection, "select * from data_calon ORDER BY id_calon");
$nomor = 1;
if(mysqli_num_rows($query) > 0 ){
while($data = mysqli_fetch_array($query)){
?>
<tr>
<td class="text-center"><?php echo $nomor++; ?>.</td>
<td class="font-w600 font-size-sm">
<span class="py-1"><?php echo $data['nim']; ?></span>
</td>
<td class="font-w600 font-size-sm">
<span class="py-1"><?php echo $data['nama_calon']; ?></span>
</td>
<td class="font-w600 font-size-sm">
<span class="py-1"><?php echo $data['kelas']; ?></span>
</td>
<td class="font-w600 font-size-sm">
<span class="py-1">
<?php if($data['foto'] != NULL){ ?>
<img class="img-fluid" src="<?php echo $data['foto']; ?>">
<?php } 
else { 
    echo "Tidak ada foto";
} ?>
</span>
</td>
<td class="text-right">
<a class="btn btn-sm btn-success my-1 mr-1" href="edit-calon.php?id=<?php echo $data['id_calon']; ?>"><i class="fa fa-fw fa-edit"></i></a>
<a class="btn btn-sm btn-danger mr-1" href="hapus-calon.php?id=<?php echo $data['id_calon']; ?>"><i class="fa fa-fw fa-trash-alt"></i></a>
</td>
</tr>
<?php } } else { ?>
<tr>
<td></td>
<td>Belum ada data</td>
<td></td>
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