<?php
if (isset ( $_SESSION ['login'] )) {
	// Warenkorb initialisieren in der Session
	if (! isset ( $_SESSION ['chart'] )) {
		if (isset ( $_GET ['product_id'] )) {
			$cart = array ();
			$cart [] = $_GET ['product_id'];
			$_SESSION ['chart'] = $cart;
		}
	// Dem Warenkorb ein Item hinzufügen
	} else if (isset ($_GET['todelete'])){
		if(isset ( $_GET ['product_id'] )){
			if(($key = array_search($_GET ['product_id'],  $_SESSION ['chart'])) !== false) {
				unset( $_SESSION ['chart'][$key]);
			}
		}
	}
	
	
	else if (isset ( $_GET ['product_id'] )) {
			if (! in_array ( $_GET ['product_id'], $_SESSION ['chart'] )) {
				$_SESSION ['chart'] [] = $_GET ['product_id'];
			}
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
	foreach ( $_SESSION ['chart'] as $product_id ) {
		echo "<li>" . $product_id . "<a href='".$_SERVER['PHP_SELF']."?chart=true&todelete=true&product_id=".$product_id."'>del</a></li>";
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
