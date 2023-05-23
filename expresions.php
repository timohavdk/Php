<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Expressions</title>
</head>
<body>
<h1>Работа с переменными</h1>
<h2>Выражения</h2>
<p>Такие же как и в остальных языках программирования</p>
<h2>Выражения</h2>
<p>Такие же как и в остальных языках программирования</p>
<p style="color: darkorange">Исключение: <=></p>
<ul>
<?php
$example = [1, 2, 3];
?>
<?php foreach ($example as $number): ?>
	<li><?= $number?> <=> 2 => <?php echo $number <=> 2;?></li>
<?php endforeach;?>
</ul>
<h2>Условные конструкции</h2>
<p>Такие же как и в остальных языках программирования</p>
<p style="color: darkorange">Исключение: match</p>
<ul>
<?php foreach ($example as $number) {
	$operation = match ($number) {
		1 => "Это 1",
		2 => "Это 2",
		default => "Это действие по умолчанию",
	};
	echo "<li>$operation</li>";
}
?>
</ul>
</body>
</html>