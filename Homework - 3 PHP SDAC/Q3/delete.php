<?php
include "db.php";

if(!isset($_GET["id"])){
    die("Invalid request");
}

$id = $_GET["id"];

$sql = $conn->prepare("DELETE FROM emp3 WHERE id=?");
$sql->bind_param("i", $id);
$sql->execute();

header("Location: read.php");
exit();
?>