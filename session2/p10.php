<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    define("val", "this is a const"); 
    define("arr", ["this is a const",12,"test",true]); 

    define("Value", "this is a Value",false);

    function ppr(){
        print_r(arr); 
    }
    
    echo val;

    echo "<br>";

    echo Value;  

    echo "<br>";
    ppr(); 
   
    

    ?>

</body>
</html>