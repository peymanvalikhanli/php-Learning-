<?php


// URL sample : http://localhost/php-Learning-/session3/p3.php?act=even&num=20

$select = null;
$stop = null;

if (isset($_REQUEST["act"])) {
    $select = $_REQUEST["act"];
} else {

    $res = array("act" => "error", "code" => "400", "message" => "Ops!! plz enter act!!");
    echo json_encode($res);
    exit;
}

if (isset($_REQUEST["num"])) {
    $stop = $_REQUEST["num"];
} else {

    $res = array("act" => "error", "code" => "400", "message" => "Ops!! plz enter num!!");
    echo json_encode($res);
    exit;
}




$num = 0;
$data = array();
$i = 0;
switch (trim($select)) {
    case "odd":
    case "Odd":
    case "ODd":
    case "ODD":
    case "oDD":
        $num = 1;
        break;
    default:
        $num = 0;
}

while ($num <= $stop) {
    // echo $num, "<br>";
    $data[$i] = $num;
    $i++;
    $num += 2;
}

//print_r($data);

$res = array("act" => "ok", "code" => "200", "data" => $data);

// echo json_encode($data);
echo json_encode($res);
