<?php
/**
* Generates a page for finish the shopping and order the products...
*
* @author lants1
*/

$additionalSettings = $_GET ['additionalSettings'];
$paymethod = $_GET ['paymethod'];
?>
<script type="text/javascript" src="js/ajaxNewCustomerCheck.js"></script>
<h1>Bestellung abschliessen</h1>
<p>
<form id="form-definitiv" action='<?php $_SERVER['PHP_SELF']?>'
	onsubmit="javascript:return validateForm();">
	<p>
		Vorname:<input type="text" name="firstname" id="firstname"><br>
	</p>
	<p>
		<div>Nachname:<input type="text" name="lastname" id="lastname"><span id="status"></span></div><br>
	</p>
	<p>
		Adresse:
		<textarea name="address" cols="50" rows="3"></textarea>
	</p>
	<p>
		EMail:<input type="text" name="email" id="email"><br>
	</p>
	<p>
		Land: <input type='radio' name='country' value='CH'> CH <input
			type='radio' name='country' value='EU'> EU
	</p>
	<p>
		<input type="hidden" name="confirmed" value="confirmed"> <input
			type="hidden" name="additionalSettings"
			value="<?php echo $additionalSettings?>"> <input type="hidden"
			name="paymethod" value="<?php echo $paymethod?>"> <input
			type='submit' value='Definitiv Bestellen'>
	</p>
</form>
</p>
