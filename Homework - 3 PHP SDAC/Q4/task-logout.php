<?php
session_start();

// unset specific variable
unset($_SESSION["task_id"]);

// destroy full session
session_destroy();
?>

<!doctype html>
<html>
<head>
    <title>Logout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body class="bg-light">

<div class="container mt-5 text-center">

    <h3>You have been logged out</h3>

    <div class="alert alert-warning mt-3">
        Session destroyed successfully
    </div>

    <a href="task_session_functionality.php" class="btn btn-primary">Start Again</a>

</div>

</body>
</html>