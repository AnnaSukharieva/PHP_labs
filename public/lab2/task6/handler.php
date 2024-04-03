<?php
$number = $_POST["number"];

if (filter_var($number, FILTER_VALIDATE_INT) !== false) {
	if ($number % 2 == 0) {
		echo "Число $number парне.";
	} else {
		echo "Число $number непарне.";
	}
} else {
	echo "Я вмію перевіряти тільки цілі числа :(";
}

