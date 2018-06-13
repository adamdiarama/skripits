<?php 

	$server="localhost";
	$username="root";
	$password="";
	$database="db_skripits";
	
	$connect = mysqli_connect($server, $username, $password, $database);

	if(mysqli_connect_errno()) {
		echo "Failed Connecting To Database" . mysqli_connect_errno();
	}

?>