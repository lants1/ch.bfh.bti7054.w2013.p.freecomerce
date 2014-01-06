<?php
/**
* Contenthandler, defines the concret content for each page...
*
* @author lants1
*/

// Task 4.3 Quick and Dirty muss sowiso noch neuimplementiert werden via. DB
$products [0] ['product_id'] = 1;
$products [0] ['name'] = "Noir d'Orange";
$products [0] ['cat_id'] = 1;
$products [0] ['herkunft'] = "China";
$products [0] ['preis'] = 2.80;

$products [1] ['product_id'] = 2;
$products [1] ['name'] = "Supreme-darjeeling";
$products [1] ['cat_id'] = 1;
$products [1] ['herkunft'] = "China";
$products [1] ['preis'] = 8.39;

$products [2] ['product_id'] = 3;
$products [2] ['name'] = "Pai-mu-tan";
$products [2] ['cat_id'] = 1;
$products [2] ['herkunft'] = "Sri-Lanka";
$products [2] ['preis'] = 2.40;

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