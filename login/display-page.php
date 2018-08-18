<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Log in</title>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="login.css">
	</head>

	<body>

		<div class="header">
   			<p>MANWARUL ALIM</p>
   		</div>

   		<div class="content">
   			<h2>Information Page</h2>
	   			<pre><?php
	   			$username = $_POST["username"];
				$password = $_POST["password"];

				echo "Your Name: " . $username . "\n" . "Password: " . $password;
				?></pre>
   		</div>
   			
   		<div class="footer">
   			<p>&copy; 2015 | All Rights Reserved</p>
   		</div>
	
	</body>
</html>