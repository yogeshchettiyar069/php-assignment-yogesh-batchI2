<?php
session_start();

if(!isset($_SESSION["username"])){
    header("Location: project_login.php");
    exit();
}
?>

<!doctype html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="d-flex justify-content-between">
        <h3>Welcome <?php echo $_SESSION["username"]; ?></h3>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>

    <hr>

    <h4>Your Projects</h4>

    <ul class="list-group">
        <li class="list-group-item">Project 1 - Website Development</li>
        <li class="list-group-item">Project 2 - Mobile App</li>
        <li class="list-group-item">Project 3 - Database System</li>
    </ul>

</div>

</body>
</html>