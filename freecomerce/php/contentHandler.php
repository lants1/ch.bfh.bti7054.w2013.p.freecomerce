<?php
/**
* Contenthandler, defines the concret content for each page...
*
* @author lants1
*/

include_once 'constants.php';

if (isset ( $_GET ['chart'] )) {
	// Warenkorb
	include_once 'php/content/chart.php';
} else if (isset ( $_GET ['finished'] )) {
	// Bestellung abschliessen
	include_once 'php/content/finishShopping.php';
} else if (isset ( $_GET ['confirmed'] )) {
	// Bestellung abschliessen
	include_once 'php/content/confirmed.php';
} else if (isset ( $_GET ['product_id'] )) {
	// Produktübersicht
	include_once 'php/content/productOverview.php';
} else if (isset ( $_GET ['cat_id'] )) {
	// Listenüberischt der Kategorie
	include_once 'php/content/productList.php';
} 

else {
	// Sollte nicht passieren
	echo "Kein Inhalt definiert...";
}

?>