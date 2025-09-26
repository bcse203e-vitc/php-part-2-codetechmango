<?php
$originalFile = "data.txt";
$dateTime = date("Y-m-d H-i");
$pathInfo = pathinfo($originalFile);
$backupFile = $pathInfo['filename'] . $dateTime . "." . $pathInfo['extension'];
copy($originalFile, $backupFile);
echo "Backup created: " . $backupFile;
?>
