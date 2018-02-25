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

$doubleNames=[];
foreach ($continents as $continent => $animals)
{
	foreach ($animals as $key => $names) 
	{
		if (str_word_count($names)==2) 
		{
			$doubleNames[]=$names;
		}
	}
}
print_r($doubleNames);




echo "Шаг 3: делим двойные имена на отдельные массивы с первой и второй частью имен", PHP_EOL;

foreach ($doubleNames as $value) 
{
	$nameParts=explode(" ", $value);
	$firstPart[]=$nameParts[0];
	$secondPart[]=$nameParts[1];

}

echo "<pre>";
print_r($firstPart);
echo "</pre>";
echo "<pre>";
print_r($secondPart);
echo "</pre>";


echo "Шаг 4: Перемешиваем вторую часть имен", PHP_EOL;

shuffle($secondPart);
echo "<pre>";
print_r($secondPart);
echo "</pre>";

echo "Шаг 5: Получаем фантазийных животных", PHP_EOL;

foreach ($firstPart as $key => $v) 
{
	$fantasyAnimals[]=$firstPart[$key] . " " . $secondPart[$key];
}

print_r($fantasyAnimals);


?>
