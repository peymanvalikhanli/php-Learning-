<?php

$mysqli = new mysqli("localhost","php","123123$#@!","iami");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$charset = $mysqli -> character_set_name();
echo "Default character set is: " . $charset;

$mysqli -> close();