<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<?php
$basic_data_type = ['int', 'float', 'bool', 'string', ];
$all_data_type = ['int', 'float', 'bool', 'string', 'array', 'object', 'callable', 'mixed', 'resource', 'null'];
?>
<h1>Типы данных</h1>
<h2>Базовые типы данных</h2>
<ul>
<?php foreach ($basic_data_type as $data_type): ?>
	<li><?= $data_type ?></li>
<?php endforeach;?>
</ul>
<h2>Составные типы данных</h2>
<ul>
	<?php foreach ($all_data_type as $data_type): ?>
		<li><?= $data_type ?></li>
	<?php endforeach;?>
</ul>
<p><b style="color: darkorange">В PHP динамическая типизация</b></p>
<h2>Приведение типов</h2>
<?php
$dif_type = [
	'пустая сторка' => '',
	'не пустая сторка' => 'что-то есть',
	'ноль' => 0,
	'один' => 1,
	'null' => null
];
?>
<ul>
<?php
foreach ($dif_type as $key => $value) {
	echo "<li>Значение в перменной ^" . var_dump($value) . "<br> Boolean value: " . boolval($value) . ";</li>";
}
?>
</ul>
</body>
</html>