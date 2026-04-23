<?php


$cars = array("BMW", "Audi", "Mercedes", "Toyota");

//using for loop
for ($i = 0; $i < count($cars); $i++) {
    echo "Car: " . $cars[$i] . "<br>";
}

//using for each loop associative array
$car_prices = array(
    "BMW" => 5000000,
    "Audi" => 4500000,
    "Mercedes" => 6000000,
    "Toyota" => 2000000
);


foreach ($car_prices as $car => $price) {
    echo $car . " costs Rs. " . $price . "<br>";
}


// array_push()
array_push($cars, "Honda");
echo "<h3>After array_push:</h3>";
print_r($cars);
echo "<br>";

// array_pop()
array_pop($cars);
echo "<h3>After array_pop:</h3>";
print_r($cars);
echo "<br>";

// array_merge()
$newCars = array("Kia", "Hyundai");
$merged = array_merge($cars, $newCars);
echo "<h3>After array_merge:</h3>";
print_r($merged);
echo "<br>";

// array_slice()
$sliced = array_slice($merged, 1, 3);
echo "<h3>After array_slice:</h3>";
print_r($sliced);
echo "<br>";

// array_keys()
$keys = array_keys($car_prices);
echo "<h3>Keys of associative array:</h3>";
print_r($keys);

?>