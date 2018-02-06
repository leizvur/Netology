<?php
$result=[];
$weather="http://api.openweathermap.org/data/2.5/weather?q=Moscow,ru&units=metric&APPID=00919a794567725c48568e1eed3ba56b";

// echo "Шаг 1: вытаскиваем содержимое с сайта", PHP_EOL;
$content=file_get_contents($weather);
/*echo "<pre>";
print_r($content);*/


//echo "Шаг 2: парсим JSON в массив", PHP_EOL;
$result=json_decode($content, true);
/*echo "<pre>";
print_r($result);*/

//echo "Шаг 3: выводим показания температуры и погодных условий", PHP_EOL;
?>

<h1>Текущая погода в Москве</h1>
<p><strong>Температура</strong>: <?php echo $result[main][temp]; ?>С, свежо </p>
<p><strong>Давление</strong>: <?php echo $result[main][pressure]; ?> мм р.с.  </p>
<p><strong>Влажность</strong>: <?php echo $result[main][humidity]; ?>% </p>
<p><strong>Облачность</strong>: <?php echo $result[clouds][all] . "%, " . "самое время рассмотреть небо"; ?> </p>
<p><strong>Ветер</strong>: <?php echo $result[wind][speed]; ?> м\с, не забудьте шляпу и подзорную трубу </p>