<?php
/**
* Representation of a shopping chart, the chart contains some products...
*
* @author lants1
*/
class ShoppingChart {

		private $products = array();
		private $size = 1;
		
		/**
		* Add's a product to the shopping chart.
		*
		* @param the product $product
		*/
		public function addProduct($product) {
			if (! in_array ( $product, $this->products)) {
				$this->products[] = $product;
			}
			$this->size++;
		}
		
		/**
		* Removes a product from the shopping chart.
		*
		* @param the product $product
		*/
		public function removeProduct($product) {
			$arr = array_diff($this->products, array($product));
			$this->products = $arr;
			$this->size--;
		}
		
		/**
		* Returns the current shopping chart content...
		*/
		public function getProducts() {
			return $this->products;
		}
	}
?>