<?php
$num1 = $_POST['number1'];
$num2 = $_POST['number2'];

if (is_numeric($num1) && is_numeric($num2)) {
	$sum = $num1 + $num2;
	$diff = $num1 - $num2;
	$prod = $num1 * $num2;
	$quot = $num1 / $num2;
	$rem = $num1 % $num2;

	echo "$num1 + $num2 = $sum <br>";
	echo "$num1 - $num2 = $diff <br>";
	echo "$num1 * $num2 = $prod <br>";
	echo "$num1 / $num2 = $quot <br>";
	echo "$num1 % $num2 = $rem <br>";
} else {
	echo "Я вмію рахувати тільки числа :(";
}
