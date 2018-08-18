	<div class="wrapper">

		<?php

		require_once("../inc/config.php");

		$search_term = "";
		if(isset($_GET["s"])) {
			$search_term = trim($_GET["s"]);
			if($search_term != "") {
				require_once(ROOT_PATH . "inc/products.php");
				$products = get_products_search($search_term);
			}
		}




		$pageTitle="Search";
		$selected="search";

		include(ROOT_PATH . 'inc/header.php'); ?>

		<div class="main-page">
			
			<div class="search-form">
				<h1>Search</h1>

				<form method="get" action="./">
					<input type="text" name="s" value="<?php echo htmlspecialchars($search_term); ?>">
					<input type="submit" value="Go">
				</form>

				<?php
					if ($search_term != "") {
						if (!empty($products)) {
							echo '<ul class="products">';
							foreach ($products as $product ) {
								echo get_list_view_html($product);
							}
							echo '</ul>';

						} else {
							echo '<p>No products were found matching that seach item</p>';
						}
					}
				?>
			</div>

		</div>

		<div class="clearfooter"></div>

	</div>
	
<?php include(ROOT_PATH . 'inc/footer.php'); ?>

