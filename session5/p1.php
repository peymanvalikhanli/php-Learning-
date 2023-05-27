<?php 

$age = array("peyman"=> 30,"ali"=>24, "hasan"=> 17); 


// echo "Peyman is ", $age["peyman"]," years old. <br>"; 
// echo "Ali is ", $age["ali"]," years old. <br>"; 
// echo "Hasan is ", $age["hasan"]," years old. <br>"; 


foreach($age as $key => $value){
    echo $key," is ", $value ," years old. <br>"; 
}