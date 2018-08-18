<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
 header("Location: login.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>





<div class="wrapper">

		<?php

		require_once("inc/config.php");

		$pageTitle="Signout";
		$selected="register";

		include(ROOT_PATH . "inc/header.php"); 
		$pageTitle="Welcome - " . $userRow['email'];
		?>

		<div class="main-page">
			<div id="header">
			    <div id="right">
			     	<div id="content">
			        	 Hi, <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
			        </div>
			    </div>

			</div>

		</div>

		<div class="clearfooter"></div>

	</div>
	
<?php include(ROOT_PATH . "inc/footer.php"); ?>