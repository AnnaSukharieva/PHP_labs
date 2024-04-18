<?php
function extractTags($text) {
    preg_match_all("/<([a-zA-Z0-9]+)[^>]*>/", $text, $matches);
    return $matches[1];
}

$text = "<div><h1>Це <span>тестовий</span> текст <i>з тегами</i></h1></div>";
echo "$text";
$tags = extractTags($text);
echo "Назви тегів: " . implode(", ", $tags);

