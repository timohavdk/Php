<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Array</title>
</head>
<body>
<h1>Работа с массивами</h1>
<h2>array_push</h2>
<?php
$array = [];
for ($i = 0; $i < 10; $i +=1 ) {
	array_push($array, $i);
}

foreach ($array as $element) {
	echo "$element<br>";
}
?>
<h2>array_pop</h2>
<?php
for ($i = 0; $i < 5; $i +=1 ) {
	array_pop($array);
}

foreach ($array as $element) {
	echo "$element<br>";
}
?>
<h2>in_array</h2>
<?php
echo "2 в массиве:" . in_array(2, $array) . "<br>";
echo "6 в массиве:" . in_array(6, $array) . "<br>";
?>
<h2>asort</h2>
<?php
$random_array = [];
for ($i = 0; $i < 10; $i +=1 ) {
	$elementOfArray = rand(1, 100);
	array_push($random_array, $elementOfArray);
}

asort($random_array, 1);

foreach ($random_array as $element) {
	echo "$element<br>";
}
?>
<h2>arsort</h2>
<?php
$random_array_2 = [];
for ($i = 0; $i < 10; $i +=1 ) {
	$elementOfArray = rand(1, 100);
	array_push($random_array_2, $elementOfArray);
}

arsort($random_array_2, 1);

foreach ($random_array_2 as $element) {
	echo "$element<br>";
}
?>
<h2>array_filter</h2>
<?php
$random_array_3 = [];
for ($i = 0; $i < 10; $i +=1 ) {
	$elementOfArray = rand(1, 100);
	array_push($random_array_3, $elementOfArray);
}

$random_array_3 = array_filter($random_array_3, function($v, $k) {
	return $v < 50;
	}, 1);

foreach ($random_array_3 as $element) {
	echo "$element<br>";
}
?>
<h2>array_map</h2>
<?php
$random_array_4 = [];
for ($i = 0; $i < 10; $i +=1 ) {
	$elementOfArray = rand(1, 100);
	array_push($random_array_4, $elementOfArray);
}

echo "До использования функции<br>";

foreach ($random_array_4 as $element) {
	echo "$element<br>";
}

$multiply_2 = function($number): int {
	return $number * 2;
};

echo "После использования функции<br>";

$random_array_4 = array_map($multiply_2, $random_array_4);

foreach ($random_array_4 as $element) {
	echo "$element<br>";
}
?>
</body>
</html>
