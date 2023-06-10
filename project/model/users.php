<?php

require_once("DB.php");



function get_users()
{
    return select_all("users");
}

function get_users_name()
{
    return select_all("users", "name as Name");
}

function get_users_name_lastname()
{
    return select_all("users", "name as Name , lastName as LastName");
}

function get_users_by_username($username)
{
    $users = select("users", null , "username like '$username'");
    
    return $users;
}

function get_users_by_token ($token)
{
    $users = select("users", null , "token like '$token'");
    
    return $users;
}

function user_login($username, $password)
{
    $users = select("users", "username , password, token", "username like '$username'");
    foreach ($users as $user) {
        if ($user["username"] == $username && $user["password"] == $password) {
            return true;
        }
    }
    return false;
}