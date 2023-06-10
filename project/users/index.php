<?php
require_once("../global/index.php");
require_once("../model/users.php");
//print_r($_SERVER["REQUEST_METHOD"]); 
switch ($_SERVER["REQUEST_METHOD"]) {
    case "GET":
        $data = get_users(); 
        json_res("user_list",$data); 
        break;
        case "POST": 
            json_res("new_user","");
            break; 
        case "PUT": 
            json_res("edit_user","");
            break; 
        case "DELETE": 
            json_res("delete_user","");
            break; 
    default:
        error_message("this action not found!!", 404);
}
