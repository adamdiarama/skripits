<?php 


	function showMapel($id_siswa, $connect) {

		$i = 1;

		if($id_siswa != 2) {
			$query_mapel = "select a.nama_mapel, a.id from mata_pelajaran a, kontrak_mapel b where b.id_siswa=$id_siswa and a.id=b.id_mapel";	
		} else {
			$query_mapel = "select * from mata_pelajaran";	
		}

		
		$hasil_mapel = mysqli_query($connect, $query_mapel);

		while($data_mapel = mysqli_fetch_array($hasil_mapel)) {
			echo "<li role='presentation'><a role='menuitem' tabindex='-1' href='?pel=".$data_mapel['id']."'>" .$data_mapel['nama_mapel']. "</a></li>";	
			$i++;	
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

	function showMateri($id_siswa, $id_mapel, $connect, $id_materi) {

		// echo "<div class='container' style='margin-top:30px; margin-left:30px;'>                                       
		//   <div class='dropdown'>
		//     <button class='btn btn-default dropdown-toggle' type='button' id='menu1' data-toggle='dropdown'>"; activeMateri($id_materi, $connect);

		// echo "<span class='caret'></span></button>
		//     <ul class='dropdown-menu' role='menu' aria-labelledby='menu1'>";

		$i = 1;

		if($id_siswa != 2) {
			$query_materi = "select a.id, a.judul_materi from materi a, kontrak_mapel b, mata_pelajaran c where a.id_mapel=c.id and b.id_mapel=c.id and b.id_siswa=$id_siswa and c.id=$id_mapel";
		} else {
			$query_materi = "select * from materi where id_mapel='$id_mapel'";	
		}

		
		$hasil_materi = mysqli_query($connect, $query_materi);

		while($data_materi = mysqli_fetch_array($hasil_materi)) {
			echo "<li role='presentation'><a role='menuitem' tabindex='-1' href='?pel=".$id_mapel."&mat=".$data_materi['id']."'>" .$data_materi['judul_materi']. "</a></li>";	
			$i++;
		}

		// echo "</ul>
		//   </div>
		// </div>    ";
	}

	function activeMateri($id_materi, $connect) {
		$materi = "Materi";

		if($id_materi != 0) {
			$query = "select * from materi where id=$id_materi";
			$hasil = mysqli_query($connect, $query);

			$data = mysqli_fetch_array($hasil);

			$materi = $data['judul_materi'];
		}

		echo $materi;
	} 

?>