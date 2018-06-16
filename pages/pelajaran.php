<?php require "../session.php"; ?>
<?php require "../function/f_pelajaran.php"; ?>
<?php 
	if(isset($_GET['mapel'])) {
		addKontrak_Mapel($connect, $_GET['mapel'], $_GET['siswa']);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pelajaran</title>
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
	        Pelajaran
	      </h1>
	      <ol class="breadcrumb">
	        <li class="active">Pelajaran</li>
	      </ol>
	    </section>

		<?php require "../content/cpelajaran.php"; ?>
	  </div>

</div>

</body>
</html>