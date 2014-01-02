<?php

echo "<h1>Warenkorb</h1>";
echo "<form action='finishShopping.php'>";
echo "<p>";
echo "<h3>Eingekauft</h3>";
	foreach ($products AS $product){
		if($_GET[ 'product_id' ] == $product['product_id']){
			echo $product['name']."</br>";
			echo $product['preis']."</br></br>";;
		}
	}
echo "</p>";
echo "<p>Zahlungsweise</p>";
echo "<p>";
echo "<input type='radio' name='paymethod' value='Mastercard'> Mastercard<br>";
echo "<input type='radio' name='paymethod' value='Visa'> Visa";
echo "</p>";
echo "<p>Zusatzoptionen</p>";
echo "<p>";
echo "<input type='checkbox' name='additionalSettings' value='express'> Express Lieferung<br>";
echo "<input type='checkbox' name='additionalSettings' value='gift'> Verpackt als Geschenk<br>";
echo "<input type='checkbox' name='additionalSettings' value='gutschein'> Gutschein einlösen";
echo "</p>";
echo "</form>";
?>