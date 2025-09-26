<?php
date_default_timezone_set("Asia/Kolkata");
echo "Current Date and Time: " . date("d-m-Y H:i:s") . "<br><br>";
$dob = "2005-12-18";
$today = new DateTime();
$birthDate = DateTime::createFromFormat("Y-m-d", $dob);
$nextBirthday = DateTime::createFromFormat("Y-m-d", $today->format("Y") . "-" . $birthDate->format("m-d"));
if ($nextBirthday < $today) {
    $nextBirthday->modify("+1 year");
}
$interval = $today->diff($nextBirthday);
echo "Days left until next birthday: " . $interval->days;
?>
