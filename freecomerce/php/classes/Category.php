<?php
/**
* PHP-Representation of a tea category like greentea...
*
* @author lants1
*/
class Category {
	private $cat_id = 0;
	private $text_de = "";
	private $text_en = "";
	
	// Konstruktor
	public function __construct($cat_id, $text_de, $text_en) {
		$this->cat_Id = $cat_id;
		$this->text_de = $text_de;
		$this->text_en = $text_en;
	}
	
	/**
	 * Insert Category into DB...
	 *
	 * @param unknown $cat_id        	
	 * @param unknown $text_de        	
	 * @param unknown $text_en        	
	 */
	public function insertCategory($cat_id, $text_de, $text_en) {
		$query = "INSERT INTO categorie (cat_id, text_de, text_en) VALUES ('$cat_id', '$text_de', '$text_en')";
		$this->query ( $query );
	}
	
	/**
	 * Update Category...
	 *
	 * @param unknown $cat_id
	 * @param unknown $text_de
	 * @param unknown $text_en
	 */
	public function updateCategory($cat_id, $text_de, $text_en) {
		$query = "UPDATE categorie SET text_de='$text_de', text_en='$text_en' where cat_id = '$cat_id'";
		$this->query ( $query );
	}
	
	/**
	 * Get all categories
	 *
	 * @param unknown $cat_id        	
	 * @return mixed
	 */
	public function getCategories() {
		return $this->query ( "SELECT * FROM categorie");
	}
	
	/**
	 * Delete Category by id...
	 *
	 * @param unknown $id        	
	 */
	public function deleteCategory($id) {
		$this->query ( "DELETE FROM categorie WHERE cat_id = $id" );
	}
	
	/**
	 * Get Category by id
	 *
	 * @param unknown $id        	
	 * @return mixed
	 */
	public function getCategory($id) {
		return $this->query ( "SELECT * FROM categorie WHERE cat_id = $id" );
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