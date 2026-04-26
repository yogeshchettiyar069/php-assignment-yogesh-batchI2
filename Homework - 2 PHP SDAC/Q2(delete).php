<?php
include "Q1.php";
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $id = $_POST["id"];
    

    $sql = $conn -> prepare("delete from employee where id = ?");
    $sql -> bind_param("i",$id);


    if($sql -> execute()){
        echo"<br> Data deleted";
    }else{
        echo"<br> Data not deleted";
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
        
        
        <button type="submit">Delete</button>
</form>
</body>
</html>