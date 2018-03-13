<!DOCTYPE html>
<html>
<head><link rel="icon" type="image/gif/png" href="newlogo.png">
	<title>tutor</title>
	<link rel="stylesheet" type="text/css" href="tutssty.css">
	<style>
    </style>
</head>
<body>
	<div class="header">
		<h2>Student Registration from</h2>
	</div>
	<form method="post" action="server1.php">
			<div class="input-g">
			<label>Name:</label>
			<input type="text" name="name" required>
			</div>
			<div class="input-g">
			<label>Username:</label>
			<input type="text" name="username" required>
			</div>
			<div class="input-g">
			<label>E_mail:</label>
			<input type="text" name="email" required>
			</div>
			<div class="input-g">
			<label>Password:</label>
			<input type="password" name="Password_1">
			</div>
			<div class="input-g">
			<label>Confirm Password:</label>
			<input type="password" name="Password_2">
			</div>
			<button type="submit" name="register" class="btn">Register</button>
		
		<p>
			Already a member? <a href="studentlog.php">Sign in</a>
			<a style="float: right;" href="main-page.php.html">Home</a>
		</p>
	</form>
</body>
</html>