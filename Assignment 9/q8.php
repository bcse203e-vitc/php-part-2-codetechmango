<?php
$inputFile = "data.txt";
$outputFile = "numbers.txt";
$text = file_get_contents($inputFile);
preg_match_all("/\b\d{10}\b/", $text, $matches);
file_put_contents($outputFile, implode(PHP_EOL, $matches[0]));
echo "Extracted numbers saved to numbers.txt";
?>
