<h1>Warenkorb</h1>
<p>
<form action='<?php $_SERVER['PHP_SELF']?>'>
<h3>Eingekauft</h3>
<?php
	foreach ($products AS $product){
		if($_GET[ 'product_id' ] == $product['product_id']){
			echo $product['name']."</br>";
			echo $product['preis']."</br></br>";
		}
	}
	?>
<p>Zahlungsweise</p>
<p>
<input type='radio' name='paymethod' value='Mastercard'> Mastercard<br>
<input type='radio' name='paymethod' value='Visa'> Visa
</p>
<p>Zusatzoptionen</p>
<p>
<input type='checkbox' name='additionalSettings' value='Express Lieferung'> Express Lieferung<br>
<input type='checkbox' name='additionalSettings' value='Verpackt als Geschenk'> Verpackt als Geschenk<br>
<input type='checkbox' name='additionalSettings' value='Gutschein'> Gutschein einlösen
</p>
<p>
<input type="hidden" name="finished" value="finished">
<input type='submit' value='Bestellen'>
</p>
</form>
</p>
