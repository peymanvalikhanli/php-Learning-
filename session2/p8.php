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

    echo "<br> <h1>check is int</h1> <br>";

    $num = 1234;
    echo $num, "<br>";
    var_dump(is_int($num));

    echo "<br>";

    $num = 12.123;
    echo $num, "<br>";
    var_dump(is_int($num));

    echo "<br>";
    $num = "text";
    echo $num, "<br>";
    var_dump(is_int($num));

    echo "<br> <h1>check is float</h1> <br>";

    $num = 1234;
    echo $num, "<br>";
    var_dump(is_float($num));

    echo "<br>";

    $num = 12.123;
    echo $num, "<br>";
    var_dump(is_float($num));

    echo "<br>";
    $num = "text";
    echo $num, "<br>";
    var_dump(is_float($num));

    echo "<br> <h1>e</h1> <br>";

    $x= 1.95e411;
    var_dump($x);

    
    $x= 1.95;
    var_dump($x);

    echo "<br> <h1>acos(8)</h1> <br>";

    $x = acos(8); 
    var_dump($x); 

    echo "<br> <h1>check is is_numeric</h1> <br>";

    echo "1234","<br>";
    $num = 1234;
    echo $num, "<br>";
    var_dump(is_numeric($num));

    echo "<br>";
    echo "12.123","<br>";
    $num = 12.123;
    echo $num, "<br>";
    var_dump(is_numeric($num));
    
    echo "<br>";
    echo "12.123","<br>";
    $num = "12.123";
    echo $num, "<br>";
    var_dump(is_numeric($num));
    echo "<br>";
    echo "'12.123' + 100","<br>";
    $num = "12.123" + 100;
    echo $num, "<br>";
    var_dump(is_numeric($num));

    echo "<br>";
    echo "'1234text'","<br>";
    $num = "1234text";
    echo $num, "<br>";
    var_dump(is_numeric($num));

    ?>
</body>

</html>