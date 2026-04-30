<?php
include "db.php";
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $project_name = $_POST["project_name"];
    $project_description = $_POST["project_description"];
    $status = $_POST["status"];
    $start_date = $_POST["start_date"];
    $end_date = $_POST["end_date"];

    $sql = $conn -> prepare("INSERT INTO emp3 (project_name, project_description, status, start_date, end_date) VALUES (?, ?, ?, ?, ?)");
    $sql -> bind_param("sssss", $project_name, $project_description, $status, $start_date, $end_date);

    if($sql->execute()){
        $msg = "Project Added Successfully";
    } else {
        $msg = "Error: " . $conn->error;
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>Create Project</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center" style="height:100vh;">
    
    <div class="col-md-6 bg-white p-4 rounded shadow">

        <h3 class="text-center mb-4">Create Project</h3>

        <?php if(isset($msg)){ ?>
            <div class="alert alert-info text-center"><?php echo $msg; ?></div>
        <?php } ?>

        <form method="POST">

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="project_name" required>
                <label>Project Name</label>
            </div>

            <div class="form-floating mb-3">
                <textarea class="form-control" name="project_description" style="height:100px;" required></textarea>
                <label>Project Description</label>
            </div>

            <div class="mb-3">
                <label>Status</label>
                <select class="form-control" name="status" required>
                    <option value="pending">Pending</option>
                    <option value="in-progress">In Progress</option>
                    <option value="completed">Completed</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Start Date</label>
                <input type="date" class="form-control" name="start_date" required>
            </div>

            <div class="mb-3">
                <label>End Date</label>
                <input type="date" class="form-control" name="end_date" required>
            </div>

            <button type="submit" class="btn btn-success w-100">Create Project</button>
        </form>

        <div class="text-center mt-3">
            <a href="update.php" class="mx-2">Update</a>
            <a href="read.php" class="mx-2">Show Projects</a>
            <a href="delete.php" class="mx-2">Delete</a>

        </div>

    </div>

</div>

</body>
</html>