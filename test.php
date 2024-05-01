<?php
$username = $_GET['username'];
$email = $_GET['email'];
echo $email;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mychat";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
?>