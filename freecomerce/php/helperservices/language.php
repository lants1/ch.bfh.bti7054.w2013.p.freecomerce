<?php
/**
* Implementation for the language change
*
* @author lants1
*/
include_once ('urlhelper.php');

// default language Setting...
$languageSetting = 'de';

// konkretes setzen der Sprachsettings durch das hohlen des Parameters..
if(isset($_GET[ 'lang' ])){
	$languageSetting = $_GET[ 'lang' ];
	// setzen des cookies
	setcookie("languageSetting", $languageSetting, time()+3600);
}
else if (isset($_COOKIE['languageSetting'])){
	$languageSetting = $_COOKIE['languageSetting'];
}

// 2D Array für die internationalisierten Texte...
$text[0]["de"]="Hier könnte Ihre Werbung stehen";
$text[0]["en"]="Advertisment could be placed here...";

// Wechsle Sprache Dialog mit Links
function languageChangeDialog()
{
	echo "<a href='".anotateUrlWithParameters(array ("lang"=>"de"))."'>DE</a>, ";
	echo "<a href='".anotateUrlWithParameters(array ("lang"=>"en"))."'>EN</a>";
}

?>