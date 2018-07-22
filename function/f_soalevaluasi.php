<?php  

	function activeEvaluasi($id_evaluasi, $connect) {
		$query = "select * from evaluasi where id=$id_evaluasi";
		$hasil = mysqli_query($connect, $query);

		$data = mysqli_fetch_array($hasil);

		echo $data['judul_evaluasi'];
	}

	function showInfoEvaluasi($id_evaluasi, $connect) {


		$query_evaluasi = "select * from evaluasi where id=$id_evaluasi";
		$hasil_evaluasi = mysqli_query($connect, $query_evaluasi);

		$data_evaluasi = mysqli_fetch_array($hasil_evaluasi);

		$judul_evaluasi = $data_evaluasi['judul_evaluasi'];
		$waktu = $data_evaluasi['waktu'];

		$query_soal = "select count(no_soal) from soalevaluasi where id_evaluasi=$id_evaluasi";
		$hasil_evaluasi = mysqli_query($connect, $query_soal);

		$data_evaluasi = mysqli_fetch_array($hasil_evaluasi);

		$jumlah_soal = $data_evaluasi[0];

		echo "<table style='width:300px;' cellspacing='10'>
       		<tr style='height:50px;'>
       			<td>Evaluasi</td>
       			<td>:</td>
       			<td style='padding-left:10px;'>".$judul_evaluasi."</td>
       		</tr>
       		<tr style='height:50px;'>
       			<td>Jumlah Soal</td>
       			<td>:</td>
       			<td style='padding-left:10px;'>".$jumlah_soal." Soal (Pilihan Ganda)</td>
       		</tr>
       		<tr style='height:50px;'>
       			<td>Waktu</td>
       			<td>:</td>
       			<td style='padding-left:10px;'>".$waktu." Menit</td>
       		</tr>

       		<tr>
       			<td style='padding-top:50px;'><a href='soalevaluasi.php?id=".$id_evaluasi."&mulai=1'><button type='button' class='btn btn-block btn-success' style='width:80px;'><i class='fa fa-fw fa-play'></i>Mulai</button></a></td>
       		</tr>
       	</table>";
	}


	function showSoal($id_evaluasi, $connect) {

		$query_soal = "select * from soalevaluasi where id_evaluasi=$id_evaluasi order by no_soal asc";
		$hasil_soal = mysqli_query($connect, $query_soal);


		while($data_soal = mysqli_fetch_array($hasil_soal)) {
                     echo "<div style='width:900px; height:auto; background-color:white; margin-left:50px;'>";

			echo "<table style='margin-top:30px;'>
       		<tr>
       			<td style='padding-right:20px;'>".$data_soal['no_soal'].")</td>
       			<td style='padding-right:20px;'>".$data_soal['pertanyaan']."</td>
       		</tr>

       		<tr>
       			<td></td>
       			<td style='padding-top:10px;'><input type='radio' name='opt".$data_soal['no_soal']."' value='".$data_soal['opsi_a']."'> ".$data_soal['opsi_a']."</td>
       		</tr>

       		<tr>
       			<td></td>
       			<td><input type='radio' name='opt".$data_soal['no_soal']."' value='".$data_soal['opsi_b']."'> ".$data_soal['opsi_b']."</td>
       		</tr>

       		<tr>
       			<td></td>
       			<td><input type='radio' name='opt".$data_soal['no_soal']."' value='".$data_soal['opsi_c']."'> ".$data_soal['opsi_c']."</td>
       		</tr>

       		<tr>
       			<td></td>
       			<td><input type='radio' name='opt".$data_soal['no_soal']."' value='".$data_soal['opsi_d']."'> ".$data_soal['opsi_d']."</td>
       		</tr>

       		<tr>
       			<td></td>
       			<td><input type='radio' name='opt".$data_soal['no_soal']."' value='".$data_soal['opsi_e']."'> ".$data_soal['opsi_e']."</td>
       		</tr>
       	</table>";

              echo "</div>";
		}

		echo "<input type='submit' class='btn btn-block btn-success' name='submit' value='submit' style='width:70px; margin-top:50px;' />";


	}


	function cekJawaban($id_evaluasi, $connect, $postVar) {

		$query_soal = "select * from soalevaluasi where id_evaluasi=$id_evaluasi order by no_soal asc";
		$hasil_soal = mysqli_query($connect, $query_soal);


		while($data_soal = mysqli_fetch_array($hasil_soal)) {
			echo "<table style='margin-top:30px;'>
       		<tr>
       			<td style='padding-right:20px;'>".$data_soal['no_soal']."</td>
       			<td style='padding-right:20px;'>".$data_soal['pertanyaan']."</td>
       		</tr>

       		<tr>
       			<td></td>
       			<td style='padding-top:10px;'><input type='radio' name='opt".$data_soal['no_soal']."' value='".$data_soal['opsi_a']."'> ".$data_soal['opsi_a']."</td>
       		</tr>

       		<tr>
       			<td></td>
       			<td><input type='radio' name='opt".$data_soal['no_soal']."' value='".$data_soal['opsi_b']."'> ".$data_soal['opsi_b']."</td>
       		</tr>

       		<tr>
       			<td></td>
       			<td><input type='radio' name='opt".$data_soal['no_soal']."' value='".$data_soal['opsi_c']."'> ".$data_soal['opsi_c']."</td>
       		</tr>

       		<tr>
       			<td></td>
       			<td><input type='radio' name='opt".$data_soal['no_soal']."' value='".$data_soal['opsi_d']."'> ".$data_soal['opsi_d']."</td>
       		</tr>

       		<tr>
       			<td></td>
       			<td><input type='radio' name='opt".$data_soal['no_soal']."' value='".$data_soal['opsi_e']."'> ".$data_soal['opsi_e']."</td>
       		</tr>
       	</table>";
	       	$radioname = "opt".$data_soal['no_soal'];

	       	if($postVar[$radioname] == $data_soal['jawaban_benar']) {
	       		echo "Jawaban Benar";
	       	} else {
	       		echo "Jawaban Salah";
	       	}
		}

	}

?>