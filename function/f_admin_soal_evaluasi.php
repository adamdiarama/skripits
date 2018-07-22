<?php  

	function ambilSoalEvaluasi($connect, $id_evaluasi) {
		$query = "select * from soalevaluasi where id_evaluasi=$id_evaluasi";
		$hasil = mysqli_query($connect, $query);

		$i = 1;

		while($data = mysqli_fetch_array($hasil)) {
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td style='width:800px;'>".$data['pertanyaan']."</td>";
			echo "<td><a href='admin_tambah_soal_evaluasi.php?id=".$data['id']."'><i class='fa fa-fw fa-file-o'></i></a> <a href='admin_tambah_soal_evaluasi.php?id=".$data['id']."&del=1'><i class='fa fa-fw fa-trash'></i></a></td>";
			echo "</tr>";

			$i++;
		}
	}

	function ambilPelajaran($connect, $id_evaluasi) {
		$query = "select a.nama_mapel from mata_pelajaran a, evaluasi b where a.id=b.id_mapel and b.id=$id_evaluasi";
		$hasil = mysqli_query($connect, $query);
		$data = mysqli_fetch_array($hasil);

		echo $data['nama_mapel'];
	}

	function ambilMateri($connect, $id_evaluasi) {
		$query = "select a.judul_materi from materi a, evaluasi b where a.id=b.id_materi and b.id=$id_evaluasi";
		$hasil = mysqli_query($connect, $query);
		$data = mysqli_fetch_array($hasil);

		echo $data['judul_materi'];
	}

	function ambilJudul($connect, $id_evaluasi) {
		$query = "select judul_evaluasi from evaluasi where id=$id_evaluasi";
		$hasil = mysqli_query($connect, $query);
		$data = mysqli_fetch_array($hasil);

		echo $data['judul_evaluasi'];	
	}

?>