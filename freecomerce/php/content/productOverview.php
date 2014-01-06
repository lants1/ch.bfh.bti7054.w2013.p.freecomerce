<?php

foreach ( $products as $product ) {
	if ($_GET ['product_id'] == $product ['product_id']) {
		echo "<h1>" . $product ['name'] . "</h1>";
		echo $product ['herkunft'];
		echo $product ['preis'];
		echo "<a href='" . anotateUrlWithParameters ( array (
				"chart" => "true"
		) ) . "'>Buy now;)</a>";
	}
}

?>