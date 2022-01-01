<?php include 'header.php'; ?>
<main id="main-container">
<div class="bg-body-light">
<div class="content content-full">
<div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
<h1 class="flex-sm-fill h3 my-2">Daftar User</h1>
<nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
<ol class="breadcrumb breadcrumb-alt">
<li class="breadcrumb-item">Dashboard</li>
<li class="breadcrumb-item" aria-current="page">
<a class="link-fx" href="">Daftar User</a>
</li>
</ol>
</nav>
</div>
</div>
</div>
<div class="content">
<?php if($_SESSION['level'] == "super-admin"){?>
<a class="btn btn-primary mb-3" data-toggle="click-ripple" href="tambah-user.php"><i class="fa fa-plus"></i> Tambah</a>
<?php } ?>
<div class="block">
<div class="block-content">
<div class="table-responsive">
<table class="table table-hover table-vcenter dataTable">
<thead>
<tr>
<th style="width: 30px;">No.</th>
<th style="width: 30%;">Username</th>
<th>Email</th>
<th>Level</th>
<th class="text-right">Action</th>
</tr>
</thead>
<tbody>
<?php 
include "../connection.php";
$query = mysqli_query($connection, "select * from user");
$nomor = 1;
if(mysqli_num_rows($query) > 0 ){
while($data = mysqli_fetch_array($query)){
?>
<tr>
<td class="text-center"><?php echo $nomor++; ?>.</td>
<td class="font-w600 font-size-sm">
<span class="py-1"><?php echo $data['username']; ?></span>
</td>
<td><em class="font-size-sm text-muted"><?php echo $data['email']; ?></td>
<td class="font-w600">
<span class="badge <?php if($data['level'] == "super-admin"){ echo "badge-danger"; } else {echo "badge-warning";}?>"><?php echo $data['level']; ?></span>
</td>
<td class="text-right">
<?php if($data['level'] != "super-admin"){
if($_SESSION['id'] != $data['id_user']){?>
<a class="btn btn-sm btn-success my-1 mr-1" href="edit-user.php?id=<?php echo $data['id_user']; ?>"><i class="fa fa-fw fa-edit"></i></a>
<a class="btn btn-sm btn-danger mr-1" href="hapus-user.php?id=<?php echo $data['id_user']; ?>"><i class="fa fa-fw fa-trash-alt"></i></a>
<?php } } ?>
</td>
</tr>
<?php } } else { ?>
<tr>
<td></td>
<td>Belum ada data</td>
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