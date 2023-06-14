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

function get_user_by_username($username)
{
    $users = select("users", null, "username like '$username'");

    return $users;
}

function get_user_by_token($token)
{
    $users = select("users", null, "token like '$token'");

    return $users;
}

function user_login($username, $password, $otp = null)
{
    if ($otp == null) {
        $users = select("users", "username , password, token , passError", "username like '$username'");
        foreach ($users as $user) {
            if ($user["username"] == $username && $user["password"] == $password) {
                if ($user["passError"] < 5)
                    return true;
                else
                    return "user_block";
            }
        }
    } else {
        $users = select("users", "username , password, token , passError, otpCode", "username like '$username'");
        foreach ($users as $user) {
            if ($user["username"] == $username && $user["password"] == $password) {
                if ($user["passError"] < 5)
                    if ($user["otpCode"] == $otp)
                        return true;
                    else
                        return "user_OTP_error";
                else
                    return "user_block";
            }
        }
    }
    return false;
}

function user_register($username, $name, $lastName, $email, $mobile, $password)
{
    
    $res =  insert("users", "`username`, `token`, `name`, `lastName`, `email`, `emailVerify`, `mobile`, `mobileVerify`, `password`, `passError`, `otpCode`, `otpStatusID`, `capchaCode`, `lastLogin`, `statusID`, `createdBy`, `creariationDate`, `modifyDate`",
                     "'$username', ' 12', '$name', '$lastName', '$email', '0', '$mobile', '0', '$password', '0', '', '1', '', NULL, '1', 'php', current_timestamp(), current_timestamp()");
    return $res;
}

function insert_user()
{
    $cols = array( 
        "`username`","token", "name", "lastName", "email", "emailVerify", "mobile", "mobileVerify", "password", "passError", "otpCode", "otpStatusID", "capchaCode", "lastLogin", "statusID", "createdBy", "creariationDate", "modifyDate"
    );
    $values = array(
        "'user2'", "' 12'", "'user2'", "'users2'", "'user12@user.com'", "'0'", "'0936896543'", "'0'", "'123789'", "'0'", "'1234'", "'1'", "'1234'", "NULL", "'1'", "'system'", "current_timestamp()", "current_timestamp()"
    );
    $res = insert_by_array("users", $cols, $values);
    return $res;
}

function user_update_username(){
    // UPDATE `users` SET `username` = 'user4', `lastLogin` = NULL WHERE `users`.`username` = 'user2';
    $res = update("users","`username` = 'user5'"," `users`.`username` = 'user4'");
    return $res; 
}

function user_delete($username) {
    $res = delete("users", "`users`.`username` = '$username'");
    return $res; 
}
