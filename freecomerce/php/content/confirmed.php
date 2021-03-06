<?php 
/**
* Generates content for the confirmation page..
*
* @author lants1
*/

 // Formparameter hohlen...
 $country = getParam('country', "nicht angegeben");
 $firstname = $_GET['firstname'];
 $lastname = $_GET['lastname'];
 $address = $_GET['address'];
 $email = $_GET['email'];
 $additionalSettings = $_GET['additionalSettings'];
 $paymethod = $_GET['paymethod'];
 
 
 // Mailsettings
 $empfaenger = "dispo-zateeo@supershop.ch";
 $absender   = "zateeo@supershop.ch";
 $betreff    = "Bestellung 234dfa723411 Eingegangen";
 $mailtext   = "Die Bestellung asfdasfafweqrwerwer";
 $antwortan  = "noreply-zateeo@supershop.ch";
 
 // Mail an Dispo
 mail( $empfaenger,
 $betreff,
 $mailtext,
 "From: $absender\nReply-To: $antwortan");
 
 // Mail an Kunden
 mail( $email,
 $betreff,
 $mailtext,
 "From: $absender\nReply-To: $antwortan");
?>
<h1>Vielen Dank für Ihre Bestellung <?php echo $firstname.", ".$lastname?></h1>
<p>
Ein Bestätigungsmail wurde verschickt an: <?php echo $email?><br><br>
Die Lieferung wird an folgende <?php echo $country?>-Adresse geliefert: 
<?php echo $address?>
<br>
<br>
Bezahlungsart: <?php echo $paymethod?> <br>
Zusätzliche Optionen: <?php echo $additionalSettings?>
<br><br>
<?php 
echo "<a href='php/content/pdfconfirmation.php?firstname=" .$firstname . "&lastname=".$lastname."&paymethod=".$paymethod."'>Bestaetigung</a>";
?>
</p>
