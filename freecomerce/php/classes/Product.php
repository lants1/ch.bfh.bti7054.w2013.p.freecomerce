<?php
/**
* PHP-Representation of a tea category like Noir-de-luxe...
*
* @author lants1
*/
class Product extends mysqli
	{
		private $prod_id = 0;
		private $text_de = "";
		private $text_en = "";
		private $img_path;
		private $price = 0;
		private $cat_id;
		
		//Konstruktor
		public function __construct($prod_id, $text_de, $text_en, $img_path, $price, $cat_id)
		{
			$this->prod_id = $prod_id;
			$this->text_de = $text_de;
			$this->text_en = $text_en;
			$this->img_path = $img_path;
			$this->price = $price;
			$this->cat_id = $cat_id;
		}
		
		/**
		 * Insert a Product into DB.
		 * 
		 * @param unknown $prod_id
		 * @param unknown $text_de
		 * @param unknown $text_en
		 * @param unknown $img_path
		 * @param unknown $price
		 * @param unknown $cat_id
		 */
		public function insertProduct($prod_id, $text_de, $text_en, $img_path, $price, $cat_id) {
			$query = "INSERT INTO product (prod_id, text_de, text_en, img_path, price, cat_id) VALUES ('$prod_id', '$text_de', '$text_en', '$img_path', '$price', '$cat_id')";
			$this->query ( $query );
		}
		
		/**
		 * Update Category...
		 *
		 * @param unknown $cat_id
		 * @param unknown $text_de
		 * @param unknown $text_en
		 */
		public function updateProduct($prod_id, $text_de, $text_en, $img_path, $price) {
			$query = "UPDATE product SET text_de='$text_de', text_en='$text_en', img_path='$img_path', price='$price' where prod_id = '$prod_id'";
			$this->query ( $query );
		}
		
		/**
		 * Get a list of products by category
		 * 
		 * @param unknown $cat_id
		 * @return mixed
		 */
		public function getProductsByCategory($cat_id)
		{
			return $this->query("SELECT * FROM product WHERE prod_cat_id = $cat_id");
		}
		
		/**
		 * Delete Product by id...
		 * 
		 * @param unknown $id
		 */
		public function deleteProduct($id)
		{
			$this->query("DELETE FROM product WHERE prod_id = $id");
		}
		
		/**
		 * Get Product by id
		 * 
		 * @param unknown $id
		 * @return mixed
		 */
		public function getProduct($id)
		{
			return $this->query("SELECT * FROM product WHERE prod_id = $id");
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