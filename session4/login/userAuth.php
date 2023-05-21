<?php

/*
controller list 
login
forgot password
register
check valid username 
...
*/
//________________________ Data model

$users = array(
    array("name" => "Peyman", "lastname" => "Valikhanli", "username" => "peymanvali", "pass" => "123456789", "email" => "info@valikhanli.info"),
    array("name" => "Ali", "lastname" => "Aliniya", "username" => "ali", "pass" => "123456789", "email" => "info@ali.info"),
    array("name" => "Mahtab", "lastname" => "Yosefi", "username" => "mahtaby", "pass" => "1234567", "email" => "info@mahtab.info"),
);

//________________________ functions

function error_message($message, $code = 400)
{
    switch ($code) {
        case 404:
            header("HTTP/1.0 404 Not Found");
            break;
        case 403:
            header("HTTP/1.0 403 Forbidden");
            break;
        case 400:
        default:
            header("HTTP/1.0 400 Bad Request");
            break;
    }

    $res = array("act" => "error", "code" => $code, "message" => $message);
    echo json_encode($res);
    exit;
}

function json_res($act, $data, $code = 200)
{
    $res = array("act" => $act, "code" => $code, "data" => $data);
    echo json_encode($res);
    exit;
}

//________________________

$act = null;

if (isset($_REQUEST["act"])) {

    $act = $_REQUEST["act"];
    $act = strtolower($act);
} else {
    error_message("Ops!!! error enter action!!!!");
}



switch ($act) {
    case "get_users":
        json_res($act, $users);
        break;
    case "login":
        $username = null;
        $password = null;
        if (isset($_REQUEST["username"])) {
            $username = $_REQUEST["username"];
            if ($username == "" || $username == null) {
                error_message("you must enter Username.");
            }
            if (strlen($username) >= 20) {
                error_message("Username is not found!!!");
            }
        } else {
            error_message("please Enter Username");
        }

        if (isset($_REQUEST["password"])) {
            $password = $_REQUEST["password"];
            if ($password == "" || $password == null) {
                error_message("you must enter Password.");
            }
            if (strlen($password) > 50 || strlen($password) < 6) {
                error_message("Password is not valid");
            }
        } else {
            error_message("please Enter Password");
        }

        foreach ($users as $user) {
            //print_r( $user);exit; 
            if ($user["username"] == $username && $user["pass"] == $password) {
                json_res($act, "ok");
            }
        }

        error_message("user not found", 403);

        break;
    case "forgot_pass":
        json_res($act, "ok");
        break;
    case "register":
        json_res($act, "ok");
        break;
    case "check_valid_user":
        json_res($act, "ok");
        break;
    default:
        error_message("this action not found!!", 404);
}
