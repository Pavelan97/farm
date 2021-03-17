<?php

class Product_Generator {

	private function __construct(){ }

	static function generate_products($pr_class, $quantity){

		if(!class_exists($pr_class))
			throw new Exception("Класс {$pr_class} не существует.");
		$total = [];
		for ($i = 0; $i < $quantity; $i++) { 
			$total[] = new $pr_class();
		}
		return $total;
		
	}

}