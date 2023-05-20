<?php


// URL sample : http://localhost/php-Learning-/session3/p3.php?act=even&num=20

$select = $_REQUEST["act"];
$stop = $_REQUEST["num"];
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

echo json_encode($res);
