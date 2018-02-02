,<?php

$space=" ";

// Создаем исходный массив
echo "Шаг 1: Создаем исходный массив";
$continents = array(
	"africa"=>array("Hexaprotodon liberiensis","Porcus"),
	"eurasia"=>array("Sciurus vulgaris", "Erminea"), 
	"south_america"=>array("Cebuella pygmaea", "Didactylus"),
	"north_america"=>array("Ovibos moschatus", "Pennanti"),
	"australia"=>array("Macropus rufus", "Harrisii"),
	"antarctica"=>array("Balaenoptera musculu", "Borealis"));

echo "<pre>";
print_r($continents);

echo "Шаг 2: Преобразовываем массив в строку";

foreach ($continents as $continent => $animals)
{
	$animal_list=implode(", ", $animals);
		echo "<pre>";
		print_r($animal_list);
}
echo "\n";
echo "Шаг 3: Ищем в строке, ограниченной символом запятой, пробел и выводим эти значения в отдельный массив", PHP_EOL;


echo "<pre>";
print_r($double_names);


echo "Шаг 4: Перемешиваем значения в массиве", PHP_EOL;
$result=shuffle($double_names);
echo "<pre>";
print_r($result);


?>

  