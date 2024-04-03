<?php

$userInfo = [
	"Ім'я" => $_POST["firstname"],
	"Прізвище" => $_POST["surname"],
	"Вік" => $_POST["age"],
	"E-mail" => $_POST["email"]
];

echo "<table border='1'>";
foreach ($userInfo as $key => $value) {
	echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
}
echo "</table>";
