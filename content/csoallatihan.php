
    <!-- Main content -->
    <section class="content">
      
       <div>
       		<div style="margin-top:20px; margin-left:100px;"><?php ambilSoal($connect, $id_latihan, $no_latihan, $variasi); ?></div>

       		<div style="margin-top:50px; width:900px; margin-left:100px;">
	       		<form style="position: relative; margin-top: .5em;" method="POST" action="">
	       			<textarea id="demotext" name="kodearea"><?php 
	       			if(!isset($_POST['submit'])) {
	       				ambilKode($connect, $id_latihan, $no_latihan, $variasi, $kode); 	
	       			} else {
	       				echo $_POST['kodearea'];
	       			}
	       			?></textarea>
	       			<input type="submit" name="submit" value="submit">
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
					compileCode($connect, $_POST, $id_latihan, $no_latihan, $variasi);
				}

			 ?>


       		<div></div>
       </div>

    </section>
