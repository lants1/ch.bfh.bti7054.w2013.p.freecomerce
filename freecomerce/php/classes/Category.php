<?php
	class Category
	{
		private $cat_id = 0;
		private $text_de = "";
		private $text_en = "";
		
		//Konstruktor
		public function __construct($prod_id, $text_de, $text_en)
		{
			$this->cat_Id = $prod_id;
			$this->text_de = $text_de;
			$this->text_en = $text_en;
		}
	}
?>