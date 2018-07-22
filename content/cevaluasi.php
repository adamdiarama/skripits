
    <!-- Main content -->
    <section class="content">
      
       <div style="margin-top:70px; margin-left:70px;">

		<table style="width:700px;">
       	<tr>
       		<td>
				<div class="container" style="width:200px;">                                       
				  <div class="dropdown">
				    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"><?php activeMapel($id_mapel, $connect); ?>
				    <span class="caret"></span></button>
				    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
				      <?php showMapel($_SESSION['id'], $connect); ?>
				    </ul>
				  </div>
				</div>       			
       		</td>
       		<td> > </td>
       		<td>
				<?php if($id_mapel != 0) {

				?> 
					<div class='container'>                                       
				  		<div class='dropdown'>
				    		<button class='btn btn-default dropdown-toggle' type='button' id='menu1' data-toggle='dropdown'> <?php activeMateri($id_materi, $connect); ?>
				    		<span class='caret'></span></button>
				    		<ul class='dropdown-menu' role='menu' aria-labelledby='menu1'>
				    		
				<?php
					showMateri($_SESSION['id'], $id_mapel, $connect, $id_materi);
				} ?>

							</ul>
				  		</div>
					</div>       			
       		</td>
       	</tr>
       </table>

		<?php if($id_materi != 0) {
		?>
			<div class="box" style="width:1000px; margin-left:-25px;">
	            <div class="box-body table-responsive no-padding">
	              <table class="table table-hover">
	                <tbody><tr>
	                  <th>No</th>
	                  <th>Evaluasi</th>
	                  <th></th>
	                </tr>
	              	<?php showEvaluasi($id_materi, $connect);  ?>  
	              </tbody></table>
	            </div>
	            <!-- /.box-body -->
	        </div>
		<?php
			
		} ?>
			
		     

       </div>

    </section>



<!--     <div class="container">                                       
		  <div class="dropdown">
		    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"><?php activeMapel($id_mapel, $connect); ?>
		    <span class="caret"></span></button>
		    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
		      <?php showMapel($_SESSION['id'], $connect); ?>
		    </ul>
		  </div>
		</div> -->