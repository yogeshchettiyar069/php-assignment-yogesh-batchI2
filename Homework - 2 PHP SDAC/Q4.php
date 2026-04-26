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
        Email :  
        <input type="text" name="email">
        <br>
        Job Title : 
        <input type="text" name="job_title">
        <br>
        Password : 
        <input type="text" name="password">
        <br>
        Confirm Password : 
        <input type="text" name="cpassword">
        <br>
        <button type="submit">Register</button>

</form>

</body>
</html>


<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $job_title = $_POST["job_title"];


    if(empty($name) ||empty($email) || empty($password) || empty($cpassword) || empty($job_title)){
        echo "<script>alert('Please enter all the details')</script>";
    }

    elseif($password != $cpassword){
        echo "<script>alert('Passwords must match')</script>";
    }

    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo"<script>alert('Please enter correct email format')</script>";

    }
    else{
        echo"<script>alert('Registration Successful')</script>";
    }
}


?>

