<?php

$mysqli = new mysqli("localhost","php","123123$#@!","iami");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "SELECT * FROM users";
$result = $mysqli -> query($sql);

// Associative array
$row = $result -> fetch_assoc();
print_r($row);

// Free result set
$result -> free_result();

$mysqli -> close();