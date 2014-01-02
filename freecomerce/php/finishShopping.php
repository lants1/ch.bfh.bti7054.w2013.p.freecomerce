<?php 
 $additionalSettings = $_GET['additionalSettings'];
 $paymethod = $_GET['paymethod'];
?>
<h1>Bestellung abschliessen</h1>
<p>
<form action='<?php $_SERVER['PHP_SELF']?>'>
<p>
Vorname:<input type="text" name="firstname"><br>
</p><p>
Nachname:<input type="text" name="lastname"><br>
</p><p>
Adresse:<textarea name="address" cols="50" rows="3"></textarea>
</p><p>
EMail:<input type="text" name="email"><br>
</p><p>
Land:
<input type='radio' name='country' value='CH'> CH 
<input type='radio' name='country' value='EU'> EU
</p><p>
<input type="hidden" name="confirmed" value="confirmed">
<input type="hidden" name="additionalSettings" value="<?php echo $additionalSettings?>">
<input type="hidden" name="paymethod" value="<?php echo $paymethod?>">
<input type='submit' value='Definitiv Bestellen'>
</p>
</form>
</p>
