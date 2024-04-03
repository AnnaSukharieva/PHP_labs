<?php
$num = $_POST["number"];

if ($num > 0 && $num < 10) {
    echo "<table border='1'>";
    for ($i = 1; $i <= 10; $i++) {
        $red = rand(0, 255);
        $green = rand(0, 255);
        $blue = rand(0, 255);
        $color = "rgb($red, $green, $blue)";
        echo "<tr style='background-color: $color;'>
            <td> $num * $i = " . ($num * $i) . "</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "Будь ласка, введіть число від 1 до 10";
}

