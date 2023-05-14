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
    echo "<br>pi <br>";
    echo (pi());
    echo "<br>max <br>";
    echo "12, 11, 0, -1, 100 <br>";
    echo min(12, 11, 0, -1, 100);
    echo "<br>min <br>";
    echo "200, 1, -1, 0, 12 <br>";
    echo max(200, 1, -1, 0, 12);
    echo "<br>abs<br>";
    echo "-1<br>";
    echo abs(-1);
    echo "<br>sqrt<br>";
    echo "64<br>";
    echo sqrt(64);
    echo "<br>round<br>";
    echo "1.64<br>";
    echo round(1.64);
    echo "<br>round<br>";
    echo "1.4<br>";
    echo round(1.4);

    echo "<br>rand<br>";
    echo rand();
    echo "<br>rand<br>";
    echo rand(10,100);
    
    
    ?>
</body>

</html>