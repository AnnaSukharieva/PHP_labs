<form method="post">
    Введіть номер телефону: <input name="phone">
    <input type="submit" value="Перевірити">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['phone'];

    if (preg_match("/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/", $phone)) {
        echo "Вірний номер телефону";
    } else {
        echo "Невірний номер телефону";
    }
}
?>
