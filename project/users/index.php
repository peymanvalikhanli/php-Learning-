<?php
require_once("../global/index.php");
require_once("../model/users.php");
//print_r($_SERVER["REQUEST_METHOD"]); 
switch ($_SERVER["REQUEST_METHOD"]) {
    case "GET":
        $data = get_users();
        json_res("user_list", $data);
        break;
    case "POST":
        if (isset($_REQUEST["username"]) && $_REQUEST["username"] != "" && $_REQUEST["username"] != "") {
            $username = $_REQUEST["username"];
        } else {
            error_message("you must send username", 400);
        }

        if (isset($_REQUEST["name"]) && $_REQUEST["name"] != "" && $_REQUEST["name"] != "") {
            $name = $_REQUEST["name"];
        } else {
            error_message("you must send name", 400);
        }

        if (isset($_REQUEST["lastname"]) && $_REQUEST["lastname"] != "" && $_REQUEST["lastname"] != "") {
            $lastname = $_REQUEST["lastname"];
        } else {
            error_message("you must send lastname", 400);
        }

        if (isset($_REQUEST["email"]) && $_REQUEST["email"] != "" && $_REQUEST["email"] != "") {
            $email = $_REQUEST["email"];
        } else {
            error_message("you must send email", 400);
        }

        if (isset($_REQUEST["mobile"]) && $_REQUEST["mobile"] != "" && $_REQUEST["mobile"] != "") {
            $mobile = $_REQUEST["mobile"];
        } else {
            error_message("you must send mobile", 400);
        }

        if (isset($_REQUEST["password"]) && $_REQUEST["password"] != "" && $_REQUEST["password"] != "") {
            $password = $_REQUEST["password"];
        } else {
            error_message("you must send password", 400);
        }
        try{
        $res = user_register($username, $name, $lastname, $email, $mobile, $password);
        }catch(Exception $e){
            error_message($e, 400);
        }
        if ($res  == 1) {
            json_res("new_user", "OK");
        } else {
            error_message("please try again", 400);
        }
        break;
    case "PUT":
        json_res("edit_user", "");
        break;
    case "DELETE":
        if (isset($_REQUEST["username"]) && $_REQUEST["username"] != "" && $_REQUEST["username"] != "") {
            $username = $_REQUEST["username"];
        } else {
            error_message("you must send username", 400);
        }
        $res = user_delete($username);
        json_res("delete_user", "");
        if ($res  == 1) {
            json_res("new_user", "OK");
        } else {
            error_message("please try again", 400);
        }
        break;
    default:
        error_message("this action not found!!", 404);
}
