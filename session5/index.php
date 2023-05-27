<?php 
$arr = array("data1","data2","data3","data4");

$arr_len = count($arr); 
// print_r($arr); 
//echo count($arr); 

for($index=0; $index < $arr_len ; $index++){
    echo "Index ",$index , " of array : ",$arr[$index], "<br>";
}
