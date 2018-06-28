<?php require "../session.php"; ?>
<?php require "../function/f_admin_materi.php"; ?>
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
	<title>Materi</title>
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
	        Materi
	      </h1>
	      <ol class="breadcrumb">
	        <li class="active">Materi</li>
	      </ol>
	    </section>

		<?php require "../content/cadminmateri.php"; ?>
	  </div>

</div>

</body>
</html>