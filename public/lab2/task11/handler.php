<?php

$start = $_POST["start"];
$end = $_POST["end"];

$range_start = min($start, $end);
$range_end = max($start, $end);


if (is_numeric($range_start) && is_numeric($range_end)) {
    echo "<table border='1'>";
    for ($i = $range_start; $i <= $range_end; $i++) {
        if ($i != 0) {
            echo "
            <tr> 
                <td>
                    10 / $i = " . (10 / $i) . "
                </td> 
            </tr>";
        } else{
            break;
        }
    }
    echo "</table>";
} else {
    echo "Кінець і початок діапазону повинні бути числами :(";
}
