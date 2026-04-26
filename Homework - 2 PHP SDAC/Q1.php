<?php 
$servername = "localhost";
$username = "root";
$password = "Yogesh456#";
$db_name = "yogesh_sdac_php_homework";

$conn = new mysqli($servername, $username, $password, $db_name);
if($conn){
    echo"Database connected";
}else{
    echo"Database not connected";
}

?>