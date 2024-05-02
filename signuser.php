<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>account created</title>
  <link rel="stylesheet" href="water.css">
</head>
<body>

</body>
</html>





<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mychat";



$username2 = $_GET['username'];
$email = $_GET['email'];
$passwordtest = $_GET['password'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "INSERT INTO users (username, email , password) VALUES ('$username2','$email','$passwordtest');";
if ($conn->query($sql) === true) {
  echo "your account created successfully";
} else {
  echo "cannot create your account";
}

$conn->close();
?>