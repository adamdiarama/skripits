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

			$myfile = fopen(getenv("HOMEDRIVE") . getenv("HOMEPATH"). "\\Documents\\main.pas", "w");
			$txt = $kode;
			fwrite($myfile, $txt);
			fclose($myfile);


			$output = shell_exec("fpc " .getenv("HOMEDRIVE") . getenv("HOMEPATH"). "\\Documents\\main.pas");

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

			} else {
				echo "<a href='soallatihan.php?id=".$id_latihan."&L=".$no_latihan."&V=".$variasi."'><button>Next</button></a>";	
			}

			
		}
	}

	function runCode($connect, $jwbBenar, $input) {

		$output = shell_exec(getenv("HOMEDRIVE") . getenv("HOMEPATH"). "\\Documents\\main.exe");

		echo "Input : " .$input. "<br/>";
		echo "Output : " .$output. "<br/>";
		
		if($output == "".$jwbBenar."\n" || $output == $jwbBenar) {
			echo "benar";
			echo "<br/>";
			return 1;
		} else {
			echo "salah";
			echo "<br/>";
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