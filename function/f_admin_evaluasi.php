<?php  

	require "f_tampildata.php";


	function showEvaluasi($id_materi, $connect) {
		// echo "<table style='width:500px; margin-top:30px; margin-left:70px;' border='1'>
		// 	<thead>
		// 		<tr>
		// 			<td>No</td>
		// 			<td>Judul</td>
		// 			<td>Aksi</td>
		// 		</tr>
		// 	</thead>

		// 	<tbody>";

		$i = 1;
		$query_evaluasi = "select * from evaluasi where id_materi=$id_materi";
		$hasil_evaluasi = mysqli_query($connect, $query_evaluasi);

		while($data_evaluasi = mysqli_fetch_array($hasil_evaluasi)) {
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>" .$data_evaluasi['judul_evaluasi']. "<br/>Waktu : ".$data_evaluasi['waktu']." menit</td>";
			echo "<td><a href='admin_tambah_evaluasi.php?id=".$data_evaluasi['id']."'><i class='fa fa-fw fa-file-o'></i></a> <a href='admin_tambah_evaluasi.php?id=".$data_evaluasi['id']."&del=1'><i class='fa fa-fw fa-trash'></i></a>  <a href='admin_soal_evaluasi.php?id=".$data_evaluasi['id']."'><i class='fa fa-fw fa-external-link'></i> Soal</a></td>";
			echo "</tr>";
			$i++;
		}

		echo "</tbody>
		</table>";
	}

?>