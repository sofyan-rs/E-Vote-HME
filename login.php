<?php include 'function.php';  ?>
<!doctype html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Login | <?php echo $name; ?></title>
<link href="<?php echo $url; ?>assets/css/oneui.min.css" rel="stylesheet">
<script src="<?php echo $url; ?>assets/js/oneui.core.min.js"></script>
<script src="<?php echo $url; ?>assets/js/oneui.app.min.js"></script>
<meta name="Author" content="Sofyan">
<meta name="description" content="<?php echo $name; ?>"/>
</head>
<body>
<div id="page-container">
<main id="main-container">
<div class="bg-image" style="background: #ddd;">
<div class="hero-static bg-white-65">
<div class="content">
<div class="row justify-content-center">
<div class="col-md-8 col-lg-6 col-xl-6">
<div class="block block-themed shadow mb-0">
<div class="block-header">
<h3 class="block-title">Login</h3>
</div>
<div class="block-content">
<div class="p-sm-3 px-lg-4 py-lg-5">
<h1 class="mb-2"><?php echo $name; ?></h1>
<p>Selamat datang, harap login.</p>
<?php
if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
        echo'<div class="alert alert-danger alert-dismissable" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fa fa-fw fa-exclamation-circle"></i> NIM dan Token tidak sesuai</div>';
    }
    if($_GET['pesan'] == "logout"){
        echo'<div class="alert alert-success alert-dismissable" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fa fa-fw fa-exclamation-circle"></i> Anda telah berhasil logout</div>';
    }
}
?>
<form class="js-validation-signin" action="<?php echo $url; ?>login_check.php" method="POST">
<div class="py-3">
<div class="form-group">
<input type="text" class="form-control form-control-alt form-control-lg" id="login-nim" name="login-nim" placeholder="NIM">
</div>
<div class="form-group">
<input type="password" class="form-control form-control-alt form-control-lg" id="login-token" name="login-token" placeholder="Token">
</div>
</div>
<div class="form-group row">
<div class="col-md-6 col-xl-5">
<button type="submit" class="btn btn-block btn-primary" data-toggle="click-ripple">
<i class="fa fa-fw fa-sign-in-alt mr-1"></i> Login
</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="content content-full font-size-sm text-muted text-center">
<strong><?php echo $name; ?></strong> &copy; <span data-toggle="year-copy"></span>
</div>
</div>
</div>
</main>
</div>
<script src="<?php echo $url; ?>assets/js/jquery.validate.min.js"></script>
<script src="<?php echo $url; ?>assets/js/op_auth_signin.min.js"></script>
</body>