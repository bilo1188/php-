<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "interview";

// Create connection

if(isset($_POST['login'])){
    $conn = new mysqli($servername, $username, $password ,$dbname);
    $email= $_POST['email'];
    $pw = $_POST['pw'];
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    
    $sql = "INSERT INTO `login` (`id`, `email`, `pw`)
    VALUES ('', '$email' , '$pw' )";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}

    $conn = new mysqli($servername, $username, $password ,$dbname);
    $email= $_GET['email'];
    $pw = $_GET['pw'];
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    
    $sql = "INSERT INTO `login` (`id`, `email`, `pw`)
    VALUES ('', '$email' , '$pw' )";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();







?>