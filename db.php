<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mychat";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "INSERT INTO users (username, email , password) VALUES ('john','paanblogger@gmail.com' , 'password');";
if ($conn->query($sql) === true) {
  echo "your account created successfully";
} else {
  echo "cannot create your account";
}

$conn->close();
?>