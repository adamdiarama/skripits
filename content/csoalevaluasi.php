
    <!-- Main content -->
    <section class="content">

      
       <div style="margin-top:50px; margin-left:30px;">

        
       	<?php if($mulai == 0 && !isset($_POST['submit'])) {
       			
       	?>	

        <div style="height:300px; width:900px; background-color:white; margin-left:50px;">
          <div style="padding-top:50px; padding-left:50px;">
            <?php showInfoEvaluasi($id, $connect); ?>  
          </div>
          
        </div>

        <?php } ?>

       	<form method="POST" action="soalevaluasi.php?id=<?php echo $id; ?>">

       	<?php if($mulai == 1) {

       	?>	

       		<div style="width:auto; height:auto; background-color:#cae8ca; border: 3px solid #73ad21; bottom:0; right:0; position:fixed;">
       			<p id="timer" style="font-size:20px;"><b></b></p>	
       		</div>
       		

       		<script>

				// Set the date we're counting down to
				var countDownDate = new Date().getTime() + 1*60000;

				// Update the count down every 1 second
				var x = setInterval(function() {

				    // Get todays date and time
				    var now = new Date().getTime();
				    
				    // Find the distance between now an the count down date
				    var distance = countDownDate - now;
				    
				    // Time calculations for days, hours, minutes and seconds
				    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
				    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
				    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
				    
				    // Output the result in an element with id="demo"
				    document.getElementById("timer").innerHTML = "Waktu : " + hours + "h "
				    + minutes + "m " + seconds + "s ";
				    
				    // If the count down is over, write some text 
				    if (distance < 0) {
				        clearInterval(x);
				        $('#myModal').modal('show');
				        document.getElementById("timer").innerHTML = "EXPIRED";
				    }
				}, 1000);
				</script>

				<!-- Modal -->
				<div id="myModal" class="modal fade" role="dialog">
				  <div class="modal-dialog">

				    <!-- Modal content-->
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Waktu Habis</h4>
				      </div>
				      <div class="modal-body">
				        <p>Waktu anda untuk mengerjakan soal sudah habis, silahkan submit jawaban anda</p>
				      </div>
				      <div class="modal-footer">
				      	<input type="submit" class="btn btn-default" name="submit" data-dismiss="modal" value="submit">
				      </div>
				    </div>

				  </div>
				</div>

       		<?php	showSoal($id, $connect);
       		} ?>

       	</form>

       	<?php if(isset($_POST['submit'])) {
       		cekJawaban($id, $connect, $_POST);
       		} ?>

       </div>

    </section>