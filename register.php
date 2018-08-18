<?php
	session_start();
	if(isset($_SESSION['user'])!="")
	{
	 header("Location: logout-page.php");
	}
	include_once 'dbconnect.php';

	if(isset($_POST['btn-signup']))
	{
	 $uname = mysql_real_escape_string($_POST['uname']);
	 $email = mysql_real_escape_string($_POST['email']);
	 $upass = md5(mysql_real_escape_string($_POST['pass']));
	 
	 if(mysql_query("INSERT INTO users(username,email,password) VALUES('$uname','$email','$upass')"))
	 {
?>
	     <script>alert('successfully registered ');</script>
	    <?php
			 }
			 else
			 {
	  	?>
	        <script>alert('error while registering you...');</script>
		<?php
	 		}
			}
		?>

<div class="wrapper">

		<?php

		require_once("inc/config.php");

		$pageTitle="Register";
		$selected="register";

		include(ROOT_PATH . "inc/header.php"); ?>

		<div class="main-page">
			<center>
			<div id="login-form">
			<form method="post">
				<table align="center" width="30%" border="0">
				<tr>
					<td><input type="text" name="uname" placeholder="User Name" required /></td>
				</tr>
				<tr>
					<td><input type="email" name="email" placeholder="Your Email" required /></td>
				</tr>
				<tr>
					<td><input type="password" name="pass" placeholder="Your Password" required /></td>
				</tr>
				<tr>
					<td><button type="submit" name="btn-signup">Sign Me Up</button></td>
				</tr>
				<tr>
					<td><a href="login.php">Sign In Here</a></td>
				</tr>
				</table>
			</form>
			</div>
			</center>

		</div>

		<div class="clearfooter"></div>

	</div>
	
<?php include(ROOT_PATH . "inc/footer.php"); ?>