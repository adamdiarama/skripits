<?php 

require "../session.php";



//check for login submit button
if(isset($_POST['Login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	fungsiLogin($username, $password, $connect);
}

// Login Function
function fungsiLogin($username, $password, $connect) {


	$query = "select * from user where username='$username' and password=md5('$password')";
	$hasil = mysqli_query($connect, $query);
	$data = mysqli_fetch_array($hasil);

	if(!is_null($data)) {
		$_SESSION['username'] = $data['username'];
		$_SESSION['id'] = $data['id'];
		$_SESSION['level'] = $data['level'];

		if($data['level'] == 1) {
			header("location:admin_dashboard.php");
		} else if($data['level'] == 2) {
			header("location:../pages/dashboard.php");
		}
	} else {
		header("location:../index.php?err=1");
	}

}

 ?>