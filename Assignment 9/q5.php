<?php
$logfile = "access.log";
$username = "admin";
$action = "Logged In";
$timestamp = date("Y-m-d H:i:s");
$entry = "$username - $timestamp - $action" . PHP_EOL;
file_put_contents($logfile, $entry, FILE_APPEND);
$lines = file($logfile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$lastFive = array_slice($lines, -5);
echo "<pre>";
foreach ($lastFive as $line) {
    echo $line . "\n";
}
echo "</pre>";
?>
