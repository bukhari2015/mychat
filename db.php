<?php
$mysqli = new mysqli("localhost","root","","mychat");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Perform query
// if ($result = $mysqli->query("SELECT * FROM users")) {
//   echo "Returned rows are: " . $result -> num_rows;
//   // Free result set
//   $result -> free_result();
// }

$result = $mysqli->query("SELECT * FROM users");
while ($row = $result->fetch_assoc()) {
    echo $row['name'].'/'.$row['email'].'/'.$row['password']."<br />\n";
}
$mysqli -> close();