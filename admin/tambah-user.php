<?php include 'header.php'; ?>
<main id="main-container">
<div class="bg-body-light">
<div class="content content-full">
<div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
<h1 class="flex-sm-fill h3 my-2">Tambah User</h1>
<nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
<ol class="breadcrumb breadcrumb-alt">
<li class="breadcrumb-item">Dashboard</li>
<li class="breadcrumb-item" aria-current="page">
<a class="link-fx" href="">Tambah User</a>
</li>
</ol>
</nav>
</div>
</div>
</div>
<div class="content">
<div class="block">
<div class="block-content">
<form action="<?php echo $url; ?>admin/tambah_user_action.php" method="POST">
<div class="form-group">
<label for="nama">Nama</label>
<input type="text" class="form-control form-control-alt" id="nama" name="nama" placeholder="Nama" required>
</div>
<div class="form-group">
<label for="username">Username</label>
<input type="text" class="form-control form-control-alt" id="username" name="username" placeholder="Username" required>
</div>
<div class="form-group">
<label for="email">Email</label>
<input type="email" class="form-control form-control-alt" id="email" name="email" placeholder="Email" required>
</div>
<div class="form-group">
<label for="password">Password</label>
<input type="password" class="form-control form-control-alt" id="password" name="password" placeholder="Password" required>
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