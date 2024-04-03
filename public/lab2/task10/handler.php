<?php

$start = $_POST["start"];
$end = $_POST["end"];

if (is_numeric($start) && is_numeric($end) && $start < $end) {
    echo "<table border='1'>";
    for ($i = $start; $i <= $end; $i++) {
        if ($i != 0){
            echo "
            <tr> 
                <td>
                    10 / $i = " . (10 / $i) . "
                </td> 
            </tr>";
        }
    }
    echo "</table>";
} else {
    echo "Кінець і початок діапазону повинні бути числами. Меншим і більшим числом віповідно :(";
}
