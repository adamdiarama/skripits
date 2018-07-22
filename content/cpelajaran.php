<!-- Main content -->
<section class="content">

	<div style="height:0; width:200px; border-bottom: 40px solid #3c8dbc; border-left: 0px solid transparent; border-right: 25px solid transparent; margin-top:70px; margin-left:70px;">
		<p style="padding-left:10px; color:white; padding-top:7px; font-size:20px;"><strong>Daftar Pelajaran</strong></p>
	</div>

	<!-- <div style="margin-left:100px; height:400px; width:900px; background-color:white; border:1px solid #000000;">
		<div style="margin-top:70px; margin-left:100px;">
			<table style="width:700px;" border="1">
				<thead>
					<tr>
						<td>No</td>
						<td>Mata Pelajaran</td>
						<td>Aksi</td>
					</tr>
				</thead>

				<tbody>
					<?php printMapel($connect, $_SESSION['id']); ?>	
				</tbody>

			</table>
		</div>
	</div> -->




		<div class="box" style="width:1000px; margin-left:50px;">
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>No</th>
                  <th>Mata Pelajaran</th>
                  <th>Aksi</th>
                </tr>
                <?php printMapel($connect, $_SESSION['id']); ?>	
              </tbody></table>
            </div>
            <!-- /.box-body -->
        </div>

</section>