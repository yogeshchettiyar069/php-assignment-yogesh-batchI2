<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Name : 
        <input type="text" name="name">
        <br>
        Phone Number :
        <input type="text" name="number">
        <br>
        Preferred Car Brand : 
        <select name="brands" id="">
            <option value="">Mercedez</option>
            <option value="">BMW</option>
            <option value="">Land Rover</option>
            <option value="">Hyundai</option>
            <option value="">Tata Nano</option>
        </select>

        <button type="submit">Submit</button>
</form>
</body>
</html>

<?php 
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $name = $_POST["name"];
    $number = $_POST["number"];
    $brands = $_POST["brands"];

    echo"Hello $name. Your phone number is $number and your preferred car brand is $brands.";
}
?>