<?php  

	if(isset($_GET['del'])) {
		deleteMateri($connect, $_GET['id']);
	}

	if(isset($_POST['submit'])) {

		if(isset($_GET['id'])) {
			uploadModul();
			updateMateri($connect, $_GET['id'], $_POST);
		} else {
			uploadModul();
			tambahMateri($connect, $_POST);	
		}
		
	}


	function deleteMateri($connect, $id) {
		$query = "select id_mapel from materi where id=$id";
		$hasil = mysqli_query($connect, $query);
		$data = mysqli_fetch_array($hasil);

		$id_mapel = $data['id_mapel'];

		$query = "delete from materi where id=$id";
		$hasil = mysqli_query($connect, $query);


		header("location:admin_materi.php?id=$id_mapel");
	}



	function ambilMapel($connect) {
		$i = 1;

		$query_mapel = "select * from mata_pelajaran";
		$hasil_mapel = mysqli_query($connect, $query_mapel);

		while($data_mapel = mysqli_fetch_array($hasil_mapel)) {
			
			echo "<option value='".$data_mapel['id']."'>".$data_mapel['nama_mapel']."</option>";	
			
		}
	}


	function ambilNamaMateri($connect) {
		if(isset($_GET['id'])) {
			$id = $_GET['id'];

			$query = "select judul_materi from materi where id='$id'";
			$hasil = mysqli_query($connect, $query);

			$data = mysqli_fetch_array($hasil);

			echo $data['judul_materi'];
		}
	}


	function ambilDeskripsi($connect) {
		if(isset($_GET['id'])) {
			$id = $_GET['id'];

			$query = "select deskripsi from materi where id='$id'";
			$hasil = mysqli_query($connect, $query);

			$data = mysqli_fetch_array($hasil);

			echo $data['deskripsi'];	
		}
	}

	function uploadModul() {
		
		$targetfolder = "../modul/";

		$targetfolder = $targetfolder . basename($_FILES['file']['name']) ;

		if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

		 {

		 echo "The file ". basename( $_FILES['file']['name']). " is uploaded";

		 }

		 else {

		 echo "Problem uploading file";

		 }
	}

	function tambahMateri($connect, $data) {
		$id_mapel = $data['pelajaran'];
		$judul_materi = $data['judul_materi'];
		$deskripsi = $data['deskripsi'];
		$location = basename($_FILES['file']['name']);

		$query = "insert into materi values(null, $id_mapel, '$judul_materi', '$deskripsi', '$location')";
		$hasil = mysqli_query($connect, $query);

		header("location:admin_materi.php?id=$id_mapel");
	}


	function updateMateri($connect, $idmateri, $data) {
		$id_mapel = $data['pelajaran'];
		$judul_materi = $data['judul_materi'];
		$deskripsi = $data['deskripsi'];
		$location = basename($_FILES['file']['name']);

		$query = "update materi set id_mapel='$id_mapel', judul_materi='$judul_materi', deskripsi='$deskripsi', location='$location' where id='$idmateri'";
		$hasil = mysqli_query($connect, $query);

		header("location:admin_materi.php?id=$id_mapel");
	}

?>