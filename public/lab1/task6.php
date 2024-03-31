<?php
$colors = ["#FFC0CB", "#FFB6C1", "#FF69B4", "#FF1493", "#C71585", "#DB7093"];
echo '<table border="1">';
foreach ($colors as $color) {
	echo '<tr><td bgcolor="' . $color . '">' . $color . '</td></tr>';
}
echo '</table>';
