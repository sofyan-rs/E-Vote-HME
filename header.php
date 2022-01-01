<!doctype html>
<html lang="en">
<head>
<?php 
include 'function.php'; 
session_start();
if($_SESSION['status2'] != "login"){
    header("location:".$url."login.php");
}
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $name; ?></title>
<link href="<?php echo $url; ?>assets/css/oneui.min.css" rel="stylesheet">
<link href="<?php echo $url; ?>assets/css/bootstrap-datepicker.min.css" rel="stylesheet">
<script src="<?php echo $url; ?>assets/js/oneui.core.min.js"></script>
<script src="<?php echo $url; ?>assets/js/oneui.app.min.js"></script>
<script src="<?php echo $url; ?>assets/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo $url; ?>assets/js/Chart.bundle.min.js"></script>
<link rel="stylesheet" href="<?php echo $url; ?>assets/js/datatables/dataTables.bootstrap4.css">
<link rel="stylesheet" href="<?php echo $url; ?>assets/js/datatables/buttons-bs4/buttons.bootstrap4.min.css">
<meta name="Author" content="Sofyan">
<meta name="description" content="<?php echo $name; ?>"/>
<link rel="shortcut icon" href="<?php echo $url; ?>hme-icon.ico" type="image/x-icon">
</head>
<body>
<div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed page-header-dark">
<nav id="sidebar" aria-label="Main Navigation">
<div class="content-header bg-white-5">
<a class="font-w600 text-dual" href="<?php echo $url; ?>">
<i class="si si-energy text-primary"></i>
<span class="smini-hide">
<span class="font-w700 font-size-h5"><?php echo $name; ?></span>
</span>
</a>
<a class="d-lg-none text-dual ml-3" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)"><i class="fa fa-times"></i></a>
</div>
<div class="content-side content-side-full">
<ul class="nav-main">
<li class="nav-main-item">
<a class="nav-main-link" href="<?php echo $url; ?>index.php">
<i class="nav-main-link-icon si si-home"></i>
<span class="nav-main-link-name">Home</span>
</a>
</li>
<?php 
include "connection.php";
$id_pemilih = $_SESSION['id_pemilih'];
$query = mysqli_query($connection, "select * from data_pemilih where id_pemilih='$id_pemilih'");
if(mysqli_num_rows($query) > 0 ){
while($data = mysqli_fetch_array($query)){
if($data['status'] == 'Belum'){ ?>
<li class="nav-main-item">
<a class="nav-main-link" href="<?php echo $url; ?>voting.php">
<i class="nav-main-link-icon si si-action-redo"></i>
<span class="nav-main-link-name">Voting</span>
</a>
</li>
<?php } } } ?>
</ul>
</div>
</nav>
<header id="page-header">
<div class="content-header">
<div class="d-flex align-items-center">
<button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="layout"
data-action="sidebar_toggle">
<i class="fa fa-fw fa-bars"></i>
</button>
<button type="button" class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block" data-toggle="layout"
data-action="sidebar_mini_toggle">
<i class="fa fa-fw fa-ellipsis-v"></i>
</button>
</div>
<div class="d-flex align-items-center">
<div class="dropdown d-inline-block ml-2">
<button type="button" class="btn btn-sm btn-dual" id="page-header-user-dropdown"
data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<img class="rounded"
src="<?php echo $url; ?>assets/img/avatar10.jpg"
alt="Avatar" style="width: 21px;">
<span class="d-inline-block ml-1"><?php echo strtok($_SESSION['nama_pemilih'], " "); ?></span>
<i class="fa fa-fw fa-angle-down d-none d-sm-inline-block"></i>
</button>
<div class="dropdown-menu dropdown-menu-right p-0 border-0 font-size-sm"
aria-labelledby="page-header-user-dropdown">
<div class="p-3 text-center bg-primary">
<img class="img-avatar img-avatar48 img-avatar-thumb"
src="<?php echo $url; ?>assets/img/avatar10.jpg"
alt="Avatar">
</div>
<div class="p-2">
<a class="dropdown-item d-flex align-items-center justify-content-between"
href="<?php echo $url; ?>logout.php">
<span>Logout</span>
<span>
<i class="si si-logout ml-1"></i>
</span>
</a>
</div>
</div>
</div>
</div>
</div>
</header>