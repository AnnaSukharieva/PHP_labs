<?php
if (!isset($_COOKIE['secretNumber'])) {
	$secretNumber = rand(1, 10);
	setcookie('secretNumber', $secretNumber);
} else {
	$secretNumber = $_COOKIE['secretNumber'];
}

$guess = $_POST["guess"];

if (!empty($guess) && is_numeric($guess) && $guess < 10 && $guess > 0) {
	if ($guess > $secretNumber) {
		echo "Загадане число менше";
	} elseif ($guess < $secretNumber) {
		echo "Загадане число більше";
	} else {
		echo 'ПРАВИЛЬНО!';
		setcookie('secretNumber');
	}
} else {
	echo "Ви ввели неправильні дані:( (Число від 1 до 10)";
}
