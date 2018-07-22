<?php  

	if(isset($_GET['del'])) {
		deleteEvaluasi($connect, $_GET['id']);
	}

	if(isset($_POST['submit'])) {

		if(isset($_GET['id'])) {
			updateEvaluasi($connect, $_GET['id'], $_POST);
		} else {
			tambahEvaluasi($connect, $_POST);	
		}
		
	}

	function tambahEvaluasi($connect, $data) {
		$id_mapel = $data['pelajaran'];
		$id_materi = $data['materi'];
		$judul = $data['judul'];
		$waktu = $data['waktu'];
		


		$query = "insert into evaluasi values(null, $id_mapel, $id_materi, '$judul', $waktu)";
		$hasil = mysqli_query($connect, $query);
		

		header("location:admin_evaluasi.php?pel=$id_mapel&mat=$id_materi");
	}

	function ambilWaktu($connect, $id_latihan) {
		if($id_latihan != 0) {
			$query = "select waktu from evaluasi where id=$id_latihan";
			$hasil = mysqli_query($connect, $query);
			$data = mysqli_fetch_array($hasil);

			echo $data['judul'];
		}
	}

	function ambilJudul($connect, $id_latihan) {
		if($id_latihan != 0) {
			$query = "select judul from evaluasi where id=$id_latihan";
			$hasil = mysqli_query($connect, $query);
			$data = mysqli_fetch_array($hasil);

			echo $data['judul'];
		}
	}

	function ambilMapel($connect) {
		$i = 1;

		$query_mapel = "select * from mata_pelajaran";
		$hasil_mapel = mysqli_query($connect, $query_mapel);

		while($data_mapel = mysqli_fetch_array($hasil_mapel)) {
			
			echo "<option value='".$data_mapel['id']."'>".$data_mapel['nama_mapel']."</option>";	
			
		}
	}

	function ambilMateri($connect) {
		$i = 1;

		$query_materi = "select * from materi";
		$hasil_materi = mysqli_query($connect, $query_materi);

		while($data_materi = mysqli_fetch_array($hasil_materi)) {
			
			echo "<option value='".$data_materi['id']."'>".$data_materi['judul_materi']."</option>";	
			
		}	
	}

?>