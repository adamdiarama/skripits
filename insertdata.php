<?php  


	require "session.php";


	$i = 1;

	
	while($i <= 84) {

		$latihan1 = mt_rand(1, 10);
		$latihan2 = mt_rand(1, 10);
		$latihan3 = mt_rand(1, 10);
		$hasil = mt_rand(1, 100);

		if($latihan1 <= 3) {
			$ket_latihan1 = "baik";
		} else if($latihan1 <= 6) {
			$ket_latihan1 = "cukup";
		} else {
			$ket_latihan1 = "kurang";
		}

		if($latihan2 <= 3) {
			$ket_latihan2 = "baik";
		} else if($latihan2 <= 6) {
			$ket_latihan2 = "cukup";
		} else {
			$ket_latihan2 = "kurang";
		}

		if($latihan3 <= 3) {
			$ket_latihan3 = "baik";
		} else if($latihan3 <= 6) {
			$ket_latihan3 = "cukup";
		} else {
			$ket_latihan3 = "kurang";
		}

		if($hasil >= 64) {
			$ket_hasil = "baik";
		} else if($hasil >= 36 && $hasil <= 63) {
			$ket_hasil = "cukup";
		} else {
			$ket_hasil = "kurang";
		}


		$query = "insert into nilai_siswa values (null, 2, 1, 1, $latihan1, 0, 0, '$ket_latihan1', $latihan2, 0, 0, '$ket_latihan2', $latihan3, 0, 0, '$ket_latihan3', $hasil, '$ket_hasil')";
		$hasil = mysqli_query($connect, $query);


		$i++;
	}



?>