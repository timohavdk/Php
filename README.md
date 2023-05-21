# Php

## Syntax

To write code in php in .php or .html file use

```php
<?php 'code hear' ?>
```

To write short (but you need to config your php.ini to 'short_open_tag = On'):

```php
<? 'code hear' ?>
```

To one value (Result 4):

```php
<?= 2+2 ?>
```


## Varible and data types

### Varible

To create varible in php you need:

```php
<?php 
$num = 5;
?>
```

To output variable:

```php
<?php 
$num = 5;
echo $num; 
?>
```

To output variable (you need $ with " ... " , to text ' ... '):

```php
<?php 
$num = 5;
echo "num = $num";
echo 'num = $num';
?>
```

### Data Types

Full data types:
- bool
- int
- float
- string
- array
- object
- callable
- mixed
- resource
- null

Scalar types:
- bool
- int
- float
- string

#### In PHP dynamic types!!!

## Operators

As in different programming language

But simple different:
 
- String union:

```php
<?php
$a="Привет, ";
$b=" мир";
echo $a . " " . $b . "!";   // Привет мир!
?>
```

- Twice compare

```php
<?php
<=>
?>
```

Compare two value and give:
- 0 - are equal
- 1 - left is bigger than right
- -1 - right is bigger than left

```php
$a = 2 <=> 2;     // 0    (эквивалентно 2 == 2)
$b = 3 <=> 2;     // 1    (эквивалентно 3 > 2)
$c = 1 <=> 2;     // -1   (эквивалентно 1 < 2)
echo "a=$a   b=$b   c=$c";  // a=0  b=1  c=-1
```

## Condition operator

As in different programming language

But simple different:

- Match:

It returns value, which satisfies the condition (compare with types and values, switch withs only values):

```php
<?php
$a = 2;
$operation = match($a)
{
    1 => "сложение",
    2 => "вычитание",
    default => "действие по умолчанию",
};
echo $operation; // вычитание
?>
```

## Cycle

As in different programming language


## Array

As in different programming language

But vocabulary in php is array
```php
<?php
$vocabulary = array('first' => 1, 'second' => 2, 'third' => 3);
foreach ($vocabulary as $key => $value) {
    echo(" Key: $key => Value: $value <br>");
}
?>
```

## Function

As in different programming language (js)

But in PHP8 naming parameters 

```php
<?php
function hello($name, $age) {
    echo("My name is $name. I'm $age years old <br>");
}

$names = ['Dave' => 23, 'Jake' => 34];
foreach ($names as $name => $age) {
    hello($name, age: $age);
}
?>
```

```php
<?php
$jake = 'Jake';
$questions = 'How are you?';

$sayHi = function($name) use ($questions) {
	echo "Hi, $name <br> $questions";
};

$sayHi($jake);
?>
```

## Arrow Function

By default, you can use variable from global. You need to return a result.

```php
<?php
$jake = 'Jake';
$questions = 'How are you?';

$sayHi = fn($name) => "Hi, $name <br> $questions";

echo $sayHi($jake);
?>
```