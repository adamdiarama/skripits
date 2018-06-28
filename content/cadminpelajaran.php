
    <!-- Main content -->
    <section class="content">
      
       <div style="margin-top:100px; margin-left:100px;">
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
    		</table>

    		<a href="admin_tambah_pelajaran.php"><button>Tambah</button></a>
       </div>

    </section>