<?php require "../session.php"; ?>
<?php require "../function/f_evaluasi.php" ?>
<?php  
	if(isset($_GET['pel'])) {
		$id_mapel = $_GET['pel'];
	} else {
		$id_mapel = 0;
	}

	if(isset($_GET['mat'])) {
		$id_materi = $_GET['mat'];
	} else {
		$id_materi = 0;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Evaluasi</title>
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
	        Evaluasi
	      </h1>
	      <ol class="breadcrumb">
	        <li class="active">Evaluasi</li>
	      </ol>
	    </section>

		<?php require "../content/cevaluasi.php"; ?>
	  </div>

</div>

</body>
</html>