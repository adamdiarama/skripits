<?php  


	function ambilKategori($jumlah) {

		if($jumlah > 0 && $jumlah <= 3) {
			return "baik";
		} else if($jumlah > 3 && $jumlah <= 6) {
			return "cukup";
		} else if($jumlah > 6) {
			return "kurang";
		} else {
			return 0;
		}
	}

?>