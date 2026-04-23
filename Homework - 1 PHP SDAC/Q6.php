<?php

// Single and Double quotes
$car1 = 'BMW is a luxury car';
$car2 = "Audi is also a luxury car";

echo "<h3>Strings:</h3>";
echo $car1 . "<br>";
echo $car2 . "<br>";


// Concatenation
$model = "Mercedes";
$price = 6000000;

echo "<h3>Concatenation:</h3>";
echo "Car Model: " . $model . " Price: Rs. " . $price . "<br>";


// strpos()
$description = "This BMW car is very fast";
$pos = strpos($description, "BMW");

echo "<h3>strpos():</h3>";
if ($pos !== false) {
    echo "Found at position: " . $pos . "<br>";
} else {
    echo "Not found<br>";
}


// str_replace()
$newDesc = str_replace("BMW", "Audi", $description);

echo "<h3>str_replace():</h3>";
echo $newDesc . "<br>";


// String functions

$str = "   Hello Car World   ";

echo "<h3>String Functions:</h3>";
echo "Length: " . strlen($str) . "<br>";
echo "Lowercase: " . strtolower($str) . "<br>";
echo "Uppercase: " . strtoupper($str) . "<br>";
echo "Trimmed: '" . trim($str) . "'<br>";
echo "Substring: " . substr($str, 3, 10) . "<br>";

?>