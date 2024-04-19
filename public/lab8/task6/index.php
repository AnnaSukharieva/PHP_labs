<?php
require_once '../task5/Calculator.php';

$calc = new Calculator();

echo "5+3 = " . $calc->add(5, 3) . "<br>";
echo "10-4 = " . $calc->subtract(10, 4) . "<br>";
echo "6*7 = " . $calc->multiply(6, 7) . "<br>";
echo "20/5 = " . $calc->divide(20, 5) . "<br>";
echo "90/0 = " . $calc->divide(90, 0) . "<br>";
echo "13%5 = " . $calc->modulus(13, 5) . "<br>";
echo "28%0 = " . $calc->modulus(28, 0) . "<br>";
echo "Корінь 3-го ступеню з 25 = " . $calc->root(25, 3) . "<br>";
echo "Корінь 2-го ступеня з -125 = " . $calc->root(-125, 2) . "<br>";
echo "2 в 8 степені = " . $calc->power(2, 8) . "<br>";
echo "87267621962127091+8 = " . $calc->add(87267621962127091, 8) . "<br>";
?>