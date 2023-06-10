<?php

require_once("index.php");

require_once("DB.php");

function get_users()
{
    return select_all("users");
}

function user_login($username, $password)
{
    $users = get_users();
    foreach ($users as $user) {
        if ($user["username"] == $username && $user["pass"] == $password) {
            return true;
        }
    }
    return false;
}
