<?php 

require_once("model/DB.php"); 

$temp = select_all("actions"); 

print_r($temp); 
