<?php

$x = 6; 

do{
    echo "number", $x, "<br>"; 
    $x++; 
}while($x<=5); 

echo "<hr><br>"; 

for ($i= 0 ; $i <= 100 ; $i+=10){
    echo "index ", $i, "<br>"; 
}

echo "<hr><br>"; 

$arr = array("a","b","c","d"); 

foreach($arr as $v){
    echo "data : ", $v, "<br>"; 
}