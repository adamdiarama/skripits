<?php  

	require "f_materi.php";

	function showMapelAdmin($id_siswa, $connect) {

		$i = 1;

		$query_mapel = "select * from mata_pelajaran";
		$hasil_mapel = mysqli_query($connect, $query_mapel);

		while($data_mapel = mysqli_fetch_array($hasil_mapel)) {
			
			echo "<li role='presentation'><a role='menuitem' tabindex='-1' href='?id=".$data_mapel['id']."'>" .$data_mapel['nama_mapel']. "</a></li>";	
			
		}
	}


	function showMateriAdmin($id_mapel, $connect) {
		// echo "<div style='margin-top:50px; margin-left:50px;''>
		// 	<table border='1' style='width: 700px;''>
		// 		<thead>
		// 			<tr>
		// 				<td>NO</td>
		// 				<td>Materi</td>
		// 				<td>Download</td>
		// 			</tr>
		// 		</thead>

		// 		<tbody>
		// 			<tr>";

		$i = 1;
		$query_materi = "select * from materi where id_mapel=$id_mapel";
		$hasil_materi = mysqli_query($connect, $query_materi);

		while ($data = mysqli_fetch_array($hasil_materi)) {
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$data['judul_materi']."</td>";
			echo "<td><a href='admin_tambah_materi.php?id=".$data['id']."' title='edit'><i class='fa fa-fw fa-file-o'></i></a> <a href='admin_tambah_materi.php?id=".$data['id']."&del=1' title='hapus'><i class='fa fa-fw fa-trash'></i></a>  <a href='../modul/".$data['location']."'><i class='fa fa-fw fa-file-pdf-o'></i> ".$data['location']."</a></td>";
			echo "</tr>";

			$i++;
		}

			
					
		echo "</tr>
				</tbody>
			</table>
		</div>";


	}

?>