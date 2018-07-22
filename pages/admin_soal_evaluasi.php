<?php require "../session.php"; ?>
<?php require "../function/f_admin_soal_evaluasi.php"; ?>

<?php  
	if(isset($_GET['id'])) {
		$id = $_GET['id'];
	} else {
		$id = 0;
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

	<?php require "admin_sidebar.php"; ?>

	<!-- Content Wrapper. Contains page content -->
	  <div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        Soal Evaluasi
	      </h1>
	      <ol class="breadcrumb">
	        <li class="active">Soal Evaluasi</li>
	      </ol>
	    </section>

		<?php require "../content/cadminsoalevaluasi.php"; ?>
	  </div>

</div>

</body>
</html>