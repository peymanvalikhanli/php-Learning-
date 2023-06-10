<?php
 
$mysqli = new mysqli("localhost","php","123123$#@!","iami");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "SELECT name as nikname FROM users";
$result = $mysqli -> query($sql);

// Numeric array
// $row = $result -> fetch_array(MYSQLI_NUM);
// print_r($row);

// Associative array
$row = $result -> fetch_array(MYSQLI_ASSOC);
print_r($row);

// Free result set
$result -> free_result();

$mysqli -> close();