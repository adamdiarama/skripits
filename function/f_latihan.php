<?php  

	require "f_tampildata.php";


	function showLatihan($id_materi, $connect) {
		echo "<table style='width:500px; margin-top:30px; margin-left:70px;' border='1'>
			<thead>
				<tr>
					<td>No</td>
					<td>Latihan</td>
					<td></td>
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
			echo "<td><a class='btn btn-app' href='soallatihan.php?id=".$data_latihan['id']."&L=1&V=1'><i class='fa fa-play'></i> Mulai</a></td>";
			echo "</tr>";
			$i++;
		}

		echo "</tbody>
		</table>";
	}


	function cekNilaiSiswa($connect, $id_mapel, $id_materi) {
		$id_siswa = $_SESSION['id'];

		$query = "select * from nilai_siswa where id_siswa=$id_siswa";
		$hasil = mysqli_query($connect, $query);
		$data = mysqli_fetch_array($hasil);

		if(is_null($data)) {
			$query = "insert into nilai_siswa (id, id_siswa, id_mapel, id_materi) values (null, $id_siswa, $id_mapel, $id_materi)";
			$hasil = mysqli_query($connect, $query);
			var_dump($hasil);
		}
	}

?>