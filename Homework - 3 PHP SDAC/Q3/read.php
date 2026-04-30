<?php
session_start();
include "db.php";
$result = $conn->query("SELECT * FROM emp3");
?>

<!doctype html>
<html>
<head>
    <title>Projects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body class="bg-light">

<div class="container mt-5">
    <h3 class="mb-4">All Projects</h3>

    <a href="create.php" class="btn btn-success mb-3">+ Add Project</a>

    <table class="table table-bordered table-striped">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Status</th>
            <th>Start</th>
            <th>End</th>
            <th>Action</th>
        </tr>

        <?php while($row = $result->fetch_assoc()){ ?>
        <tr>
            <td><?= $row["id"] ?></td>
            <td><?= $row["project_name"] ?></td>
            <td><?= $row["project_description"] ?></td>
            <td><?= $row["status"] ?></td>
            <td><?= $row["start_date"] ?></td>
            <td><?= $row["end_date"] ?></td>
            <td>
                <a href="update.php?id=<?= $row["id"] ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="delete.php?id=<?= $row["id"] ?>" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
        <?php } ?>

    </table>
</div>

</body>
</html>