<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $pageTitle?></title>
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/normalize.css">
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,700|Open+Sans:400,400italic,700,700italic,800' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/main.css">
	</head>

	<body>
		<div class="header">

					<a href="/">
						<img src="<?php echo BASE_URL; ?>img/leaf.png" alt="Leaf Logo" id="img_logo">
					</a>

					<img src="<?php echo BASE_URL; ?>img/leaf-name.png" alt="Leaf Name" id="leaf-name">

					


				<ul class="nav">
					<li class= "<?php if($selected == "home"){echo "on";} ?>"><a href="<?php echo BASE_URL; ?>">Home</a></li>
					<li class= "<?php if($selected == "shop"){echo "on";} ?>"><a href="<?php echo BASE_URL; ?>shop/">Shop</a></li>
					<li class= "<?php if($selected == "contact"){echo "on";} ?>"><a href="<?php echo BASE_URL; ?>contact/">Contact Us</a></li>
					<li class= "<?php if($selected == "search"){echo "on";} ?>"><a href="<?php echo BASE_URL; ?>search/">Search</a></li>

					<li class= "<?php if($selected == "register"){echo "on";} ?>">
						<a href="<?php echo BASE_URL; ?>register.php">
							Signin/Signup</a></li>

					<li class= "cart"> <a target="paypal" href="https://www.paypal.com/cgi-bin/webscr?cmd=_cart&amp;business=23GKRPULT83HN&amp;display=1">											   
											<img src="<?php echo BASE_URL; ?>img/shop.png" alt="View Cart" id="view_cart">
										</a>
					</li>
				</ul>

		</div>