
<form method="post">
    Введіть e-mail адресу: <input type="text" name="email">
    <input type="submit" value="Перевірити">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
        echo "Вірна e-mail адреса";
    } else {
        echo "Невірна e-mail адреса";
    }
}
?>
