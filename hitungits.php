<?php  

	require "session.php";

	insertItsLatihan2($connect);
	insertItsLatihan3($connect);
	insertItsHasil($connect);

	function insertItsLatihan2($connect) {
		$Lat1 = array("baik", "cukup", "kurang");
		$Lat2 = array("baik", "cukup", "kurang");
		$prob_baik;
		$prob_cukup;
		$prob_kurang;

		foreach($Lat1 as $ketLat1) {
			
			foreach($Lat2 as $ketLat2) {
				$query = "select count(id) from nilai_siswa where ket_latihan1='$ketLat1' and ket_latihan2='$ketLat2'";
				$hasil = mysqli_query($connect, $query);

				$temp2 = mysqli_fetch_array($hasil);
				

				$query = "select count(id) from nilai_siswa where ket_latihan1='$ketLat1'";
				$hasil = mysqli_query($connect, $query);	

				$temp1 = mysqli_fetch_array($hasil);

				if($ketLat2 == "baik") {
					$prob_baik = $temp2['count(id)'] / $temp1['count(id)'];	
				} else if($ketLat2 == "cukup") {
					$prob_cukup = $temp2['count(id)'] / $temp1['count(id)'];
				} else if($ketLat2 == "kurang") {
					$prob_kurang = $temp2['count(id)'] / $temp1['count(id)'];
				}
			}

			$query = "update t_its_lat2 set lat2_baik=$prob_baik, lat2_cukup=$prob_cukup, lat2_kurang=$prob_kurang where latihan1='$ketLat1'";
			$hasil = mysqli_query($connect, $query);
		}

	}


	function insertItsLatihan3($connect) {
		$Lat1 = array("baik", "cukup", "kurang");
		$Lat2 = array("baik", "cukup", "kurang");
		$Lat3 = array("baik", "cukup", "kurang");
		$prob_baik;
		$prob_cukup;
		$prob_kurang;

		foreach($Lat1 as $ketLat1) {

			foreach($Lat2 as $ketLat2) {
				
				foreach($Lat3 as $ketLat3) {

					$query = "select count(id) from nilai_siswa where ket_latihan1='$ketLat1' and ket_latihan2='$ketLat2' and ket_latihan3='$ketLat3'";
					$hasil = mysqli_query($connect, $query);

					$temp2 = mysqli_fetch_array($hasil);
					

					$query = "select count(id) from nilai_siswa where ket_latihan1='$ketLat1' and ket_latihan2='$ketLat2'";
					$hasil = mysqli_query($connect, $query);	

					$temp1 = mysqli_fetch_array($hasil);

					if($ketLat3 == "baik") {
						$prob_baik = $temp2['count(id)'] / $temp1['count(id)'];	
					} else if($ketLat3 == "cukup") {
						$prob_cukup = $temp2['count(id)'] / $temp1['count(id)'];
					} else if($ketLat3 == "kurang") {
						$prob_kurang = $temp2['count(id)'] / $temp1['count(id)'];
					}		

				}

				$query = "update t_its_lat3 set lat3_baik=$prob_baik, lat3_cukup=$prob_cukup, lat3_kurang=$prob_kurang where latihan1='$ketLat1' and latihan2 ='$ketLat2'";
				$hasil = mysqli_query($connect, $query);

			}

		}
	}


	function insertItsHasil($connect) {
		$Lat1 = array("baik", "cukup", "kurang");
		$Lat2 = array("baik", "cukup", "kurang");
		$Lat3 = array("baik", "cukup", "kurang");
		$Has = array("baik", "cukup", "kurang");
		$prob_baik;
		$prob_cukup;
		$prob_kurang;

		foreach($Lat1 as $ketLat1) {
			
			foreach($Lat2 as $ketLat2) {
			
				foreach($Lat3 as $ketLat3) {
			
					foreach($Has as $ketHas) {
						$query = "select count(id) from nilai_siswa where ket_latihan1='$ketLat1' and ket_latihan2='$ketLat2' and ket_latihan3='$ketLat3' and ket_hasil_evaluasi='$ketHas'";
						$hasil = mysqli_query($connect, $query);

						$temp2 = mysqli_fetch_array($hasil);
						

						$query = "select count(id) from nilai_siswa where ket_latihan1='$ketLat1' and ket_latihan2='$ketLat2' and ket_latihan3='$ketLat3'";
						$hasil = mysqli_query($connect, $query);	

						$temp1 = mysqli_fetch_array($hasil);

						if($ketHas == "baik") {
							$prob_baik = $temp2['count(id)'] / $temp1['count(id)'];	
						} else if($ketHas == "cukup") {
							$prob_cukup = $temp2['count(id)'] / $temp1['count(id)'];
						} else if($ketHas == "kurang") {
							$prob_kurang = $temp2['count(id)'] / $temp1['count(id)'];
						}
					}

					$query = "update t_its_hasil set hasil_baik=$prob_baik, hasil_cukup=$prob_cukup, hasil_kurang=$prob_kurang where latihan1='$ketLat1' and latihan2 ='$ketLat2' and latihan3='$ketLat3'";
					$hasil = mysqli_query($connect, $query);

				}

			}

		}
	}

?>