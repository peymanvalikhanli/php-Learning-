<?php 

require_once("index.php"); 

function get_users(){

    return $GLOBALS["users"]; 
}

function user_login($username, $password){
    $users = get_users(); 
    foreach ($users as $user) {
        if ($user["username"] == $username && $user["pass"] == $password) {
            return true; 
        }
    }
    return false; 
}