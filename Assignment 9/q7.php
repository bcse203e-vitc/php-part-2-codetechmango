<?php
class NumberException extends Exception {}
function calculateAverage($numbers) {
    if (empty($numbers)) throw new NumberException("No numbers provided");
    return array_sum($numbers) / count($numbers);
}
$numbers = [10, 20, 30, 40, 50];
try {
    $avg = calculateAverage($numbers);
    echo "Average: " . $avg;
} catch (NumberException $e) {
    echo $e->getMessage();
}
?>
