<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
 header("Location: logout-page.php");
}
if(isset($_POST['btn-login']))
{
 $email = mysql_real_escape_string($_POST['email']);
 $upass = mysql_real_escape_string($_POST['pass']);
 $res=mysql_query("SELECT * FROM users WHERE email='$email'");
 $row=mysql_fetch_array($res);
 if($row['password']==md5($upass))
 {
  $_SESSION['user'] = $row['user_id'];
  header("Location: logout-page.php");
 }
 else
 {
  ?>
    <script>alert('wrong details');</script>
    <?php
 }
 
}
?>


<div class="wrapper">

		<?php

		require_once("inc/config.php");

		$pageTitle="Login";
		$selected="register";

		include(ROOT_PATH . "inc/header.php"); ?>

		<div class="main-page">
			<center>
				<div id="login-form">
					<form method="post">
						<table align="center" width="30%" border="0">
						<tr>
							<td><input type="text" name="email" placeholder="Your Email" required /></td>
						</tr>
						<tr>
							<td><input type="password" name="pass" placeholder="Your Password" required /></td>
						</tr>
						<tr>
							<td><button type="submit" name="btn-login">Sign In</button></td>
						</tr>
						<tr>
							<td><a href="register.php">Sign Up Here</a></td>
						</tr>
						</table>
					</form>
				</div>
			</center>

		</div>

		<div class="clearfooter"></div>

	</div>
	
<?php include(ROOT_PATH . "inc/footer.php"); ?>