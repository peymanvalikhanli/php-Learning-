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

    if ($username == null || $username == "" || strlen($username)) {
        throw new Exception("Error username is not valid", 1);
    }
    if ($name == null || $name == "" || strlen($name) > 20) {
        throw new Exception("Error name is nod valid", 1);
    }
    if ($lastName == null || $lastName == "" || strlen($lastName) > 20) {
        throw new Exception("Error last name is not valid", 1);
    }
    if ($email == null || $email == "" || strlen($email) > 50) {
        throw new Exception("Error Email is not valid", 1);
    }
    if ($mobile == null || $mobile == "" || strlen($mobile) > 15) {
        throw new Exception("Error mobile is not valid", 1);
    }
    if ($password == null || $password == "" || strlen($password) > 50 || strlen($password) < 6) {
        throw new Exception("Error password is not valid. password must include 6 to 50 char", 1);
    }

    $res =  insert(
        "users",
        "`username`, `token`, `name`, `lastName`, `email`, `emailVerify`, `mobile`, `mobileVerify`, `password`, `passError`, `otpCode`, `otpStatusID`, `capchaCode`, `lastLogin`, `statusID`, `createdBy`, `creariationDate`, `modifyDate`",
        "'$username', ' 12', '$name', '$lastName', '$email', '0', '$mobile', '0', '$password', '0', '', '1', '', NULL, '1', 'php', current_timestamp(), current_timestamp()"
    );
    return $res;
}

function insert_user($username, $name, $lastName, $email, $mobile, $password)
{

    if ($username == null || $username == "" || strlen($username)) {
        throw new Exception("Error username is not valid", 1);
    }
    if ($name == null || $name == "" || strlen($name) > 20) {
        throw new Exception("Error name is nod valid", 1);
    }
    if ($lastName == null || $lastName == "" || strlen($lastName) > 20) {
        throw new Exception("Error last name is not valid", 1);
    }
    if ($email == null || $email == "" || strlen($email) > 50) {
        throw new Exception("Error Email is not valid", 1);
    }
    if ($mobile == null || $mobile == "" || strlen($mobile) > 15) {
        throw new Exception("Error mobile is not valid", 1);
    }
    if ($password == null || $password == "" || strlen($password) > 50 || strlen($password) < 6) {
        throw new Exception("Error password is not valid. password must include 6 to 50 char", 1);
    }

    $cols = array(
        "`username`", "token", "name", "lastName", "email", "emailVerify", "mobile", "mobileVerify", "password", "passError", "otpCode", "otpStatusID", "capchaCode", "lastLogin", "statusID", "createdBy", "creariationDate", "modifyDate"
    );
    $values = array(
        "'$username'", "'  '", "'$name'", "'$lastName'", "' $email'", "'0'", "'$mobile'", "'0'", "'$password'", "'0'", "''", "'1'", "''", "NULL", "'1'", "'system'", "current_timestamp()", "current_timestamp()"
    );
    $res = insert_by_array("users", $cols, $values);
    return $res;
}

function user_update_username($last_username, $new_username)
{
    if ($last_username == null || $last_username == "") {
        throw new Exception("Error last_username is not set", 1);
    }
    if ($new_username == null || $new_username == "") {
        throw new Exception("Error new username is not set", 1);
    }
    try {
        $res = update("users", "`username` = '$new_username'", " `users`.`username` = '$last_username'");
        return $res;
    } catch (Exception $e) {
        return $res;
    }
}

function user_delete($username)
{
    try {
        $res = delete("users", "`users`.`username` = '$username'");
        return $res;
    } catch (Exception $e) {
        return $e;
    }
}
