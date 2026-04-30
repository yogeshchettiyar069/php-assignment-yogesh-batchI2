<?php
include "db.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = $conn->prepare("INSERT INTO emp2 (fullname, email, username, password) VALUES (?, ?, ?, ?)");
    $sql->bind_param("ssss", $fullname, $email, $username, $hash);

    if($sql->execute()){
        header("Location: project_login.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center" style="height:100vh;">
    
    <div class="col-md-5 bg-white p-4 rounded shadow">
        <h3 class="text-center mb-4">Project Manager Signup</h3>

        <form method="POST">
            
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="fullname" required>
                <label>Full Name</label>
            </div>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" required>
                <label>Email</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="username" required>
                <label>Username</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password" required>
                <label>Password</label>
            </div>

            <button type="submit" class="btn btn-success w-100">Register</button>
        </form>

        <div class="text-center mt-3">
            <a href="project_login.php">Already have an account? Login</a>
        </div>
    </div>

</div>

</body>
</html>