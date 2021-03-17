<?php

class Caw_Animal extends Animal {

	public function __construct(){
		$this->product_class = 'Milk_Product';
		$this->min_product_production = 8;
		$this->max_product_production = 12;
	}

}
