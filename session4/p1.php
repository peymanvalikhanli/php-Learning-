<?php 

function message(){
    echo "hello"; 
}

message(); 

echo "<br>"; 

function show_name($name){
    echo "this name is : $name"; 
}

show_name("peyman");


echo "<br>"; 

declare(strict_types=1); 

function sum(int $a , int $b){
    return $a+$b; 
}


echo sum(12,"test");