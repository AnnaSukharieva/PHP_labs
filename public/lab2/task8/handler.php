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
		echo "Число $guess - не правильно. Загадане число менше <br>";
		echo "<p>Спробуйте ще раз!</p>";
	} elseif ($guess < $secretNumber) {
		echo "Число $guess - не правильно. Загадане число більше <br>";
		echo "Спробуйте ще раз!";
	} else {
		echo '<h1 style="color: red;">ПРАВИЛЬНО!</h1>';
		setcookie('secretNumber');
	}
} else {
	echo "Ви ввели неправильі дані:( <br>";
	echo "Спробуйте, будь ласка, ще раз! (Число від 1 до 10)";
}
