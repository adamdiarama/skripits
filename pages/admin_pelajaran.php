<?php require "../session.php"; ?>
<?php require "../function/f_admin_pelajaran.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Pelajaran</title>
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
	        Pelajaran
	      </h1>
	      <ol class="breadcrumb">
	        <li class="active">Pelajaran</li>
	      </ol>
	    </section>

		<?php require "../content/cadminpelajaran.php"; ?>
	  </div>

</div>

</body>
</html>