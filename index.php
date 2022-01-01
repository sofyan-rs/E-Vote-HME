<?php include 'header.php'; ?>
<main id="main-container">
<div class="bg-image overflow-hidden" style="background-image: url('<?php echo $url; ?>assets/img/photo29@2x.jpg');">
<div class="bg-primary-dark-op">
<div class="content content-narrow content-full">
<div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center mt-5 mb-2 text-center text-sm-left">
<div class="flex-sm-fill">
<h1 class="font-w600 text-white mb-0 invisible" data-toggle="appear">Home</h1>
<h2 class="h4 font-w400 text-white-75 mb-0 invisible" data-toggle="appear" data-timeout="250">Selamat Datang <?php echo $_SESSION['nama_pemilih']; ?></h2>
</div>
</div>
</div>
</div>
</div>
<div class="content content-narrow">
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
<h4>VISI MISI</h4>
<div class="blokz">
<?php echo $data['visimisi']; ?>
</div>
</div>
<div class="tab-pane" id="progul-<?php echo $data['id_calon']; ?>" role="tabpanel">
<h4>PROGRAM UNGGULAN</h4>
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
<h4>Belum ada Calon</h4>
</div>
</div>
</div>
<?php } ?>
</div>
<div class="block">
<div class="block-content text-center">
<?php 
$id_pemilih = $_SESSION['id_pemilih'];
$query = mysqli_query($connection, "select * from data_pemilih where id_pemilih='$id_pemilih'");
if(mysqli_num_rows($query) > 0 ){
while($data = mysqli_fetch_array($query)){
if($data['status'] == 'Belum'){ ?>
<a class="btn btn-primary mb-3" data-toggle="click-ripple" href="<?php echo $url; ?>voting.php"><i class="fa fa-check"></i> Voting</a>
<?php } else { ?>
<h4>Terima Kasih, Anda Sudah Memilih</h4>
<?php } } } ?>
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