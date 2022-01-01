<?php include 'header.php'; ?>
<main id="main-container">
<div class="bg-body-light">
<div class="content content-full">
<div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
<h1 class="flex-sm-fill h3 my-2">Tambah Pemilih</h1>
<nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
<ol class="breadcrumb breadcrumb-alt">
<li class="breadcrumb-item">Dashboard</li>
<li class="breadcrumb-item" aria-current="page">
<a class="link-fx" href="">Tambah Pemilih</a>
</li>
</ol>
</nav>
</div>
</div>
</div>
<div class="content">
<div class="block">
<div class="block-content">
<form action="<?php echo $url; ?>admin/tambah_pemilih_action.php" method="POST">
<div class="form-group">
<label for="nim">NIM</label>
<input type="text" class="form-control form-control-alt" id="nim" name="nim" placeholder="NIM" required>
</div>
<div class="form-group">
<label for="nama">Nama</label>
<input type="text" class="form-control form-control-alt" id="nama" name="nama" placeholder="Nama" required>
</div>
<div class="form-group">
<label for="kelas">Kelas</label>
<input type="text" class="form-control form-control-alt" id="kelas" name="kelas" placeholder="Kelas" required>
</div>
<div class="form-group">
<label for="angkatan">Angkatan</label>
<input type="text" class="form-control form-control-alt" id="angkatan" name="angkatan" placeholder="Angkatan" required>
</div>
<div class="text-right mb-3">
<button type="submit" class="btn btn-primary" data-toggle="click-ripple">Tambah</button>
<button type="reset" class="btn btn-danger" data-toggle="click-ripple">Reset</button>
</form>
</div>
</div>
</div>
</div>
</main>
<?php include 'footer.php'; ?>