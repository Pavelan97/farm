<?php

class Farm {

	private $animals = [];
	private $products = [];
	private $registration_code = 0;

	public function add_animal(Animal $animal){

		$register_code = $this->generate_id();
		$animal->set_register_code( $register_code );
		$this->animals[] = $animal;

	}

	private function generate_id(){

		return ++$this->registration_code;

	}

	public function collect_products(){

		foreach ($this->animals as $animal) {
			$product_class = $animal->get_product_class();
			$quantity = $this->get_prodaction_quantity($animal);

			$new_products = Product_Generator::generate_products($product_class, $quantity);
			
			foreach ($new_products as $product) {
				$product_type = $product->get_product_type();
				$this->products[$product_type][] = $product;
			}
		}

	}

	private function get_prodaction_quantity($animal){

		$min_quantity = $animal->get_min_production_quantity();
		$max_quantity = $animal->get_max_production_quantity();
		return mt_rand($min_quantity, $max_quantity);

	}

	public function print_products(){

		$result = 'Список продуктов:';
		foreach ($this->products as $product_type => $ar_products) {

			$result .= '</br>' . $product_type . ': ' . count($ar_products);
		}
		echo $result;

	} 

}