<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filename = $_POST['filename'];

    if (file_exists($filename)) {
        echo "<p>Файл з іменем $filename у поточному каталозі існує.</p>";
        echo "<p>Розмір файла: " . filesize($filename) . " байт.</p>";
        echo "<p>Час створення: " . date("F d Y H:i:s.", filectime($filename)) . "</p>";
        echo "<p>Час останньої модифікації: " . date("F d Y H:i:s.", filemtime($filename)) . "</p>";
        echo "<p>Вміст файла:</p>";
        echo "<textarea rows='10' cols='30'>" . htmlspecialchars(file_get_contents($filename)) . "</textarea> <br><br><br>";
    } else {
        echo "<p>Файл з іменем $filename у поточному каталозі не існує.</p><br>";
    }
}
?>

<form method="post">
    Введіть імʼя файлу <input type="text" name="filename" required>
    <button type="submit">Готово!</button>
  </form>

</body>
</html>
