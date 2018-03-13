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
		$sql = "SELECT username FROM users  where username = '$username'";
		$r=mysqli_query($db, $sql);
		if (mysqli_num_rows($r) > 0) {
			        echo "<script>alert('User Already Exist. Redirecting to Register Page.');</script>";
			echo "<p><h2>Redirecting Within 2 Seconds....................</h2></p>";
			header("Refresh:0.5;url=register.php");
		}
	    else if($password==$conf)
		{
			$sql = "INSERT INTO users (username,email,password,name) VALUES ('$username', '$email', '$password','$name')";
			$r=mysqli_query($db, $sql);
			session_start();
			$_SESSION["username"] = "$username";
			header("Location:studentlog1.php");
		}
		else
		{
			echo "<script>alert('Passwords must be same. Redirecting to Register Page.');</script>";
			echo "<p><h2>Redirecting Within 2 Seconds....................</h2></p>";
			header("Refresh:0.5;url=register.php");
		}
}	
?>
