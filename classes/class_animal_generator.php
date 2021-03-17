<?php

class Animal_Generator {

	private function __construct(){ }

	static function generate_animal($type){

		$classname = ucfirst($type) . '_Animal';
		if(!is_subclass_of($classname, 'Animal'))
			throw new Exception("Класс {$classname} должен быть наследован от класса Animal");
		if(class_exists($classname))
			return new $classname();
		else
			throw new Exception("Класс {$classname} не существует.");
		
	}

}