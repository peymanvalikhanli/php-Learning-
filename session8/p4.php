<?php 
$con = mysqli_connect("localhost","php","123123$#@!","iami");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
} 

$sql = "SELECT * FROM users";
$result = mysqli_query($con, $sql);

// Fetch all
mysqli_fetch_all($result, MYSQLI_NUM );

print_r($result); 

// Free result set
mysqli_free_result($result);

mysqli_close($con);