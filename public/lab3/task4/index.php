<?php

$squares = [];
for ($i = 10; $i <= 20; $i++) {
	$squares[] = $i * $i;
}

$cubes = [];
for ($i = 1; $i <= 10; $i++) {
	$cubes[] = $i * $i * $i;
}

$merged = array_merge($squares, $cubes);

echo "Об'єднаний масив: [";
foreach ($merged as $value) {
	echo $value . " ,";
}
echo " ]";