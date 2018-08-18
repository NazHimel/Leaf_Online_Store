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

		<section id="loginBox">

			<h2>Login</h2>
			<form method="post" class="form-section" action="display-page.php">
				<label for="username">
					Username:
					<input type="text" name="username" id="username" placeholder="Username must be between 8 and 20 characters" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
				</label>
				<label for="password">
					Password:
					<input type="password" name="password" id="password" placeholder="Password must contain 1 uppercase, lowercase and number" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" required="required" />
				</label>
				<button type="submit" class="button">Sign in</button>
			</form>
			
		</section>

   		<div class="footer">
   			<p>&copy; 2015 | All Rights Reserved</p>
   		</div>
	
	</body>
</html>










