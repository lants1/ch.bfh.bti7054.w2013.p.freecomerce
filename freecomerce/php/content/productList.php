<?php
foreach ( $products as $product ) {
	if ($product ['cat_id'] == $_GET ['cat_id']) {
		echo "<br>";
		echo "<b>" . $product ['herkunft'] . "</b><br>";
		// Man ist in der Produktansicht wenn die ProductId gesetzt ist.....
		if (isset ( $_GET ['product_id'] )) {
			echo "<a href='" . anotateUrlWithParameters ( array (
					"product_id" => $product ['product_id'],
					"chart" => "true"
			) ) . "'>" . $product ['name'] . "</a><br>";
		} else {
			echo "<a href='" . anotateUrlWithParameters ( array (
					"product_id" => $product ['product_id']
			) ) . "'>" . $product ['name'] . "</a><br>";
		}
	}
}
?>