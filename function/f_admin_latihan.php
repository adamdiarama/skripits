<?php  

	require "f_tampildata.php";

	function showLatihan($id_materi, $connect) {
		echo "<table style='width:500px; margin-top:30px; margin-left:70px;' border='1'>
			<thead>
				<tr>
					<td>No</td>
					<td>Latihan</td>
					<td>Aksi</td>
				</tr>
			</thead>

			<tbody>";

		$i = 1;
		$query_latihan = "select * from latihan where id_materi=$id_materi";
		$hasil_latihan = mysqli_query($connect, $query_latihan);

		while($data_latihan = mysqli_fetch_array($hasil_latihan)) {
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>" .$data_latihan['judul']. "</td>";
			echo "<td><a href='admin_tambah_latihan.php?id=".$data_latihan['id']."'><i class='fa fa-fw fa-file-o'></i></a> <a href='admin_tambah_latihan.php?id=".$data_latihan['id']."&del=1'><i class='fa fa-fw fa-trash'></i></a>  <a href='admin_soal_latihan.php?id=".$data_latihan['id']."'><i class='fa fa-fw fa-external-link'></i> Soal</a></td>";
			echo "</tr>";
			$i++;
		}

		echo "</tbody>
		</table>";
	}

?>