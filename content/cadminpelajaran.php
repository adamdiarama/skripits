
    <!-- Main content -->
    <section class="content">

        <div style="height:0; width:200px; border-bottom: 40px solid #3c8dbc; border-left: 0px solid transparent; border-right: 25px solid transparent; margin-top:70px; margin-left:70px;">
            <p style="padding-left:10px; color:white; padding-top:7px; font-size:20px;"><strong>Daftar Pelajaran</strong></p>
        </div>

        <div class="box" style="width:1000px; margin-left:50px;">
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>No</th>
                  <th>Mata Pelajaran</th>
                  <th>Aksi</th>
                </tr>
                <?php ambilPelajaran($connect); ?>
              </tbody></table>
            </div>
            <!-- /.box-body -->
        </div>
      
       <!-- <div style="margin-top:100px; margin-left:100px;">
    		<table style="width:700px;" border="1">
    			<thead>
    				<tr>
    					<td style="padding-left:10px;">No</td>
    					<td style="padding-left:10px;">Mata Pelajaran</td>
    					<td style="padding-left:10px;">Aksi</td>
    				</tr>
    			</thead>

    			<tbody>
    				<?php ambilPelajaran($connect); ?>
    			</tbody>
    		</table> -->

    		<a href="admin_tambah_pelajaran.php"><button class="btn btn-block btn-success" style="width:100px; margin-left:70px;">Tambah</button></a>

    </section>