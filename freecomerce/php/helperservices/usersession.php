<?php
/**
* Starts a usersession and shows the coresponding login dialog.
*
*
* @author lants1
*/
session_start ();
if (isset ( $_POST ['username'] ) && isset ( $_POST ['password'] )) {
	$_SESSION ['login'] = true;
}
if (isset ( $_POST ['logout'] )) {
	// Löschen der Session
	$_SESSION = array();
	session_destroy ();
}

if (isset ( $_SESSION ['login'] )) {
	?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
	<input type="hidden" name="logout" value="logout">
	<input type="submit" value="Logout">
</form>
<?php
} else {
	?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
	User: <input type="text" size="8" maxlength="50" name="username"> Pw: 
	<input type="password" size="8" maxlength="50" name="password">
		<input type="submit" value="Login">
</form>
<?php
}
?>
