<?php require "../session.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>ITS</title>
  <?php include "header.php"; ?>
</head>


<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
	<?php include "navbar-top.php"; ?>

	<?php include "admin_sidebar.php"; ?>

	<!-- Content Wrapper. Contains page content -->
	  <div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        Dashboard
	        <small>Control panel</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Dashboard</li>
	      </ol>
	    </section>

		<?php include "../content/cadmindashboard.php"; ?>
	  </div>

</div>

</body>
</html>