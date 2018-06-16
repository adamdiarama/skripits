<?php 	

	function printMapel($connect, $id_siswa) {
		
		$i = 1;

		$query_mapel = "select * from mata_pelajaran";
		$hasil_mapel = mysqli_query($connect, $query_mapel);

		while($data_mapel = mysqli_fetch_array($hasil_mapel)) {

			$id_mapel = $data_mapel['id'];

			$query_kontrak = "select * from kontrak_mapel where id_mapel='$id_mapel' and id_siswa = '$id_siswa'";
			$hasil_kontrak = mysqli_query($connect, $query_kontrak);
			$data_kontrak = mysqli_fetch_array($hasil_kontrak);

			echo "<tr>
					<td>" .$i. "</td>
					<td>" .$data_mapel['nama_mapel']. "</td>";


			if(!is_null($data_kontrak)) {
				echo "<td>&nbspTerdaftar</td>
				</tr>";
			} else {
				echo "<td><a href='pelajaran.php?mapel=" .$id_mapel. "&siswa=" .$id_siswa. "'><i class='fa fa-fw fa-plus'></i>Daftar</a></td>
				</tr>";
			}


			$i++;
		}
	}


	function addKontrak_Mapel($connect, $id_mapel, $id_siswa) {

		$query = "insert into kontrak_mapel values (null, '$id_siswa', '$id_mapel')";
		$hasil = mysqli_query($connect, $query);

		header("location:pelajaran.php");

	}


?>