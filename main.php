<?php

require_once 'config.php';

$farm = new Farm();

/** Массив из 10 коров и 20 курей **/

$animal_container = [
	"caw" => [1,2,3,4,5,6,7,8,9,10],
	"chicken" => [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]
];

/** Добавляем животных в ферму **/

foreach ($animal_container as $animal_type => $animals) {
	foreach ($animals as $animal) {
		$animal = Animal_Generator::generate_animal($animal_type);
		$farm->add_animal($animal);
	}
}

/** Собираем продукцию **/

$farm->collect_products();

/** Выводим продукцию **/

$farm->print_products();