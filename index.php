<?php
function hello($name, $age): void
{
    echo("My name is $name. I'm $age years old <br>");
}

$names = ['Dave' => 23, 'Jake' => 34];
foreach ($names as $name => $age) {
    hello($name, age: $age);
}
?>