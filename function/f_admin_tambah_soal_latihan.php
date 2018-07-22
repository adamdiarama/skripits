<?php  


	if(isset($_POST['submit'])) {
		tambahLatihan($connect, $_POST, $_GET['lat']);
	}


	function tambahLatihan($connect, $data, $id_latihan) {
		$no_latihan = $data['no_latihan'];
		$variasi = 1;
		$soal = $data['soal1'];
		$input1 = $data['v1input1'];
		$input2 = $data['v1input2'];
		$input3 = $data['v1input3'];
		$output1 = $data['v1output1'];
		$output2 = $data['v1output2'];
		$output3 = $data['v1output3'];
		$basecode = $data['basecode1'];

		$query = "insert into soallatihan values(null, $id_latihan, $no_latihan, $variasi, '$soal', '$input1', '$input2', '$input3', '$output1', '$output2', '$output3', '$basecode')";
		$hasil = mysqli_query($connect, $query);



		$no_latihan = $data['no_latihan'];
		$variasi = 2;
		$soal = $data['soal2'];
		$input1 = $data['v2input1'];
		$input2 = $data['v2input2'];
		$input3 = $data['v2input3'];
		$output1 = $data['v2output1'];
		$output2 = $data['v2output2'];
		$output3 = $data['v2output3'];
		$basecode = $data['basecode2'];

		$query = "insert into soallatihan values(null, $id_latihan, $no_latihan, $variasi, '$soal', '$input1', '$input2', '$input3', '$output1', '$output2', '$output3', '$basecode')";
		$hasil = mysqli_query($connect, $query);



		$no_latihan = $data['no_latihan'];
		$variasi = 3;
		$soal = $data['soal3'];
		$input1 = $data['v3input1'];
		$input2 = $data['v3input2'];
		$input3 = $data['v3input3'];
		$output1 = $data['v3output1'];
		$output2 = $data['v3output2'];
		$output3 = $data['v3output3'];
		$basecode = $data['basecode3'];

		$query = "insert into soallatihan values(null, $id_latihan, $no_latihan, $variasi, '$soal', '$input1', '$input2', '$input3', '$output1', '$output2', '$output3', '$basecode')";
		$hasil = mysqli_query($connect, $query);

	}

?>