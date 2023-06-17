<?php

function div($num1, $num2){
    if($num2 == 0){
        throw new Exception("number 2 is 0 !!!!", 1);
    }
    return $num1 / $num2; 
}

try{
    echo div(12,0); 
}catch (Exception $ex){
    print_r($ex); 
}