<?php
include "db.php";

// check id
if(!isset($_GET["id"]) || empty($_GET["id"])){
    die("Invalid request");
}

$id = $_GET["id"];

// fetch data
$sql = $conn->prepare("SELECT * FROM emp3 WHERE id=?");
$sql->bind_param("i", $id);
$sql->execute();

$result = $sql->get_result();
$data = $result->fetch_assoc();

if(!$data){
    die("No data found");
}

// update logic
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["project_name"];
    $desc = $_POST["project_description"];
    $status = $_POST["status"];
    $start = $_POST["start_date"];
    $end = $_POST["end_date"];

    $update = $conn->prepare("UPDATE emp3 SET project_name=?, project_description=?, status=?, start_date=?, end_date=? WHERE id=?");
    $update->bind_param("sssssi", $name, $desc, $status, $start, $end, $id);
    $update->execute();

    header("Location: read.php");
    exit();
}
?>

<!doctype html>
<html>
<head>
    <title>Edit Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body class="bg-light">

<div class="container col-6 mt-5 bg-white p-4 shadow">

    <h3>Edit Project</h3>

    <form method="POST">

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="project_name" class="form-control" value="<?= $data["project_name"] ?>" required>
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="project_description" class="form-control" required><?= $data["project_description"] ?></textarea>
        </div>

        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="pending" <?= $data["status"]=="pending"?"selected":"" ?>>pending</option>
                <option value="in-progress" <?= $data["status"]=="in-progress"?"selected":"" ?>>in-progress</option>
                <option value="completed" <?= $data["status"]=="completed"?"selected":"" ?>>completed</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Start Date</label>
            <input type="date" name="start_date" class="form-control" value="<?= $data["start_date"] ?>">
        </div>

        <div class="mb-3">
            <label>End Date</label>
            <input type="date" name="end_date" class="form-control" value="<?= $data["end_date"] ?>">
        </div>

        <button class="btn btn-primary">Update</button>
    </form>

</div>

</body>
</html>