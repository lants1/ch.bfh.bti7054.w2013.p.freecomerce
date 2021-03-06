<?php
/**
* Check's if a customer is already know according to the $_POST['lastnam'] variable
*
* @author lants1
*/
include_once ('../helperservices/loadclasses.php');
// Prüft ob der Kunde bereits im Shop bekannt ist...
// Backend für AJAX Feature aus Task 12.2
$lastname=$_POST['lastname'];
if(preg_match("/[^A-Za-z0-9]/",$lastname))
{
	print "<span style=\"color:red;\">Ungültige Zeichen gefunden...</span>";
	exit;
}

// Via Userclass die DB Abfrage machen...
$user = new User();
$statement = $user->getCustomer($lastname);


$statement->bind_result($output);

$hasResults=false;
while($statement->fetch()){
	$hasResults=true;
}


// wenn kein kunde gefunden wurde "Meldung" es freut uns neuer Kunde....
if($hasResults)
{
	print "<span style=\"color:green;\">Es freut uns Sie als neuen Kunden begrüssen zu dürfen :)</span>";
}
else
{
	print "<span style=\"color:pink;\">Es freut uns dass sie sich wieder für uns entschieden haben...</span>";
}
$statement->free_result();
?>