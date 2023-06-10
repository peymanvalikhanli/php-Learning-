<?php
 $mysqli = new mysqli("localhost","php","123123$#@!","iami");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "SELECT * FROM users";

if ($result = $mysqli -> query($sql)) {
  // Get field information for all fields
  while ($fieldinfo = $result -> fetch_field()) {
    echo "<br>";
    printf("Name: %s\n", $fieldinfo -> name);
    echo "<br>"; 
    printf("Table: %s\n", $fieldinfo -> table);
    echo "<br>"; 
    printf("Max. Len: %d\n", $fieldinfo -> max_length);
    echo "<hr>";
  }
  $result -> free_result();
}

$mysqli -> close();