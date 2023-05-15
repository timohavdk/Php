<?php
if (isset($_COOKIE['name']) && isset($_COOKIE['surname'])) {
	header("HTTP/1.1 303 Found");
	header("Location: user.php");
}
else {
	header("HTTP/1.1 200 OK");
	header("Accept: text/html");
	header("Accept-Charset: utf-8");
	header("Accept-Language: *");
	header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="user.php" method="post">
	<div class="input">
		<label for="name">Name</label>
		<input id="name" name="name">
	</div>
	<div class="input">
		<label for="surname">Surname</label>
		<input id="surname" name="surname">
	</div>
	<button type="submit">Send</button>
</form>
</body>
<html>