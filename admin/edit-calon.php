<?php include 'header.php'; ?>
<script src="https://cdn.tiny.cloud/1/uj1eqse59h3y36o360uyf14iy4gkbytsud9fc6zdy3okkjrn/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
tinymce.init({
    selector: '#visimisi',
    height : 300,
    plugins: 'lists',
    toolbar: 'undo redo | styleselect | bold italic | numlist bullist | alignleft aligncenter alignright | outdent indent'
    
});
tinymce.init({
    selector: '#progul',
    height : 300,
    plugins: 'lists',
    toolbar: 'undo redo | styleselect | bold italic | numlist bullist | alignleft aligncenter alignright | outdent indent'
});
</script>
<main id="main-container">
<div class="bg-body-light">
<div class="content content-full">
<div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
<h1 class="flex-sm-fill h3 my-2">Edit Calon</h1>
<nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
<ol class="breadcrumb breadcrumb-alt">
<li class="breadcrumb-item">Dashboard</li>
<li class="breadcrumb-item" aria-current="page">
<a class="link-fx" href="">Edit Calon</a>
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
$data = mysqli_query($connection,"select * from data_calon where id_calon='$id'");
while($d = mysqli_fetch_array($data)){ ?>
<form action="<?php echo $url; ?>admin/edit_calon_action.php?id=<?php echo $id; ?>" method="POST">
<div class="form-group">
<label for="nim">NIM</label>
<input type="text" class="form-control form-control-alt" id="nim" name="nim" placeholder="NIM" value="<?php echo $d['nim']; ?>" required>
</div>
<div class="form-group">
<label for="nama">Nama</label>
<input type="text" class="form-control form-control-alt" id="nama" name="nama" placeholder="Nama" value="<?php echo $d['nama_calon']; ?>" required>
</div>
<div class="form-group">
<label for="kelas">Kelas</label>
<input type="text" class="form-control form-control-alt" id="kelas" name="kelas" placeholder="Kelas" value="<?php echo $d['kelas']; ?>" required>
</div>
<div class="form-group">
<label for="visimisi">Visi Misi</label>
<textarea class="form-control form-control-alt" id="visimisi" name="visimisi" rows="4" placeholder="Visi Misi"><?php echo $d['visimisi']; ?></textarea>
</div>
<div class="form-group">
<label for="progul">Program Unggulan</label>
<textarea class="form-control form-control-alt" id="progul" name="progul" rows="4" placeholder="Program Unggulan"><?php echo $d['progul']; ?></textarea>
</div>
<div class="form-group">
<label for="foto">Link Foto</label>
<textarea class="form-control form-control-alt" id="foto" name="foto" rows="4" placeholder="Program Unggulan"><?php echo $d['foto']; ?></textarea>
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