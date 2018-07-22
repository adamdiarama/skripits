<?php  

	if(isset($_POST['submit'])) {
		tambahEvaluasi($connect, $_POST, $_GET['lat']);
	}



?>