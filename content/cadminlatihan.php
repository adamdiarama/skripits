
    <!-- Main content -->
    <section class="content">
      
       <div style="margin-top:70px; margin-left:70px;">

			<div class="container">                                       
		  <div class="dropdown">
		    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"><?php activeMapel($id_mapel, $connect); ?>
		    <span class="caret"></span></button>
		    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
		      <?php showMapel($_SESSION['id'], $connect); ?>
		    </ul>
		  </div>
		</div>

		<?php if($id_mapel != 0) {
			showMateri($_SESSION['id'], $id_mapel, $connect, $id_materi);
			} ?>

		<?php if($id_materi != 0) {
			showLatihan($id_materi, $connect);
			} ?>     


			<a href="admin_tambah_latihan.php"><button>Tambah</button></a>

       </div>

    </section>