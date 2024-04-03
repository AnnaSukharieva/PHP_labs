<?php

function multiplication_table($number)
{
	echo "<tr>";
	for ($i = 1; $i <= 10; $i++) {
		echo "<td>$number * $i = " . $number * $i . "</td>";
	}
	echo "</tr>";
}

echo "<html><body><table border='1'>";

for ($j = 2; $j <= 9; $j++) {
	multiplication_table($j);
}

echo "</table></body></html>";


