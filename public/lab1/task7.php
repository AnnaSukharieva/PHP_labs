<?php
$rows = 10;
$cols = 10;
echo '<html> <body>';
for ($row = 1; $row <= $rows; $row++) {
	for ($col = 1; $col <= $cols; $col++) {
		$result = $row * $col;
		echo "{$row} * {$col} = {$result} ";
		echo '<br>';
	}
	echo '<br>';
}
echo '</body> </html>';
