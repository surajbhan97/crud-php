<?php
$servername = "localhost:3309";
$username = "root";
$password = "";
$mydb = "crudoperation";

// Create connection
$conn = new mysqli($servername, $username, $password, $mydb);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{

    // echo "Connected successfully";
}
?>