<?php

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

echo "Шаг 2: Перебираем массив и выносим имена с 2 словами в отдельный плоский массив", PHP_EOL;

$double_names=[];
foreach ($continents as $continent => $animals)
{
	foreach ($animals as $key => $names) 
	{
		if (str_word_count($names)==2) 
		{
			$double_names[]=$names;
		}
	}
}
print_r($double_names);

echo "Шаг 3: Перемешиваем вторую часть составных имен и получаем фантазийных животных", PHP_EOL;

$second_part=[];
$fantasy_animals=[];

foreach ($double_names as $v) 
{
	$space=strpos($v, " ");
	$second_part[]=substr($v, $space);
}
	
shuffle($second_part);
echo "<pre>";
print_r($second_part);

foreach ($double_names as $v) 
{
	$space=strpos($v, " ");
	$fantasy_animals[]=substr_replace($v, $second_part, $space);
}
print_r($fantasy_animals);

?>
