<?php 

require "../session.php";



//check for login submit button
if(isset($_POST['Login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	fungsiLogin($username, $password, $connect);
}

//check for signup submit button
if(isset($_POST['signup'])) {
	$username = $_POST['username'];
	$nama_lengkap = $_POST[nama_lengkap];
	$kelas = $_POST['kelas'];
	$password = $_POST['password'];

	fungsiSignUp($username, $nama_lengkap, $kelas, $password, $connect);
}

//check for signout
if(isset($_GET['out'])) {
	fungsiSignOut();
}

// Login Function
function fungsiLogin($username, $password, $connect) {


	$query = "select * from user where username='$username' and password='$password'";
	$hasil = mysqli_query($connect, $query);
	$data = mysqli_fetch_array($hasil);

	if(!is_null($data)) {
		$_SESSION['username'] = $data['username'];
		$_SESSION['nama_lengkap'] = $data['nama_lengkap'];
		$_SESSION['kelas'] = $data['kelas'];
		$_SESSION['id'] = $data['id'];
		$_SESSION['level'] = $data['level'];

		if($data['level'] == 1) {
			header("location:../pages/admin_dashboard.php");
		} else if($data['level'] == 2) {
			header("location:../pages/dashboard.php");
		}
	} else {
		header("location:../index.php?err=1");
	}

}


// Signup Function
function fungsiSignUp($username, $nama_lengkap, $kelas, $password, $connect) {

	$query = "insert into user values(null, '$username', '$password', '$nama_lengkap', '$kelas', 2)";
	$hasil = mysqli_query($connect, $query);
	$data = mysqli_fetch_array($hasil);

	header('location:../index.php');
}

// Signout Function
function fungsiSignOut() {
	session_unset();
	session_destroy();
	header('location:../index.php');
}

 ?>