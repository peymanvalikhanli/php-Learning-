<?php

require_once("model/users.php");


// $temp = get_users("admin");  
// $temp = get_user_by_username("admin");  
// $temp = get_user_by_token("123");  
// $temp = user_login("test67", "123123", "1234567");
$temp = user_register(); 

var_dump($temp);
