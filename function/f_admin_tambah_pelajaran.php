<?php  

	if(isset($_GET['del'])) {
		deletePelajaran($connect, $_GET['id']);
	}

	if(isset($_POST['submit'])) {

		if(isset($_GET['id'])) {
			editPelajaran($connect, $_POST);
		} else {
			tambahPelajaran($connect, $_POST);	
		}
		
	}

	function deletePelajaran($connect, $id) {
		$query = "delete from mata_pelajaran where id='$id'";
		$hasil = mysqli_query($connect, $query);

		header('location:admin_pelajaran.php');
	}

	function tambahPelajaran($connect, $data) {
		$nama_mapel = $data['nama_mapel'];
		$deskripsi = $data['deskripsi'];

		$query = "insert into mata_pelajaran values(null, '$nama_mapel', '$deskripsi')";
		$hasil = mysqli_query($connect, $query);

		header('location:admin_pelajaran.php');
	}

	function editPelajaran($connect, $data) {
		$nama_mapel = $data['nama_mapel'];
		$deskripsi = $data['deskripsi'];
		$id = $_GET['id'];

		$query = "update mata_pelajaran set nama_mapel='$nama_mapel', deskripsi='$deskripsi' where id='$id'";
		$hasil = mysqli_query($connect, $query);

		header('location:admin_pelajaran.php');
	}


	function ambilNamaMapel($connect, $id) {
		if(isset($_GET['id'])) {
			$query = "select nama_mapel from mata_pelajaran where id='$id'";
			$hasil = mysqli_query($connect, $query);

			$data = mysqli_fetch_array($hasil);

			echo $data['nama_mapel'];
		}
	}

	function ambilDeskripsi($connect, $id) {
		if(isset($_GET['id'])) {
			$query = "select deskripsi from mata_pelajaran where id='$id'";
			$hasil = mysqli_query($connect, $query);

			$data = mysqli_fetch_array($hasil);

			echo $data['deskripsi'];	
		}
		
	}

?>