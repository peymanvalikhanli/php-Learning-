<?php

$mysqli = new mysqli("localhost","php","123123$#@!","iami");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "SELECT * FROM users";
$result = $mysqli -> query($sql);

// Fetch all
$result -> fetch_all(MYSQLI_ASSOC);

print_r($result); 

// Free result set
$result -> free_result();

$mysqli -> close();