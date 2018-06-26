<?php require "../session.php"; ?>
<?php require "../function/f_latihan.php" ?>
<?php  
	if(isset($_GET['pel'])) {
		$id_mapel = $_GET['pel'];
	} else {
		$id_mapel = 0;
	}

	if(isset($_GET['mat'])) {
		$id_materi = $_GET['mat'];
		cekNilaiSiswa($connect, $id_mapel, $id_materi);
	} else {
		$id_materi = 0;
	}

	$_SESSION['jumlahcoba1'] = 0;
	$_SESSION['jumlahcoba2'] = 0;
	$_SESSION['jumlahcoba3'] = 0;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan</title>
	<?php require "header.php" ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
	<?php require "navbar-top.php"; ?>

	<?php require "sidebar.php"; ?>

	<!-- Content Wrapper. Contains page content -->
	  <div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        Latihan
	      </h1>
	      <ol class="breadcrumb">
	        <li class="active">Latihan</li>
	      </ol>
	    </section>

		<?php require "../content/clatihan.php"; ?>
	  </div>

</div>

</body>
</html>