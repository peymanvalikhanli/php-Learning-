<?php

/*
controller list 
login
forgot password
register
check valid username 
...
*/
function error_message($message, $code = 404)
{
    header("HTTP/1.0 404 Not Found");
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
    case "login":
        json_res($act,"ok"); 
        break;
    case "forgot_pass":
        json_res($act,"ok"); 
        break;
    case "register":
        json_res($act,"ok"); 
        break;
    case "check_valid_user":
        json_res($act,"ok"); 
        break;
    default:
        error_message("this action not found!!");
}
