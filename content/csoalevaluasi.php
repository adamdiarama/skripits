
    <!-- Main content -->
    <section class="content">
      
       <div style="margin-top:50px; margin-left:30px;">
       	<?php if($mulai == 0 && !isset($_POST['submit'])) {
       			showInfoEvaluasi($id, $connect);
       		}
       	?>

       	<form method="POST" action="soalevaluasi.php?id=<?php echo $id; ?>">

       	<?php if($mulai == 1) {
       		showSoal($id, $connect);
       		} ?>

       	</form>

       	<?php if(isset($_POST['submit'])) {
       		cekJawaban($id, $connect, $_POST);
       		} ?>

       </div>

    </section>