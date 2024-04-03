<?php
$num1 = $_POST['number1'];
$num2 = $_POST['number2'];

if (is_numeric($num1) && is_numeric($num2)) {
	if ($num1 > $num2) {
		echo "Число $num1 більше за $num2";
	} elseif ($num1 < $num2) {
		echo "Число $num2 більше за $num1";
	} else {
		echo "$num1 та $num2 рівні числа";
	}
} else {
	echo "Я вмію порівнювати тільки числа :(";
}
