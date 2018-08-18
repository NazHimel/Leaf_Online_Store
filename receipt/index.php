<div class="wrapper">

		<?php

		require_once("../inc/config.php");

		$pageTitle="Thank you for your order!";
		$selected="shop";

		include(ROOT_PATH . "inc/header.php"); ?>

		<div class="main-page">

			<h1>Thank you!</h1>
			<p>Thank you for your payment. Your transaction has been completed, and a receipt for your purchase has been emailed to you. You may log into your account at <a href="www.paypal.com/us">www.paypal.com/us</a> to view details of this transaction.</p>
			<br>
			<p>Need another products? Visit the <a href="<?php echo BASE_URL; ?>shop.php">Shopping Page</a> again.</p>
		</div>

		<div class="clearfooter"></div>

	</div>
	
<?php include(ROOT_PATH . "inc/footer.php"); ?>