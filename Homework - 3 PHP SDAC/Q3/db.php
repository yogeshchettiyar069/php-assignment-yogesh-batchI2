<?php
$servername="localhost";
$username="root";
$password="";
$db_name="i2_php";

$conn= new mysqli($servername,$username,$password,$db_name,3307);
if ($conn){
    echo "connected";
}

?>