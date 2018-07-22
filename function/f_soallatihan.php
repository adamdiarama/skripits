<?php  

	require "kategori_its.php";

	function compileCode($connect, $data, $id_latihan, $no_latihan, $variasi) {

		$i = 1;
		$jumlahBenar = 0;

		while($i <= 3) {

			$query = "select input" .$i. ", output" .$i. " from soallatihan where id_latihan=$id_latihan and no_latihan=$no_latihan";
			$hasil = mysqli_query($connect, $query);

			$dataquery = mysqli_fetch_array($hasil);


			$kode =  str_replace("input();", $dataquery['input'.$i], $data['kodearea']);

			$myfile = fopen(getenv("HOMEDRIVE") . getenv("HOMEPATH"). "\\Documents\\".$_SESSION['id']."main.pas", "w");
			$txt = $kode;
			fwrite($myfile, $txt);
			fclose($myfile);


			$output = shell_exec("fpc " .getenv("HOMEDRIVE") . getenv("HOMEPATH"). "\\Documents\\".$_SESSION['id']."main.pas");

			if(strpos($output, 'Error') !== false) {
				var_dump($output);
			} else {
				$jumlahBenar += runCode($connect, $dataquery['output'.$i], $dataquery['input'.$i]);
			}

			$i++;
		}

		$_SESSION['jumlahcoba'.$no_latihan] += 1;

		nextLatihan($connect, $id_latihan, $no_latihan, $jumlahBenar, $variasi);
	}

	function nextLatihan($connect, $id_latihan, $no_latihan, $jumlahBenar, $variasi) {

		$jumlah = $_SESSION['jumlahcoba'.$no_latihan];
		$id_siswa = $_SESSION['id'];
		$id_mapel = $_SESSION['idmapel'];
		$id_materi = $_SESSION['idmateri'];

		$kategori1 = ambilKategori($_SESSION['jumlahcoba1']);
		$kategori2 = ambilKategori($_SESSION['jumlahcoba2']);
		$kategori3 = ambilKategori($_SESSION['jumlahcoba3']);
		
		$query = "update nilai_siswa set latihan".$no_latihan."_v".$variasi."=$jumlah where id_siswa=$id_siswa and id_mapel=$id_mapel and id_materi=$id_materi";
		$hasil = mysqli_query($connect, $query);
		

		if($jumlahBenar == 3) {

			if($no_latihan == 1) {
				$query = "update nilai_siswa set ket_latihan1='$kategori1' where id_siswa=$id_siswa and id_mapel=$id_mapel and id_materi=$id_materi";
				$hasil = mysqli_query($connect, $query);

				$query = "select * from t_its_lat2 where latihan1='$kategori1'";
				$hasil = mysqli_query($connect, $query);

				$data = mysqli_fetch_array($hasil);

				if($data['lat2_baik'] >= $data['lat2_cukup'] && $data['lat2_baik'] >= $data['lat2_kurang']) {
					$no_latihan += 1;
					$variasi = 1;
				} else {

					if($variasi == 3) {
						$no_latihan += 1;
						$variasi = 1;
					} else {
						$no_latihan = 1;
						$variasi += 1;
						$_SESSION['jumlahcoba1'] = 0;
					}
				}
			} else if($no_latihan == 2) {
				$query = "update nilai_siswa set ket_latihan2='$kategori2' where id_siswa=$id_siswa and id_mapel=$id_mapel and id_materi=$id_materi";
				$hasil = mysqli_query($connect, $query);


				$query = "select * from t_its_lat3 where latihan1='$kategori1' and latihan2='$kategori2'";
				$hasil = mysqli_query($connect, $query);

				$data = mysqli_fetch_array($hasil);

				if($data['lat3_baik'] >= $data['lat3_cukup'] && $data['lat3_baik'] >= $data['lat3_kurang']) {
					$no_latihan += 1;
					$variasi = 1;
				} else {

					if($variasi == 3) {
						$no_latihan += 1;
						$variasi = 1;
					} else {
						$no_latihan = 2;
						$variasi += 1;
						$_SESSION['jumlahcoba2'] = 0;
					}
				}
			} else if($no_latihan == 3) {
				$query = "update nilai_siswa set ket_latihan3='$kategori3' where id_siswa=$id_siswa and id_mapel=$id_mapel and id_materi=$id_materi";
				$hasil = mysqli_query($connect, $query);


				$query = "select * from t_its_hasil where latihan1='$kategori1' and latihan2='$kategori2' and latihan3='$kategori3'";
				$hasil = mysqli_query($connect, $query);

				$data = mysqli_fetch_array($hasil);

				if($data['hasil_baik'] >= $data['hasil_cukup'] && $data['hasil_baik'] >= $data['hasil_kurang']) {
					$no_latihan += 1;
					$variasi = 1;
				} else {
					

					if($variasi == 3) {
						$no_latihan += 1;
						$variasi = 1;
					} else {
						$no_latihan = 3;
						$variasi += 1;
						$_SESSION['jumlahcoba3'] = 0;
					}
				}
			}


			if($no_latihan > 3) {
				header('location:latihan.php');
			} else {
				echo "<a href='soallatihan.php?id=".$id_latihan."&L=".$no_latihan."&V=".$variasi."'><button class='btn btn-block btn-success' style='width:70px; margin-top:30px; margin-left:700px;'>Next</button></a>";	
			}

			
		}
	}

	function runCode($connect, $jwbBenar, $input) {

		$output = shell_exec(getenv("HOMEDRIVE") . getenv("HOMEPATH"). "\\Documents\\main.exe");

		echo "<div style='margin-top:50px; margin-left:50px;'>
			 		Input
			 		<div style='height:50px; width:800px; background-color:#f5f5f5; border: 1px solid #ccc; border-radius:5px; margin-top:5px;'>
			 			<p style='padding-top:15px; padding-left:15px;'>".$input."</p>
			 		</div>
			 	</div>";


		echo "<div style='margin-top:5px; margin-left:50px;'>
			 		<div style='float:left; height:50px; width:100px; background-color: #f5f5f5; border: 1px solid #ccc; border-radius:5px; width:380px;'>
			 			<p style='padding-top:15px; padding-left:15px;'>".$output."</p>
			 		</div>	

			 		<div style='height:50px; width:100px; background-color: #f5f5f5; border: 1px solid #ccc; border-radius:5px; margin-left:420px; width:380px;'>
			 			<p style='padding-top:15px; padding-left:15px;'>".$jwbBenar."</p>
			 		</div>
			 	</div>";

		
		if($output == "".$jwbBenar."\n" || $output == $jwbBenar) {
			echo "<div style='margin-top:30px; margin-left:50px; height:50px; width:800px; background-color:#00a65a; border:3px solid #008d4c; border-radius:5px;'>
			 		<p style='color:white; font-size:16px; padding-top:11px; padding-left:10px;'><i class='icon fa fa-check'></i> Output Sesuai</p>
			 	</div>";
			return 1;
		} else {
			echo "<div style='margin-top:30px; margin-left:50px; height:50px; width:800px; background-color:#f56954; border:3px solid #d73925; border-radius:5px;'>
			 		<p style='color:white; font-size:16px; padding-top:11px; padding-left:10px;'><i class='icon fa fa-ban'></i> Output Tidak Sesuai</p>
			 	</div>";
			return 0;
		}


	}


	function ambilSoal($connect, $id_latihan, $no_latihan, $variasi) {
		$query = "select soal from soallatihan where id_latihan=$id_latihan and no_latihan=$no_latihan and variasi=$variasi";
		$hasil = mysqli_query($connect, $query);

		$data = mysqli_fetch_array($hasil);

		echo $data['soal'];
	}


	function ambilKode($connect, $id_latihan, $no_latihan, $variasi, $kode) {

		if($kode != 0) {
			echo $kode;
		} else {
			$query = "select base_code from soallatihan where id_latihan=$id_latihan and no_latihan=$no_latihan and variasi=$variasi";
			$hasil = mysqli_query($connect, $query);

			$data = mysqli_fetch_array($hasil);

			echo $data['base_code'];
		}
	}

	function cekNilaiSiswa($connect) {
		$id_siswa = $_SESSION['id'];

		$query = "select * from nilai_siswa where id_siswa=$id_siswa";
		$hasil = mysqli_query($connect, $query);
		$data = mysqli_fetch_array($hasil);

		if(is_null($data)) {

		}
	}

?>