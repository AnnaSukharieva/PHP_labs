<?php

class MultiplicationTable {
    private $number;

    public function __construct($number) {
        $this->number = $number;
    }

    public function generateTable() {
        echo "<h2>Таблиця множення для числа {$this->number}</h2>";
        echo "<table border='1'>";
        for ($i = 1; $i <= 10; $i++) {
            $result = $this->number * $i;
            echo "<tr><td>{$this->number} * $i</td><td>$result</td></tr>";
        }
        echo "</table>";
    }
}

$table3 = new MultiplicationTable(3);
$table5 = new MultiplicationTable(5);
$table7 = new MultiplicationTable(7);

$table3->generateTable();
$table5->generateTable();
$table7->generateTable();

?>
