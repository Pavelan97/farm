<?php

class Chicken_Animal extends Animal {

	public function __construct(){
		$this->product_class = 'Egg_Product';
		$this->min_product_production = 0;
		$this->max_product_production = 1;
	}

}