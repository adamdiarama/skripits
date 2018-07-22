<?php  


	function ambilSoalLatihan($connect, $id_latihan) {
		$query = "select * from soallatihan where id_latihan=$id_latihan";
		$hasil = mysqli_query($connect, $query);

		$i = 1;

		while($data = mysqli_fetch_array($hasil)) {
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$data['soal']."</td>";
			echo "<td><a href='admin_tambah_soal_latihan.php?id=".$data['id']."' title='edit'><i class='fa fa-fw fa-file-o'></i></a> <a href='admin_tambah_soal_latihan.php?id=".$data['id']."&del=1' title='hapus'><i class='fa fa-fw fa-trash'></i></a></td>";
			echo "</tr>";

			$i++;
		}
	}

	function ambilPelajaran($connect, $id_latihan) {
		$query = "select a.nama_mapel from mata_pelajaran a, latihan b where a.id=b.id_mapel and b.id=$id_latihan";
		$hasil = mysqli_query($connect, $query);
		$data = mysqli_fetch_array($hasil);

		echo $data['nama_mapel'];
	}

	function ambilMateri($connect, $id_latihan) {
		$query = "select a.judul_materi from materi a, latihan b where a.id=b.id_materi and b.id=$id_latihan";
		$hasil = mysqli_query($connect, $query);
		$data = mysqli_fetch_array($hasil);

		echo $data['judul_materi'];
	}

	function ambilJudul($connect, $id_latihan) {
		$query = "select judul from latihan where id=$id_latihan";
		$hasil = mysqli_query($connect, $query);
		$data = mysqli_fetch_array($hasil);

		echo $data['judul'];	
	}

?>