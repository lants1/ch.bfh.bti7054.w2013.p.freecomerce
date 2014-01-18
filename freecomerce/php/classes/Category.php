<?php
/**
* PHP-Representation of a tea category like greentea...
*
* @author lants1
*/
class Category extends mysqli{
	private $cat_id = 0;
	private $text_de = "";
	private $text_en = "";
	
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
		$stmt = $mysqli->prepare("UPDATE categorie SET text_de = ?, text_en = ? WHERE cat_id = ?");
		$stmt->bind_param('ssi',
				$text_de,
				$text_en,
				$cat_id);
		$stmt->execute();
		$stmt->close();
	}
	
	/**
	 * Get all categories
	 *   	
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
		$stmt = $mysqli->prepare("DELETE FROM categorie WHERE cat_id = ?");
		$stmt->bind_param('i', $id);
		$stmt->execute();
		$stmt->close();
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