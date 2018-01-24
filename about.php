<?php
$name = "Таня";
$years = "40";
$email = "leizvur@yahoo.com";
$city = "Москва";
$about = "Люблю людей"
?>

<!DOCTYPE html>
<html>
<head>
	<title>Немного обо мне</title>
</head>
<body>
	<head>Немного обо мне</head>
	<table>
		<tr>
			<td>Имя</td>
			<td><?= $name ?></td>
		</tr>
		<tr>
			<td>Возраст</td>
			<td><?= $years ?></td>
		</tr>
		<tr>
			<td>Адрес электронной почты</td>
			<td><?= $email ?></td>
		</tr>
		<tr>
			<td>Город</td>
			<td><?= $city ?></td>
		</tr>
		<tr>
			<td>Обо мне</td>
			<td><?= $about ?></td>
		</tr>
	</table>

</body>
</html>>
