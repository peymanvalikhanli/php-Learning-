<?php

$con = mysqli_connect("localhost", "php", "123123$#@!", "iami");

if (mysqli_connect_errno()) {
    echo "<br><br><br>";
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// echo "connected";

// Perform queries and print out affected rows
mysqli_query($con, "SELECT * FROM users");
echo "Affected rows: " . mysqli_affected_rows($con);


mysqli_close($con);
