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
        $text = "Hello My name is PHP"; 
        echo $text; 
        echo "<br> <hr> <br>"; 
        echo "strlen: <br>";
        print_r(strlen($text));
        echo "<br> <hr> <br>"; 
        echo "str_word_count: <br>";
        print_r(str_word_count($text));
        echo "<br> <hr> <br>"; 
        echo "strrev: <br>";
        print_r(strrev($text));
        echo "<br> <hr> <br>"; 
        echo "strpos: <br>";
        print_r(strpos($text,"My"));
        echo "<br> <hr> <br>"; 
        echo "strrev: <br>";
        var_dump(strpos($text,"test"));
        echo "<br> <hr> <br>"; 
        echo "str_replace: <br>";
        var_dump(str_replace("PHP","Peyman",$text));
        echo "<br> <hr> <br>"; 
        
    ?>
</body>
</html>