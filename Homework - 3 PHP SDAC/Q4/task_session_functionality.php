<?php
session_start();

// set only once
if(!isset($_SESSION["task_id"])) {
    $_SESSION["task_id"] = 101;
}
?>

<!doctype html>
<html>
<head>
    <title>Task Session</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body class="bg-light">

<div class="container mt-5 text-center">

    <h3>Task Session Page</h3>

    <?php if(isset($_SESSION["task_id"])) { ?>
        <div class="alert alert-success">
            Current Task ID: <?= $_SESSION["task_id"]; ?>
        </div>
    <?php } else { ?>
        <div class="alert alert-danger">
            No active session
        </div>
    <?php } ?>

    <a href="task-view.php" class="btn btn-primary">View Task</a>
    <a href="task-logout.php" class="btn btn-danger">Logout</a>

</div>

</body>
</html>