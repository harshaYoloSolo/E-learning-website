<?php
	$username = "";
	$email = "";
	$errors = "";
	// connect to database
	$db = mysqli_connect('localhost','root','123456789','registration');
	if (isset($_POST['register'])) {
		$name = $_POST['name'];
		$username = $_POST['username'];
		$email = ($_POST['email']);
		$password = ($_POST['Password_1']);
		$conf=($_POST['Password_2']);
		$sql = "SELECT username FROM student  where username = '$username'";
		$r=mysqli_query($db, $sql);
		if (mysqli_num_rows($r) > 0) {
			        echo "<script>alert('User Already Exist. Redirecting to Register Page.');</script>";
			echo "<p><h2>Redirecting Within 2 Seconds....................</h2></p>";
			header("Refresh:0.5;url=student.php");
		}
		else if($password==$conf)
		{
			$sql = "INSERT INTO student (username,email,password,name) VALUES ('$username', '$email', '$password','$name' )";
			$r=mysqli_query($db, $sql);
			header("Location:studentpage.php");
		}
		else{
			echo "<script>alert('Passwords must be same. Redirecting to Register Page.');</script>";
			echo "<p><h2>Redirecting Within 2 Seconds....................</h2></p>";
			header("Refresh:0.5;url=student.php");
		}
	}
	
?>