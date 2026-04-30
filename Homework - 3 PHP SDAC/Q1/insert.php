<?php
include "db.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $salary = $_POST["salary"];
    $password = $_POST["password"];

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = $conn->prepare("INSERT INTO emp (name, salary, password) VALUES (?, ?, ?)");
    $sql->bind_param("sds", $name, $salary, $hash);

    if($sql->execute()){
        $msg = "User Registered Successfully";
    } else {
        $msg = "Error: " . $conn->error;
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center" style="height:100vh;">
    
    <div class="col-md-5 bg-white p-4 rounded shadow">
        
        <h3 class="text-center mb-4">Register User</h3>

        <?php if(isset($msg)) { ?>
            <div class="alert alert-info text-center"><?php echo $msg; ?></div>
        <?php } ?>

        <form method="POST">
            
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" placeholder="Name" required>
                <label>Name</label>
            </div>

            <div class="form-floating mb-3">
                <input type="number" class="form-control" name="salary" placeholder="Salary" required>
                <label>Salary</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <label>Password</label>
            </div>

            <button type="submit" class="btn btn-success w-100">Register</button>
        </form>

        <div class="text-center mt-3">
            <a href="login.php">Already have an account? Login</a>
        </div>

    </div>

</div>

</body>
</html>