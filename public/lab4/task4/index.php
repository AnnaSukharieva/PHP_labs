<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['mode'])){
        echo "Виберіть тип входу"; 
    }
    else{
        $mode = $_POST['mode'];
        $login = $_POST['login'];
        $password = $_POST['password'];

        if ($mode == 'Вхід') {
            $filename = $login . '.txt';
            if (file_exists($filename)) {
                $storedPassword = trim(file_get_contents($filename));
                if ($password === $storedPassword) {
                    echo "Доброго дня, $login!";
                } else {
                    echo "Пароль не правильний.";
                }
            } else {
                echo "Такий користувач не зареєстрований.";
            }
        } elseif ($mode == 'Реєстрація') {
            $filename = $login . '.txt';
            if (!file_exists($filename)) {
                file_put_contents($filename, $password);
                echo "Користувача $login успішно зареєстровано.";
            } else {
                echo "Логін вже зайнятий. Будь ласка, оберіть інший логін.";
            }
        } 
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Логін: <input type="text" name="login" required><br>
    Пароль: <input type="password" name="password" required><br>
    <input type="radio" name="mode" value="Реєстрація"> Реєстрація
    <input type="radio" name="mode" value="Вхід"> Вхід<br>
    <input type="submit" value="Відправити">
</form>

</body>
</html>
