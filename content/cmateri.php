<!-- Main content -->
    <section class="content">
      
       <div style="margin-top:70px; margin-left:70px;">

       	<div class="container">                                       
		  <div class="dropdown">
		    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Mata Pelajaran
		    <span class="caret"></span></button>
		    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
		      <?php showMapel($_SESSION['id'], $connect); ?>
		    </ul>
		  </div>
		</div>

       </div>

    </section>