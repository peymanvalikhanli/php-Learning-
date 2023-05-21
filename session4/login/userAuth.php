<?php

/*
controller list 
login
forgot password
register
check valid username 
...
*/
function error_message($message,$code= 404){
    header("HTTP/1.0 404 Not Found");
    $res = array("act"=> "error", "code"=>$code,"message"=>$message);
    echo json_encode($res); 
    exit;  
}


//________________________
$act = null;

if (isset($_REQUEST["act"])) {

    $act = $_REQUEST["act"];
    $act = strtolower($act);
} else {
    error_message( "Ops!!! error enter action!!!!"); 
}



switch ($act) {
    case "login":
        echo "login";
        break;
    case "forgot_pass":
        echo "forgot_pass";
        break;
    case "register":
        echo "register";
        break;
    case "check_valid_user":
        echo  "check_valid_user";
        break;
    default:
    error_message("this action not found!!"); 
}
