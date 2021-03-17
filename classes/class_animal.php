<?php

class Animal {

	protected $registration_code;
	protected $product_class;
	protected $min_product_production;
	protected $max_product_production;

	private function __construct(){ }
	
	public function set_register_code($code){
		$this->registration_code = $code;
	}

	public function get_product_class(){
		return $this->product_class;
	}

	public function get_min_production_quantity(){
		return $this->min_product_production;
	}

	public function get_max_production_quantity(){
		return $this->max_product_production;
	}

}
