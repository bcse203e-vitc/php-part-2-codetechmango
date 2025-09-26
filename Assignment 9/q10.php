<?php
$inputFile = "students.txt";
$errorFile = "errors.log";
$lines = file($inputFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Name</th><th>Email</th><th>Age</th></tr>";
foreach ($lines as $line) {
    $parts = explode(",", $line);
    if (count($parts) != 3 || !preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", trim($parts[1]))) {
        file_put_contents($errorFile, $line . PHP_EOL, FILE_APPEND);
        continue;
    }
    $name = trim($parts[0]);
    $email = trim($parts[1]);
    $dob = new DateTime(trim($parts[2]));
    $age = (new DateTime())->diff($dob)->y;
    echo "<tr><td>$name</td><td>$email</td><td>$age</td></tr>";
}
echo "</table>";
?>
