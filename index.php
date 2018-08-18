	<div class="wrapper">

		<?php

		require_once("inc/config.php");
		include(ROOT_PATH . "inc/products.php");

		$recent = get_products_recent();


		$pageTitle="Online Shopping | Leaf";
		$selected="home";

		include(ROOT_PATH . 'inc/header.php'); ?>

		<div class="main-page">

			<img src="<?php echo BASE_URL; ?>img/home-image.jpg" alt="home-image" id="home-image">

			 <!-- require_once(ROOT_PATH . "inc/nothing2.php"); -->

			<h2>Leaf&rsquo;s Latest Shirts</h2>

			<ul class="products">
				<?php 

					$list_view_html = "";
					foreach($recent as $product) { 
						$list_view_html = get_list_view_html($product) . $list_view_html;
					}
					echo $list_view_html;
					
				?>								
			</ul>

		</div>

		<div class="clearfooter"></div>

	</div>
	
<?php include(ROOT_PATH. 'inc/footer.php'); ?>

