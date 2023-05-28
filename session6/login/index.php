<?php
require_once("../global/index.php");
require_once("../model/users.php");

switch ($_SERVER["REQUEST_METHOD"]) {
    case "GET":
        json_res("GET", "");
        break;
    case "POST":

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

        if (user_login($username, $password)) {
            json_res("login", "ok");
        }

        error_message("user not found", 403);

        break;
    case "PUT":
        json_res("PUT", "");
        break;
    case "DELETE":
        json_res("DELETE", "");
        break;
    default:
        error_message("this action not found!!", 404);
}
