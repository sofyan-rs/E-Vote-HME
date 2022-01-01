<?php include 'header.php'; ?>
<main id="main-container">
<div class="bg-body-light">
<div class="content content-full">
<div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
<h1 class="flex-sm-fill h3 my-2">Edit Pemilih</h1>
<nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
<ol class="breadcrumb breadcrumb-alt">
<li class="breadcrumb-item">Dashboard</li>
<li class="breadcrumb-item" aria-current="page">
<a class="link-fx" href="">Edit Pemilih</a>
</li>
</ol>
</nav>
</div>
</div>
</div>
<div class="content">
<div class="block">
<div class="block-content">
<?php
include '../connection.php';
$id = $_GET['id'];
$data = mysqli_query($connection,"select * from data_pemilih where id_pemilih='$id'");
while($d = mysqli_fetch_array($data)){ ?>
<form action="<?php echo $url; ?>admin/edit_pemilih_action.php?id=<?php echo $id; ?>" method="POST">
<div class="form-group">
<label for="nim">NIM</label>
<input type="text" class="form-control form-control-alt" id="nim" name="nim" placeholder="NIM" value="<?php echo $d['nim']; ?>" required>
</div>
<div class="form-group">
<label for="nama">Nama</label>
<input type="text" class="form-control form-control-alt" id="nama" name="nama" placeholder="Nama" value="<?php echo $d['nama_pemilih']; ?>" required>
</div>
<div class="form-group">
<label for="kelas">Kelas</label>
<input type="text" class="form-control form-control-alt" id="kelas" name="kelas" placeholder="Kelas" value="<?php echo $d['kelas']; ?>" required>
</div>
<div class="form-group">
<label for="angkatan">Angkatan</label>
<input type="text" class="form-control form-control-alt" id="angkatan" name="angkatan" placeholder="Angkatan" value="<?php echo $d['angkatan']; ?>" required>
</div>
<div class="text-right mb-3">
<button type="submit" class="btn btn-primary" data-toggle="click-ripple">Update</button>
<button type="reset" class="btn btn-danger" data-toggle="click-ripple">Reset</button>
</form>
<?php } ?>
</div>
</div>
</div>
</div>
</main>
<?php include 'footer.php'; ?>