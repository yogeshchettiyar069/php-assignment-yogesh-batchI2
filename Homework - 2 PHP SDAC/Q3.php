<?php
include "Q1.php";
$sql = $conn->query("SELECT * FROM employee1");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Table</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Position</td>
            <td>Salary</td>
        </tr>

        <?php while($row = $sql->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["position"]; ?></td>
            <td><?php echo $row["salary"]; ?></td>
        </tr>
        <?php } ?>

    </table>
</body>
</html>