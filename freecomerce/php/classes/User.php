<?php
/**
 * PHP Representation of user table....
 *
 * @author lants1
 */
class User extends mysqli {
	
	/**
	 * Add's a new User to DB...
	 *
	 * @param unknown $username        	
	 * @param unknown $firstname        	
	 * @param unknown $lastname        	
	 * @param unknown $address        	
	 * @param unknown $email        	
	 * @param unknown $password        	
	 * @param unknown $lastlogin        	
	 */
	public function insertUser($username, $firstname, $lastname, $address, $email, $password, $lastlogin) {
		$query = "INSERT INTO user (username, firstname, lastname, address, email, password, lastlogin) VALUES ('$username', '$firstname', '$lastname', '$address', '$email', '$password', '$lastlogin')";
		$this->query ( $query );
	}
	
	/**
	 * get all users from database
	 */
	public function getAllUsers() {
		return $this->query ( "SELECT * FROM user" );
	}
	
	/**
	 * Get customer by lastname...
	 *
	 * @param $lastname        	
	 * @return mixed
	 */
	public function getCustomer($lastname) {
		// prepared statement zum überprüfen ob der kunde bereits in der datenbank existiert...
		$statement = $this->prepare("SELECT `lastname` FROM `user` WHERE `lastname` = ?");
		$statement->bind_param('s', $lastname);
		$statement->execute();
		return $statement;
	}
	
	/**
	 * create a new db connection
	 */
	function __construct() {
		parent::__construct ( "localhost", "demo1", "demo1", "freecomerce" );
	}
	
	/**
	 * end db connection
	 */
	function __destruct() {
		parent::close ();
	}
}
?>