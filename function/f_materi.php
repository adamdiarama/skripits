<?php 

	
	function showMapel($id_siswa, $connect) {

		$i = 1;

		$query_mapel = "select a.nama_mapel, a.id from mata_pelajaran a, kontrak_mapel b where b.id_siswa=$id_siswa and a.id=b.id_mapel";
		$hasil_mapel = mysqli_query($connect, $query_mapel);

		while($data_mapel = mysqli_fetch_array($hasil_mapel)) {
			echo "<li role='presentation'><a role='menuitem' tabindex='-1' href='materi.php?id=".$data_mapel['id']."'>" .$data_mapel['nama_mapel']. "</a></li>";
		}
	}


?>