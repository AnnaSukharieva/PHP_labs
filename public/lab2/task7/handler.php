<?php
$guess = $_POST["guess"];

if (!empty($guess) && is_numeric($guess) && $guess <= 10) {
	$secretNumber = 5;

	if ($guess == $secretNumber) {
		echo '<h1 style="color: red;">ПРАВИЛЬНО!</h1>';
	} else {
		echo "<p>Число $guess - не правильно.</p>";
		echo "<p>Спробуйте ще раз!</p>";
	}
} else {
	echo "Ви ввели не число, число більше 10 або залишили поле порожнім :( <br>";
	echo "Спробуйте, будь ласка, ще раз!";
}
