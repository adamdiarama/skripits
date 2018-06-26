<?php require "../session.php"; ?>
<?php require "../function/f_soallatihan.php" ?>
<?php  
	
	if(isset($_GET['id'])) {
		$id_latihan = $_GET['id'];
		$no_latihan = $_GET['L'];
		$variasi = $_GET['V'];
	} else {
		$id_latihan = 0;
	}

	if(isset($_POST['submit'])) {
		$kode = $_POST['kodearea'];
	} else {
		$kode = 0;
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan</title>
	<?php require "header.php" ?>

	<script src="lib/codemirror.js"></script>
	<link rel="stylesheet" href="lib/codemirror.css">
	<script src="mode/javascript/javascript.js"></script>
	
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

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- CK Editor -->
<script src="../../bower_components/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>

</body>
</html>