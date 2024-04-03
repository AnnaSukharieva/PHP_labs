<?php
$startBacteria = $_POST['startBacteria'];
$endBacteria = $_POST['endBacteria'];

if ($startBacteria <= 0 || $endBacteria <= 0 || $endBacteria <= $startBacteria) {
	echo "Введені некоректні дані.";
} else{
	$currentBacteria = $startBacteria;
	$hours = 0;

	do {
		$hours++;
		$currentBacteria *= 2;
		echo "$hours. Минула(о) $hours год. - маємо $currentBacteria бактерій <br>";
	} while ($currentBacteria < $endBacteria);
}
