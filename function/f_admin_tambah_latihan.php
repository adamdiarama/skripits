<?php  

	if(isset($_GET['del'])) {
		deleteLatihan($connect, $_GET['id']);
	}

	if(isset($_POST['submit'])) {

		if(isset($_GET['id'])) {
			updateLatihan($connect, $_GET['id'], $_POST);
		} else {
			tambahLatihan($connect, $_POST);	
		}
		
	}

	function deleteLatihan($connect, $id_latihan) {
		$query = "select * from latihan where id=$id_latihan";
		$hasil = mysqli_query($connect, $query);
		$data = mysqli_fetch_array($hasil);
		$id_mapel = $data['id_mapel'];
		$id_materi = $data['id_materi'];

		$query = "delete from latihan where id=$id_latihan";
		$hasil = mysqli_query($connect, $query);

		header("location:admin_latihan.php?pel=$id_mapel&mat=$id_materi");
	}


	function ambilJudul($connect, $id_latihan) {
		if($id_latihan != 0) {
			$query = "select judul from latihan where id=$id_latihan";
			$hasil = mysqli_query($connect, $query);
			$data = mysqli_fetch_array($hasil);

			echo $data['judul'];
		}
	}


	function updateLatihan($connect, $id_latihan, $data) {
		$id_mapel = $data['pelajaran'];
		$id_materi = $data['materi'];
		$judul = $data['judul'];

		$query = "update latihan set id_mapel=$id_mapel, id_materi=$id_materi, judul='$judul' where id=$id_latihan";
		$hasil = mysqli_query($connect, $query);

		header("location:admin_latihan.php?pel=$id_mapel&mat=$id_materi");
	}
	
	function tambahLatihan($connect, $data) {
		$id_mapel = $data['pelajaran'];
		$id_materi = $data['materi'];
		$judul = $data['judul'];


		$query = "insert into latihan values(null, $id_mapel, $id_materi, '$judul')";
		$hasil = mysqli_query($connect, $query);

		header("location:admin_latihan.php?pel=$id_mapel&mat=$id_materi");

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