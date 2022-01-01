<?php include 'header.php'; ?>
<?php 
if($_SESSION['statusz'] != "Belum"){
    header("location:".$url."index.php");
}
?>
<main id="main-container">
<div class="bg-body-light">
<div class="content content-full">
<div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
<h1 class="flex-sm-fill h3 my-2">Voting</h1>
<nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
<ol class="breadcrumb breadcrumb-alt">
<li class="breadcrumb-item">Home</li>
<li class="breadcrumb-item" aria-current="page">
<a class="link-fx" href="">Voting</a>
</li>
</ol>
</nav>
</div>
</div>
</div>
<div class="content">
<div class="row">
<?php 
include "connection.php";
$query = mysqli_query($connection, "select * from data_calon ORDER BY id_calon");
$nomor = 1;
if(mysqli_num_rows($query) > 0 ){
while($data = mysqli_fetch_array($query)){
?>
<div class="col-lg-6">
<div class="block block-rounded">
<ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
<li class="nav-item">
<a class="nav-link active" href="#profil-<?php echo $data['id_calon']; ?>">Profil</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#visimisi-<?php echo $data['id_calon']; ?>">Visi Misi</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#progul-<?php echo $data['id_calon']; ?>">Program Unggulan</a>
</li>
</ul>
<div class="block-content tab-content">
<div class="tab-pane active" id="profil-<?php echo $data['id_calon']; ?>" role="tabpanel">
<div class="info text-center">
<?php if($data['foto'] != NULL){ ?>
<img class="img-calon p-3" src="<?php echo $data['foto']; ?>">
<?php } 
else { 
    echo "Tidak ada foto";
} ?>
<h3><?php echo $data['nama_calon']; ?></h3>
<span class="nim"><?php echo $data['nim']; ?> / <?php echo $data['kelas']; ?></span>
</div>
</div>
<div class="tab-pane" id="visimisi-<?php echo $data['id_calon']; ?>" role="tabpanel">
<h4>Visi Misi</h4>
<div class="blokz">
<?php echo $data['visimisi']; ?>
</div>
</div>
<div class="tab-pane" id="progul-<?php echo $data['id_calon']; ?>" role="tabpanel">
<h4>Program Unggulan</h4>
<div class="blokz">
<?php echo $data['progul']; ?>
</div>
</div>
</div>
</div>
</div>
<?php } } else { ?>
<div class="col-lg-12">
<div class="block">
<div class="block-content text-center">
<h4>Tidak ada Calon</h4>
</div>
</div>
</div>
<?php } ?>
</div>
<div class="block">
<div class="block-content">
<form action="<?php echo $url; ?>voting_action.php" method="POST">
<div class="form-group">
<label for="calon">Pilih Calon</label>
<select class="form-control form-control-alt" id="voting" name="voting" required>
<?php 
include "connection.php";
$query = mysqli_query($connection, "select * from data_calon ORDER BY id_calon");
$nomor = 1;
if(mysqli_num_rows($query) > 0 ){
while($data = mysqli_fetch_array($query)){
?>
<option value="<?php echo $data['id_calon']; ?>"><?php echo $data['nama_calon']; ?></option>
<?php } } else { ?>
<option value="-">Belum ada Calon</option>
<?php } ?>
</select>
</div>
<div class="text-center mb-3">
<button type="submit" class="btn btn-primary" data-toggle="click-ripple"><i class="fa fa-check"></i> Voting</button>
</form>
</div>
</div>
</div>
</div>
</main>
<style>
.info h3{margin-bottom:15px}
.info .nim{padding:5px 10px;background:#d26a5c;font-weight:600;color:#fff;border-radius:5px;margin-bottom:25px;display:inline-block}
.blokz{background:#f9f9f9;margin-bottom:20px;padding:15px;border-radius:5px;text-align:justify}
.blokz b{display:block;text-align:center;text-transform:uppercase;font-size:20px;padding:4px}
.blokz ol{margin:0;padding-left:18px}
.img-calon{width:200px;height:auto}
</style>
<?php include 'footer.php'; ?>