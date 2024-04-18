<?php

$dates = array("2024-04-19", "19-04-2024", "2023-12-25", "25-12-2023");

foreach ($dates as $date) {
    if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)) {
        $formatted_date = preg_replace('/(\d{4})-(\d{2})-(\d{2})/', '$2.$3.$1', $date);
    } else {
        $formatted_date = preg_replace('/(\d{2})-(\d{2})-(\d{4})/', '$2.$1.$3', $date);
    }
    echo $formatted_date . "<br>";
}
?>
