<?php
if (isset($_COOKIE['name']) && isset($_POST['surname'])) {
	$name = htmlentities($_COOKIE['name']);
	$surname = htmlentities(($_COOKIE['surname']));
	echo "Welcome, $name $surname";
}
elseif (isset($_POST['name']) && isset($_POST['surname'])) {
	$name = htmlentities($_POST['name']);
	$surname = htmlentities($_POST['surname']);

	echo "Welcome, $name $surname";

	setcookie('name', $name, time() + 120, '/', 'test.loc', false, true);
	setcookie('surname', $surname, time() + 120, '/', 'test.loc', false, true);
}
else {
	echo "Please, authenticate";
}
?>
