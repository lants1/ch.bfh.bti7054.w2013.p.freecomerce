<?php
/**
* Generates content for the chart.
*
* @author lants1
*/
if (isset ( $_SESSION ['login'] )) {
	// Warenkorb initialisieren in der Session
	if (! isset ( $_SESSION ['chart'] )) {
		if (isset ( $_GET ['product_id'] )) {
			$cart = new ShoppingChart ();
			$cart->addProduct ( $_GET ['product_id'] );
			$_SESSION ['chart'] = $cart;
		}
		// Item aus dem Warenkorb löschen...
	} else if (isset ( $_GET ['todelete'] )) {
		if (isset ( $_GET ['product_id'] )) {
			$cart = $_SESSION ['chart'];
			$cart->removeProduct ( $_GET ['product_id'] );
			$_SESSION ['chart'] = $cart;
		}
	} 	

	// Dem Warenkorb ein Item hinzufügen
	else if (isset ( $_GET ['product_id'] )) {
		$cart = $_SESSION ['chart'];
		$cart->addProduct ( $_GET ['product_id'] );
		$_SESSION ['chart'] = $cart;
	}
}
?>
<h1>Warenkorb</h1>
<p>
<form action='<?php $_SERVER['PHP_SELF']?>'>
	<h3>Eingekauft</h3>
	<ul>
<?php
if (isset ( $_SESSION ['chart'] )) {
	$cart = $_SESSION ['chart'];
	foreach ( $cart->getProducts () as $product_id ) {
		foreach ( $products as $product ) {
			if ($product_id == $product ['product_id']) {
				echo "<li>" . $product ['name'] . "    <a href='" . $_SERVER ['PHP_SELF'] . "?chart=true&todelete=true&product_id=" . $product_id . "'>Produkt aus Warenkorb entfernen</a></li>";
			}
		}
	}
}
?>
</ul>
	<p>Zahlungsweise</p>
	<p>
		<input type='radio' name='paymethod' value='Mastercard'> Mastercard<br>
		<input type='radio' name='paymethod' value='Visa'> Visa
	</p>
	<p>Zusatzoptionen</p>
	<p>
		<input type='checkbox' name='additionalSettings'
			value='Express Lieferung'> Express Lieferung<br> <input
			type='checkbox' name='additionalSettings'
			value='Verpackt als Geschenk'> Verpackt als Geschenk<br> <input
			type='checkbox' name='additionalSettings' value='Gutschein'>
		Gutschein einlösen
	</p>
	<p>
		<input type="hidden" name="finished" value="finished"> <input
			type='submit' value='Bestellen'>
	</p>
</form>
</p>
