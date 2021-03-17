<?php

class Product {

	protected $product_type;

	private function __construct() { }
	
	public function get_product_type(){
		return $this->product_type;
	}

}