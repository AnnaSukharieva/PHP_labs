<?php
$filename = 'tags.txt';

if (file_exists($filename)) {
    $file = fopen($filename, "r");

    echo "<table border='1'>";

    $lineNumber = 1;
    $tagName = '';
    $tagDescription = '';
    $tagCount = 0; // Додано для підрахунку кількості тегів

    while (!feof($file)) {
        $line = fgets($file);
        if ($lineNumber % 2 == 1) { 
            $tagName = trim($line);
        } else {
            $tagDescription = trim($line);
            echo "<tr><td>" . htmlspecialchars($tagName) . "</td><td>" . htmlspecialchars($tagDescription) . "</td></tr>";
            $tagCount++;
        }
        $lineNumber++;
    }

    echo "</table>";
    fclose($file);

    echo "Всього у файлі описано тегів: " . $tagCount . " ";
} else {
    echo "Файл не знайдено =(";
}
?>
</body>
</html>
