<?php include 'header.php'; ?>
<main id="main-container">
<div class="bg-image overflow-hidden" style="background-image: url('<?php echo $url; ?>assets/img/photo29@2x.jpg');">
<div class="bg-primary-dark-op">
<div class="content content-narrow content-full">
<div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center mt-5 mb-2 text-center text-sm-left">
<div class="flex-sm-fill">
<h1 class="font-w600 text-white mb-0 invisible" data-toggle="appear">Dashboard</h1>
<h2 class="h4 font-w400 text-white-75 mb-0 invisible" data-toggle="appear" data-timeout="250">Selamat Datang <?php echo $_SESSION['name']; ?></h2>
</div>
</div>
</div>
</div>
</div>
<div class="content content-narrow">
<div class="row">
<div class="col-12 col-md-6 col-lg-4 col-xl-4">
<a class="block block-rounded block-link-pop border-bottom border-primary border-4x" href="<?php echo $url; ?>admin/daftar-calon.php">
<div class="block-content block-content-full">
<div class="d-flex">
<div class="text-dark">
<span class="font-size-sm font-w600 text-uppercase text-muted">Total Calon</span>
<?php 
include "../connection.php";
$data = mysqli_query($connection, "select * from data_calon");
$tdata = mysqli_num_rows($data);
?>
<h2 class="text-primary mb-0 number-font"><?php echo $tdata; ?></h2>
</div>
<div class="ml-auto">
<i class="fa fa-user-tie display-4 text-gray"></i>
</div>
</div>
</div>
</a>
</div>
<div class="col-12 col-md-6 col-lg-4 col-xl-4">
<a class="block block-rounded block-link-pop border-bottom border-primary border-4x" href="<?php echo $url; ?>admin/daftar-pemilih.php">
<div class="block-content block-content-full">
<div class="d-flex">
<div class="text-dark">
<span class="font-size-sm font-w600 text-uppercase text-muted">Total Pemilih</span>
<?php 
$pemilih = mysqli_query($connection, "select * from data_pemilih");
$tpemilih = mysqli_num_rows($pemilih);
?>
<h2 class="text-primary mb-0 number-font"><?php echo $tpemilih; ?></h2>
</div>
<div class="ml-auto">
<i class="fa fa-users display-4 text-gray"></i>
</div>
</div>
</div>
</a>
</div>
<div class="col-12 col-md-12 col-lg-4 col-xl-4">
<a class="block block-rounded block-link-pop border-bottom border-primary border-4x" href="<?php echo $url; ?>admin/data-voting.php">
<div class="block-content block-content-full">
<div class="d-flex">
<div class="text-dark">
<span class="font-size-sm font-w600 text-uppercase text-muted">Total Voting</span>
<?php 
$voting = mysqli_query($connection, "select * from data_voting");
$tvoting = mysqli_num_rows($voting);
?>
<h2 class="text-primary mb-0 number-font"><?php echo $tvoting; ?></h2>
</div>
<div class="ml-auto">
<i class="fa fa-check display-4 text-gray"></i>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="row">
<div class="col-xl-6">
<div class="block">
<div class="block-header block-header-default">
<h3 class="block-title">Data Pemilih Per Angkatan</h3>
</div>
<div class="block-content block-content-full text-center">
<div class="py-3">
<canvas id="pemilih-chart"></canvas>
<script>
	var config1 = {
		type: 'bar',
		data: {
			datasets: [{
				data:[<?php 
					$jml_1 = mysqli_query($connection,"select * from data_pemilih where angkatan='2018'");
					echo mysqli_num_rows($jml_1);
					?>, <?php 
					$jml_2 = mysqli_query($connection,"select * from data_pemilih where angkatan='2019'");
					echo mysqli_num_rows($jml_2);
					?>, <?php 
					$jml_3 = mysqli_query($connection,"select * from data_pemilih where angkatan='2020'");
					echo mysqli_num_rows($jml_3);
					?>, <?php 
					$jml_4 = mysqli_query($connection,"select * from data_pemilih where angkatan='2021'");
					echo mysqli_num_rows($jml_4);
					?>],
				backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
				],
				label: 'Presentase Pemilih Per Angkatan'
			}],
			labels: ["2018", "2019", "2020", "2021"]},
		options: {
			responsive: true,
		}
	};
</script>
</div>
</div>
</div>
</div>
<div class="col-xl-6">
<div class="block">
<div class="block-header block-header-default">
<h3 class="block-title">Hasil Pemilihan</h3>
</div>
<div class="block-content block-content-full text-center">
<div class="py-3">
<canvas id="hasil-chart"></canvas>
<script>
	var config2 = {
		type: 'pie',
		data: {
			datasets: [{
				data:[<?php 
					$jml_1 = mysqli_query($connection,"select * from data_voting where id_calon='1'");
					echo mysqli_num_rows($jml_1);
					?>, <?php 
					$jml_2 = mysqli_query($connection,"select * from data_voting where id_calon='2'");
					echo mysqli_num_rows($jml_2);
					?>],
				backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
				],
				label: 'Presentase Hasil Pemilihan'
			}],
			labels: ["Aji Satya Wardhana", "Kotak Kosong"]},
		options: {
			responsive: true,
		}
	};
</script>
</div>
</div>
</div>
</div>

</div>

</div>
</main>
<script>
window.onload = function() {
    var ctx1 = document.getElementById('pemilih-chart').getContext('2d');
	window.myBar = new Chart(ctx1, config1);
	var ctx2 = document.getElementById('hasil-chart').getContext('2d');
	window.myPie = new Chart(ctx2, config2);
};
</script>
<?php include 'footer.php'; ?>