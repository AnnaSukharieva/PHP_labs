<?php

// Створення та заповнення асоційованого масиву
$countries = array(
	"Україна" => array("population" => 38000000, "capital" => "Київ"),
	"Данія" => array("population" => 5903000, "capital" => "Копенгаген"),
	"Канада" => array("population" => 38930000, "capital" => "Оттава"),
);

//3*2
echo "<table border='1'>";
foreach ($countries as $country => $countriesData) {
	echo "<tr><td>$country</td><td>" . $countriesData['population']  . ", " . $countriesData['capital'] . "</td></tr>";
}
echo "</table>";

echo "</br>";

//2*3
echo "<table border='1'>";
echo "<tr>";
foreach ($countries as $country => $countriesData) {
	echo "<td>$country</td>";
}
echo "</tr>";
echo "<tr>";
foreach ($countries as $country => $countriesData) {
	echo "<td>" . $countriesData['population'] . ", " . $countriesData['capital'] . "</td>";
}
echo "</tr>";
echo "</table>";