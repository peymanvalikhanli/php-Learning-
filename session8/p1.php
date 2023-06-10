<?php

$con = mysqli_connect("localhost", "php", "123123$#@!", "iami");

if (mysqli_connect_errno()) {
    echo "<br><br><br>";
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// echo "connected";

// Perform queries and print out affected rows
// mysqli_query($con, "SELECT * FROM users");
mysqli_query($con, "INSERT INTO `users`(`username`, `token`, `name`, `lastName`, `email`, `emailVerify`, `mobile`, `mobileVerify`, `password`, `passError`, `otpCode`, `otpStatusID`, `capchaCode`, `lastLogin`, `statusID`, `createdBy`) VALUES ('test67','123','test','67','test67@test.com','1','98567452','1','123123','0','','1','','','1','php code')");
echo "Affected rows: " . mysqli_affected_rows($con);


mysqli_close($con);
