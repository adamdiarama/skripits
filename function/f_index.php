<?php 

require "connect.php";
session_start();


function fungsiLogin($username, $password) {

	$query = "select * from user where username='$username' and password=md5('$password')";
	$hasil = mysqli_execute($query);

	foreach($data as $hasil) {
		
		if(!is_null($data)) {
			$_SESSION['username'] = $data['username'];
			$_SESSION['id'] = $data['id'];
			$_SESSION['level'] = $data['level'];

			if($data['level'] == 1) {
				header("location:admin_dashboard.php");
			} else if($data['level'] == 2) {
				header("location:dashboard.php");
			}
		} else {
			header("location:index.php?err=1");
		}
	}

}

 ?>