<?php
// Prüft ob der Kunde bereits im Shop bekannt ist...
// Backend für AJAX Feature aus Task 12.2
$lastname=$_POST['lastname'];
if(preg_match("/[^a-z0-9]/",$lastname))
{
	print "<span style=\"color:red;\">Ungültige Zeichen gefunden...</span>";
	exit;
}

// auf die db verbinden...
$db = new mysqli('localhost', 'demo1', 'demo1', 'freecomerce');

if($db->connect_errno > 0){
	die('Unable to connect to database [' . $db->connect_error . ']');
}

// prepared statement zum überprüfen ob der kunde bereits in der datenbank existiert...
$statement = $db->prepare("SELECT `lastname` FROM `user` WHERE `lastname` = ?");
$statement->bind_param('s', $lastname);
$statement->execute();


// wenn kein kunde gefunden wurde "Meldung" es freut uns neuer Kunde....
if($statement->num_rows == 0)
{
	print "<span style=\"color:green;\">Es freut uns Sie als neuen Kunden begrüssen zu dürfen :)</span>";
}
else
{
	print "<span style=\"color:pink;\">Es freut uns dass sie sich wieder für uns entschieden haben...</span>";
}
$statement->free_result();
?>