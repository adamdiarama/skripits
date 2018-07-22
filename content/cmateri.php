<!-- Main content -->
    <section class="content">
      
       <div style="margin-top:70px; margin-left:70px;">

       <div class="container">                                       
		  <div class="dropdown">
		    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"><?php activeMapel($id, $connect) ?>
		    <span class="caret"></span></button>
		    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
		      <?php showMapel($_SESSION['id'], $connect); ?>
		    </ul>
		  </div>
		</div>

		<?php if($id != 0) {
			
		?>
		<div class="box" style="width:1000px; margin-left:-25px;">
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>No</th>
                  <th>Mata Pelajaran</th>
                  <th>Aksi</th>
                </tr>
              	<?php showMateri($id, $connect);  ?>  
              </tbody></table>
            </div>
            <!-- /.box-body -->
        </div>	
		<?php	
		} ?>

		

       </div>

    </section>
