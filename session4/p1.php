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

//declare(strict_types=1); 

function sum(int $a , int $b){
    return $a+$b; 
}


// echo sum(12,"test");
// echo sum(12,12.5);
//echo sum(12,12);

echo "<br>"; 


function sum_one(int $a , int $b=10){
    return $a+$b; 
}

echo sum_one(12,11),"<br>"; 
echo sum_one(2),"<br>"; 

