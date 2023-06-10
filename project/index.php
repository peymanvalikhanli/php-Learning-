<?php 

require_once("model/users.php"); 

$temp = user_login("admin","1234567890");  

print_r($temp); 
