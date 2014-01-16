<?php
/**
 * Content Page which displays a Product with its attributes
 *
 */
foreach ( $products as $product ) {
	if ($_GET ['product_id'] == $product ['product_id']) {
		echo "<h1>" . $product ["name"] . "</h1>";
		echo "<p>";
		echo "<img src=".$product['img']." alt='ProductPic' style='float:right;padding-right: 30%;' />";
		echo "</p>";
		echo "<div style='width:302px'>";
		echo "<p style='text-align:justify;'>";
		echo $product ['text'];
		echo "</p>";
		echo "</div>";
		echo "Herkunft: ";
		echo $product ['herkunft'];
		echo "<br>";
		echo "Preis:";
		echo $product ['preis'];
		echo "<br><br>";
		echo "<a href='" . anotateUrlWithParameters ( array (
				"chart" => "true"
		) ) . "'>Buy now</a>";
		
		echo "</p>";
	}
}

?>