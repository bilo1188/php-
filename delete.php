<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "interview";

$conn = new mysqli($servername, $username, $password ,$dbname);

$id = $_GET['id'];
$sql = "DELETE FROM `login` WHERE `login`.`id` = '$id' ";
mysqli_query($conn, $sql);


?>
