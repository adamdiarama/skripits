<!-- Main content -->
<section class="content">
      
	<div style="margin-top:70px; margin-left:70px;">
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

</section>