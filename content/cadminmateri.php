
    <!-- Main content -->
    <section class="content">
      
       <div style="margin-top:100px; margin-left:100px;">
    		
            <div class="container">                                       
			  <div class="dropdown">
			    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"><?php activeMapel($id, $connect) ?>
			    <span class="caret"></span></button>
			    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
			      <?php showMapelAdmin($_SESSION['id'], $connect); ?>
			    </ul>
			  </div>
			</div>

			<?php if($id != 0) {
				showMateriAdmin($id, $connect);
			} ?>


			<a href="admin_tambah_materi.php"><button style="margin-left:50px;">Tambah</button></a>

       </div>

    </section>