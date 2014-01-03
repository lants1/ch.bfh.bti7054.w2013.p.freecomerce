<?php
	class Product
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
	}
?>