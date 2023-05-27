<?php 

$users = array(
    array("peyman","valikhanli",10,"peymanvalikhanli2012@gmail.com"), 
    array("ali","valikhanli",20,"alivalikhanli2012@gmail.com"), 
    array("pooya","valikhanli",40,"pooyavalikhanli2012@gmail.com"), 
    array("nasim","valikhanli",68,"nasimvalikhanli2012@gmail.com")
);

//print_r($users);

echo "username is ".$users[0][0]." ". $users[0][1]. ". He is ".$users[0][2]. " years old. email : ". $users[0][3]; 