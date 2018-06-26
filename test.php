<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<form method="POST" action="test.php">
		<textarea name="input" rows="4" cols="30"></textarea>
		<input type="submit" name="submit" value="submit" />
	</form>

	<?php 

	if(isset($_POST['submit'])) {

		$myfile = fopen("test.txt", "w") or die("Unable to open file!");
		$txt = $_POST['input'];
		fwrite($myfile, $txt);
		fclose($myfile);
	}

	?>

</body>
</html>