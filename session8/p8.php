<?php 

$con = mysqli_connect("localhost","php","123123$#@!","iami");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT * FROM users";

if ($result = mysqli_query($con, $sql)) {
  // Get field information for all fields
  while ($fieldinfo = mysqli_fetch_field($result)) {
    printf("Name: %s\n", $fieldinfo -> name);
    echo "<br>";
    printf("Table: %s\n", $fieldinfo -> table);
    echo "<br>";
    printf("max. Len: %d\n", $fieldinfo -> max_length);
    echo "<br><hr>";

  }
  mysqli_free_result($result);
}

mysqli_close($con);