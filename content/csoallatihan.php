
    <!-- Main content -->
    <section class="content">
      
       <div>
       		<div style="margin-top:20px; margin-left:100px; background-color:white; width:900px; padding-left:10px; padding-bottom:20px; border-radius:15px;">
       		<p style="font-size:20px;"><b>Soal</b><br/><br/></p>
       		<?php ambilSoal($connect, $id_latihan, $no_latihan, $variasi); ?>
       		</div>

       		<div style="margin-top:50px; width:900px; margin-left:100px;">
       			<div style="width:900px; height:50px; background-color:#3c8dbc;">
       				<p style="color:white; font-size:26px; padding-top:7px; padding-left:20px;"><b>Coding Ground</b></p>
       			</div>

	       		<form style="position: relative;" method="POST" action="">
	       			<textarea id="demotext" name="kodearea"><?php 
	       			if(!isset($_POST['submit'])) {
	       				ambilKode($connect, $id_latihan, $no_latihan, $variasi, $kode); 	
	       			} else {
	       				echo $_POST['kodearea'];
	       			}
	       			?></textarea>
	       			<input type="submit" name="submit" value="Run" class="btn btn-block btn-success" style="width:70px; margin-top:30px; margin-left:830px;">
				</form>
			</div>

			<script>
			    var editor = CodeMirror.fromTextArea(document.getElementById("demotext"), {
			      lineNumbers: true,
			      mode: "text/html",
			      matchBrackets: true
			    });
			 </script>


			 <?php  
				if(isset($_POST['submit'])) {

			 ?>

			 <div style="height:auto; width:900px; margin-left:100px; margin-top:30px; background-color:white; border:1px solid #ddd; border-radius:5px;">
			 	<div style="height:50px; width:auto; background-color:#f5f5f5; border-radius:5px;">
			 		<p style="font-size:16px; padding-top:15px; padding-left:15px;">Hasil Eksekusi Program</p>
			 	</div>
			 	<!-- Pembatas DIV -->
			 		<?php compileCode($connect, $_POST, $id_latihan, $no_latihan, $variasi); ?>
			 	<!-- Pembatas DIV -->
			 	<div style="margin-bottom:50px;">
			 		
			 	</div>
			 	
			 </div>

			 <?php } ?>


       		<div></div>
       </div>

    </section>



<!-- 
			 	<div style="margin-top:50px; margin-left:50px;">
			 		Input
			 		<div style="height:50px; width:800px; background-color:#f5f5f5; border: 1px solid #ccc; border-radius:5px; margin-top:5px;">
			 			<p style="padding-top:15px; padding-left:15px;">a := 5;</p>
			 		</div>
			 	</div>

			 	<div style="margin-top:30px; margin-left:50px;">
			 		<p style="float:left;">Output</p>
			 		<p style="margin-left:420px;">Output yang diinginkan</p>
			 	</div>

			 	<div style="margin-top:5px; margin-left:50px;">
			 		<div style="float:left; height:50px; width:100px; background-color: #f5f5f5; border: 1px solid #ccc; border-radius:5px; width:380px;">
			 		
			 		</div>	

			 		<div style="height:50px; width:100px; background-color: #f5f5f5; border: 1px solid #ccc; border-radius:5px; margin-left:420px; width:380px;">
			 		
			 		</div>
			 	</div>


			 	<div style="margin-top:30px; margin-left:50px; height:50px; width:800px; background-color:#00a65a; border:3px solid #008d4c; border-radius:5px;">
			 		<p style="color:white; font-size:16px; padding-top:11px; padding-left:10px;"><i class='icon fa fa-check'></i> Output Sesuai</p>
			 	</div>

			 	<div style="margin-top:30px; margin-left:50px; height:50px; width:800px; background-color:#f56954; border:3px solid #d73925; border-radius:5px;">
			 		<p style="color:white; font-size:16px; padding-top:11px; padding-left:10px;"><i class='icon fa fa-ban'></i> Output Tidak Sesuai</p>
			 	</div>
 -->