<?php require "../session.php"; ?>
<?php require "../function/f_soallatihan.php" ?>
<?php  
	
	if(isset($_GET['id'])) {
		$id_latihan = $_GET['id'];
	} else {
		$id_latihan = 0;
	}

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

		<?php require "../content/csoallatihan.php"; ?>
	  </div>

</div>

</body>
</html>