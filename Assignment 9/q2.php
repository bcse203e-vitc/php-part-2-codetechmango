<?php
$lines = file("products.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$products = [];
foreach ($lines as $line) {
    $parts = explode(",", $line);
    for ($i = 0; $i < count($parts); $i += 2) {
        $products[] = ["name" => trim($parts[$i]), "price" => (int)trim($parts[$i+1])];
    }
}
usort($products, function($a, $b) {
    return $a['price'] <=> $b['price'];
});
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Product Name</th><th>Price</th></tr>";
foreach ($products as $p) {
    echo "<tr><td>{$p['name']}</td><td>{$p['price']}</td></tr>";
}
echo "</table>";
?>
