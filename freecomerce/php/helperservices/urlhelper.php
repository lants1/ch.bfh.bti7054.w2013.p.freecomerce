<?php
/**
* Urlhelper should elimnate overhead in creating url links and simplifies
* the get-parameter handling.
*
* @author lants1
*/
// TODO LAN Url Helper fertig machen und im ganzen Projekt integrieren...

// Wechsle den getParameter vom übergebenen Feld
function anotateUrlWithParameters($field) {
	$url = $_SERVER ['PHP_SELF'];
	$url = addParam ( $url, "dummy", "blabla", "?" );
	
	if (isset ( $attr ["cat_id"] )) {
		$cat_id = $attr ["cat_id"];
	} else {
		$cat_id = getParam ( "cat_id", - 99 );
	}
	
	if (isset ( $field ["chart"] )) {
		$chart = $field ["chart"];
	} else {
		$chart = getParam ( "chart", "false" );
	}
	
	if (isset ( $field ["product_id"] )) {
		$product_id = $field ["product_id"];
	} else {
		$product_id = getParam ( "product_id", - 99 );
	}
	
	if (isset ( $field ["lang"] )) {
		$languageSetting = $field ["lang"];
	} else {
		$languageSetting = getParam ( "lang", "de" );
	}
	
	if ($cat_id != - 99) {
		$url = addParam ( $url, "cat_id", $cat_id );
	}
	if ($product_id != - 99) {
		$url = addParam ( $url, "product_id", $product_id );
	}
	//if ($chart == "true") {
		$url = addParam ( $url, "chart", $chart );
	//}
	$url = addParam ( $url, "lang", $languageSetting );
	
	return $url;
}
function getParam($name, $default) {
	if (isset ( $_GET [$name] )) {
		return urldecode ( $_GET [$name] );
	} else {
		return $default;
	}
}
function addParam($url, $name, $value, $seperator = "&") {
	return $url . $seperator . $name . "=" . urlencode ( $value );
}
?>