<?php  

	function ambilPelajaran($connect) {
		$query = "select * from mata_pelajaran";
		$hasil = mysqli_query($connect, $query);

		$i = 1;

		while($data = mysqli_fetch_array($hasil)) {
			echo "<tr>";
			echo "<td style='padding-left:10px;'>".$i."</td>";
			echo "<td style='padding-left:10px;'>".$data['nama_mapel']."</td>";
			echo "<td style='padding-left:10px;'><a href='admin_tambah_pelajaran.php?id=".$data['id']."' title='edit'><i class='fa fa-fw fa-file-o'></i></a> <a href='admin_tambah_pelajaran.php?id=".$data['id']."&del=1' title='hapus'><i class='fa fa-fw fa-trash'></i></a></td>";
			echo "</tr>";
    					
    				
			$i++;
		}
	}

?>