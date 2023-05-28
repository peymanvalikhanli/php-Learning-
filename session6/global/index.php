<?php

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