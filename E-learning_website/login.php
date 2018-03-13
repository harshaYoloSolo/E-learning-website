
<!DOCTYPE html>
<html>
<head><link rel="icon" type="image/gif/png" href="newlogo.png">
	<title>tutor</title>
	<link rel="stylesheet" type="text/css" href="tutssty.css">
</head>
<body>
	<div class="header">
		<h2>Tutor Login</h2>
	</div>
	<form method="post" action="allready.php">
		<div class="input-g">
			<label>Username:</label>
			<input type="text" name="username" required>
		</div>
		<div class="input-g">
			<label>Password</label>
			<input type="password" name="Password_1" required>
		</div>
		<div class="input-g">
			<button type="submit" name="login" class="btn">Login</button>
		</div>
		<p>
			 Not already member? <a href="register.php">Sign Up</a>
			 <a style="float: right;" href="main-page.php.html">Home</a>
		</p>
	</form>
</body>
</html>