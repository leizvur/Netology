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

echo "Шаг 2: Перебираем массив, имена из 2 слов выносим в отдельные плоские массивы: первая и вторая часть имени", PHP_EOL;

$doubleNames=[];
foreach ($continents as $continent => $animals)
{
	foreach ($animals as $key => $names) 
	{
		if (str_word_count($names)==2) 
		{
			$nameParts=explode(" ", $names);
			$firstPart[]=$nameParts[0];
			$secondPart[]=$nameParts[1];
		}
	}
}

echo "<pre>";
print_r($firstPart);
echo "</pre>";
echo "<pre>";
print_r($secondPart);
echo "</pre>";

echo "Шаг 3: Перемешиваем вторую часть имен", PHP_EOL;

shuffle($secondPart);
echo "<pre>";
print_r($secondPart);
echo "</pre>";

echo "Шаг 4: Получаем фантазийных животных", PHP_EOL;

foreach ($firstPart as $key => $v) 
{
	$fantasyAnimals[]=$v . " " . $secondPart[$key];
}

print_r($fantasyAnimals);


?>
