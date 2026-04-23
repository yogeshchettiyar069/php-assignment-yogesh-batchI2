<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "GET">
        Username : 
        <input type="text" name="username">
        <br>
        Password :
        <input type="text" name="password">
        <br>
        Checkbox : 
        <input type="checkbox" value="Yes" name="checkbox">
        <br>
        <button type="submit">Submit</button>
</form>
</body>
</html>

<?php 
if($_SERVER["REQUEST_METHOD"] === "GET"){
    $username = $_GET["username"];
    $password = $_GET["password"];
    $checkbox = isset($_GET["checkbox"])? "agreed" : "not agreed";

    echo"Welcome, $username. You have $checkbox to the terms and conditions.";



}
?>