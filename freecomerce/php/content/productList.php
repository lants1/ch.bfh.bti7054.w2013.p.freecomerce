<?php
/**
 * Displayes a list of countries and under each country show the tea products according to the
 * current categorie.
 * 
 * @author lants1
 * 
 */
// Get the ProductList from DB
$dbProduct = new Product();
$result = $dbProduct->getProductsByCategory($_GET ['cat_id']);


while($row = $result->fetch_assoc()){
	echo "<br>";
	echo "<b>" . $row ['herkunft'] . "</b><br>";
	// Man ist in der Produktansicht wenn die ProductId gesetzt ist.....
	if (isset ( $_GET ['product_id'] )) {
		echo "<a href='" . anotateUrlWithParameters ( array (
				"product_id" => $row ['product_id'],
				"chart" => "true"
		) ) . "'>" . $row ['text_de'] . "</a><br>";
	} else {
		echo "<a href='" . anotateUrlWithParameters ( array (
				"product_id" => $row ['prod_id']
		) ) . "'>" . $row ['text_de'] . "</a><br>";
	}
}
?>