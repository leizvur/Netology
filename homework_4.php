<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$result=[];
$service_id="00919a794567725c48568e1eed3ba56b";
$city="Moscow, ru";
$weather="http://api.openweathermap.org/data/2.5/weather?q=$city&units=metric&APPID=$service_id";

// echo "Шаг 1: вытаскиваем содержимое с сайта", PHP_EOL;
$content=file_get_contents($weather);
/*echo "<pre>";
print_r($content);*/


//echo "Шаг 2: парсим JSON в массив", PHP_EOL;
$result=json_decode($content, true);
/*echo "<pre>";
print_r($result);*/

//echo "Шаг 3: выводим показания температуры и погодных условий", PHP_EOL;
$temperature=$result['main']['temp'];
$pressure=$result['main']['pressure'];
$humidity=$result['main']['humidity'];
$cloudy=$result['clouds']['all'];
$wind=$result['wind']['speed'];
?>

<h1>Текущая погода в Москве</h1>
<p><strong>Температура</strong>: <?php echo $temperature; ?>С, свежо </p>
<p><strong>Давление</strong>: <?php echo $pressure; ?> мм р.с.  </p>
<p><strong>Влажность</strong>: <?php echo $humidity; ?>% </p>
<p><strong>Облачность</strong>: <?php echo $cloudy . "%, " . "самое время рассмотреть небо"; ?> </p>
<p><strong>Ветер</strong>: <?php echo $wind; ?> м\с, не забудьте шляпу и подзорную трубу </p>
