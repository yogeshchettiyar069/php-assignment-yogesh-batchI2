<?php
include "Q1.php";
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $id = $_POST["id"];
    $name = $_POST["name"];
    $job_title = $_POST["job_title"];
    $salary = $_POST["salary"];

    $sql = $conn -> prepare("insert into employee values(?,?,?,?)");
    $sql -> bind_param("issd",$id, $name, $job_title, $salary);


    if($sql -> execute()){
        echo"<br> Data inserted";
    }else{
        echo"<br> Data not inserted";
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
        Name : 
        <input type="text" name = "name">
        <br>
        Job Title :
        <input type="text" name = "job_title">
        <br>
        Salary :
        <input type="text" name="salary">
        <br>
        <button type="submit">Insert</button>
</form>
</body>
</html>