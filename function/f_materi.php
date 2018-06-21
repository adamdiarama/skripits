<?php 

	
	function showMapel($id_siswa, $connect) {

		$i = 1;

		$query_mapel = "select a.nama_mapel, a.id from mata_pelajaran a, kontrak_mapel b where b.id_siswa=$id_siswa and a.id=b.id_mapel";
		$hasil_mapel = mysqli_query($connect, $query_mapel);

		while($data_mapel = mysqli_fetch_array($hasil_mapel)) {
			
			echo "<li role='presentation'><a role='menuitem' tabindex='-1' href='materi.php?id=".$data_mapel['id']."'>" .$data_mapel['nama_mapel']. "</a></li>";	
			
		}
	}

	function activeMapel($id_mapel, $connect) {
		$nama_mapel = "Mata Pelajaran";
		
		if($id_mapel != 0) {
			$query_mapel = "select * from mata_pelajaran where id=$id_mapel";
			$hasil_mapel = mysqli_query($connect, $query_mapel);
			$data = mysqli_fetch_array($hasil_mapel);
			$nama_mapel = $data['nama_mapel'];
		}

		echo $nama_mapel;
	}


	function showMateri($id_mapel, $connect) {
		echo "<div style='margin-top:50px; margin-left:50px;''>
			<table border='1' style='width: 700px;''>
				<thead>
					<tr>
						<td>NO</td>
						<td>Materi</td>
						<td>Download</td>
					</tr>
				</thead>

				<tbody>
					<tr>";

		$i = 1;
		$query_materi = "select * from materi where id_mapel=$id_mapel";
		$hasil_materi = mysqli_query($connect, $query_materi);

		while ($data = mysqli_fetch_array($hasil_materi)) {
			echo "<td>".$i."</td>";
			echo "<td>".$data['judul_materi']."</td>";
			echo "<td><a href='../modul/".$data['location']."'><i class='fa fa-fw fa-file-pdf-o'></i> ".$data['location']."</a></td>";

			$i++;
		}

			
					
		echo "</tr>
				</tbody>
			</table>
		</div>";


	}


?>