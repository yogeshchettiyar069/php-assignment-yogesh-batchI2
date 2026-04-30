<?php
session_start();
?>

<!doctype html>
<html>
<head>
    <title>View Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body class="bg-light">

<div class="container mt-5 text-center">

    <h3>Task Viewer</h3>

    <?php if(isset($_SESSION["task_id"])) { ?>
        <div class="alert alert-info">
            Active Task ID: <?= $_SESSION["task_id"]; ?>
        </div>
    <?php } else { ?>
        <div class="alert alert-danger">
            No active task found (session ended)
        </div>
    <?php } ?>

    <a href="task_session_functionality.php" class="btn btn-secondary">Back</a>

</div>

</body>
</html>