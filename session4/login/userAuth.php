<?php

/*
controller list 
login
forgot password
register
check valid username 
...
*/
$act = null;

if (isset($_REQUEST["act"])) {

    $act = $_REQUEST["act"];
    $act = strtolower($act);
} else {
    echo "Ops!!! error enter action!!!!";
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
        echo "404";
}
