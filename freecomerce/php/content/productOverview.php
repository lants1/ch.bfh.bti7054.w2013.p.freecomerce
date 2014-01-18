<?php
/**
 * Content Page which displays a Product with its attributes
 *
 * @author lants1
 */

// Fetch the Product from the DB
$dbProduct = new Product();
$result = $dbProduct->getProduct($_GET ['product_id']);

while($row = $result->fetch_assoc()){
	echo "<h1>" . $row ["text_de"] . "</h1>";
		echo "<p>";
		echo "<img src=".$row['img']." alt='ProductPic' style='float:right;padding-right: 30%;' />";
		echo "</p>";
		echo "<div style='width:302px'>";
		echo "<p style='text-align:justify;'>";
		echo utf8_encode($row ['text']);
		echo "</p>";
		echo "</div>";
		echo "Herkunft: ";
		echo $row ['herkunft'];
		echo "<br>";
		echo "Preis:";
		echo $row ['preis'];
		echo "<br><br>";
		echo "<a href='" . anotateUrlWithParameters ( array (
				"chart" => "true"
		) ) . "'>Buy now</a>";
		
		echo "</p>";
}

?>