<!DOCTYPE html>
<html>
<head><link rel="icon" type="image/gif/png" href="newlogo.png">
	<title>tutor</title>
	<link rel="stylesheet" type="text/css" href="tutssty.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
	<style>
    </style>
</head>
<body ng-app="mymodal">
	<div class="header">
		<h2>Tutor registration from</h2>
	</div>
	<form method="post" action="server.php">
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
			Already a member? </p>
			 <div ng-controller="MainCtrl" class="container">
     			<button ng-click="toggleModal()" style="margin-top: -50px; margin-left:-180px; width:100px; height: 45px;">Login</button>
    			<modal title="Login form" visible="showModal">
    			<form role="form">
      				<div class="form-group">
       				 <label for="username">Username</label>
        			<input type="username" class="form-control" id="username" placeholder="Enter Username" />
     				 </div>
      			<div class="form-group">
      			  <label for="password">Password</label>
      			  <input type="password" class="form-control" id="password" placeholder="Password" style="margin-top: -5px;" />
      			</div>
     			  <button type="submit" style="width:100px; height:35px; margin-top: -20px; margin-bottom: 2px;">Login</button>
    			</form>
  			</modal>
		</div>
			<a style="float: right;" href="main-page.php.html">Home</a>

		
				
	</form>
</body>
</html>