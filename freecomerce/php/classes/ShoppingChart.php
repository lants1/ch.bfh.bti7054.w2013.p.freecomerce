<?php
	class ShoppingChart {

		private $products = array();
		private $size = 1;
		
		public function addProduct($product) {
			if (! in_array ( $product, $this->products)) {
				$this->products[] = $product;
			}
			$this->size++;
		}
		
		public function removeProduct($product) {
			$arr = array_diff($this->products, array($product));
			$this->products = $arr;
		}
		
		public function getProducts() {
			return $this->products;
		}
		

	}
?>