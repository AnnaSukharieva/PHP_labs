<?php

class Country {
    public $name;
    public $capital;
    public $capitalPopulation;

    public function __construct($name, $capital, $capitalPopulation) {
        $this->name = $name;
        $this->capital = $capital;
        $this->capitalPopulation = $capitalPopulation;
    }
}

$countries = array(
    new Country("Україна", "Київ",  "2,884 мільйона"),
    new Country("Франція", "Париж", "2,161 мільйона"),
    new Country("Німеччина", "Берлін", "3,645 мільйона")
);

echo "<table border='1'>";
foreach ($countries as $country) {
    echo "<tr>";
    echo "<td>{$country->name}</td><td>{$country->capital}, {$country->capitalPopulation}</td>";
    echo "</tr>";
}
echo "</table>";

?>
