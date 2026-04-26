<?php
include "Q1.php";
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $id = $_POST["id"];
    $salary = $_POST["salary"];

    $sql = $conn -> prepare("update employee set salary = ? where id = ?");
    $sql -> bind_param("di",$salary, $id);


    if($sql -> execute()){
        echo"<br> Data updated";
    }else{
        echo"<br> Data not updated";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        ID :
        <input type="text" name = "id">
        <br>
        
        Salary :
        <input type="text" name="salary">
        <br>
        <button type="submit">Update</button>
</form>
</body>
</html>