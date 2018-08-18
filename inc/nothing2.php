	<?php
		require_once("config.php");

		$search_term = "";
		if(isset($_GET["s"])) {
			$search_term = trim($_GET["s"]);
			if($search_term != "") {
				require_once(ROOT_PATH . "inc/products.php");
				$products = get_products_search($search_term);
			}
		}

	?>
			
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