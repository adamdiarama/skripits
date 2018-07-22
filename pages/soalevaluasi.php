<?php require "../session.php"; ?>
<?php require "../function/f_soalevaluasi.php" ?>

<?php  
	if(isset($_GET['id'])) {
		$id = $_GET['id'];
	}

	if(isset($_GET['mulai'])) {
		$mulai = $_GET['mulai'];
	} else {
		$mulai = 0;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Soal</title>
	<?php require "header.php" ?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
	        <?php activeEvaluasi($id, $connect); ?>
	      </h1>
	      <ol class="breadcrumb">
	        <li class="active"><?php activeEvaluasi($id, $connect); ?></li>
	      </ol>
	    </section>

		<?php require "../content/csoalevaluasi.php"; ?>
	  </div>

</div>

</body>
</html>